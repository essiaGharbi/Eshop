<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Commande;
use App\Models\LigneCommande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
{
    public function store(Request $request)
    {
        $commande = Commande::where('client_id', Auth::user()->id)->where('etat', 'en cours')->first();
        if ($commande) {
            $existe = false;
            foreach ($commande->lignecommandes as $lignec) {
                if ($lignec->product_id == $request->idproduct) {
                    $existe = true;
                    $lignec->quantity += $request->quantity;
                    $lignec->update();
                }
            }
            if (!$existe) {
                $lc = new LigneCommande();
                $lc->quantity = $request->quantity;
                $lc->product_id = $request->idproduct;
                $lc->commande_id = $commande->id;
                $lc->save();
                echo "Produit commandé";
            }
            return redirect('/client/shoppingcart')->with('success', 'Produit commandé');
        } else {
            $commande = new Commande();
            $commande->client_id = Auth::user()->id;
            if ($commande->save()) {
                $lc = new LigneCommande();
                $lc->quantity = $request->quantity;
                $lc->product_id = $request->idproduct;
                $lc->commande_id = $commande->id;
                $lc->save();
                return redirect('/client/shoppingcart')->with('success', 'Produit commandé');
            } else {
                return redirect()->back()->with('error', 'Impossible de commander');
            }
        }
    }

    public function delete($idlc)
    {
        $lc = LigneCommande::find($idlc);
        $lc->delete();
        return redirect()->back()->with('success', 'Ligne de commande a été supprimé.');
    }
}
