<?php

namespace App\Models;

use App\Http\Controllers\ClientController;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    public function lignecommandes()
    {
        return $this->hasMany(LigneCommande::class, 'commande_id', 'id');
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id', 'id');
    }

    public function total()
    {
        $total = 0;
        foreach ($this->lignecommandes as $lc) {
            $total += $lc->product->price * $lc->quantity;
        }
        return $total;
    }
}
