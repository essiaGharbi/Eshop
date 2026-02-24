<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Commande;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function dashboard()
    {
        return view('client.dashboard');
    }

    public function profile()
    {
        return view('client.profile');
    }

    public function updateprofile(Request $request)
    {
        Auth::user()->name = $request->name;
        Auth::user()->email = $request->email;
        if ($request->password) {
            Auth::user()->password = Hash::make($request->password);
        }
        Auth::user()->update();
        return redirect('/client/profile')->with('success', 'Profile edited');
    }

    public function addreview(Request $request)
    {
        $review = new Review();
        $review->rate = $request->rate;
        $review->product_id = $request->product_id;
        $review->content = $request->content;
        $review->user_id = Auth::user()->id;
        $review->save();
        return redirect()->back();
    }

    public function cart()
    {
        $categories = Category::all();
        $commande = Commande::where('client_id', Auth::user()->id)->where('etat', 'en cours')->first();
        return view('client.shoppingcart')->with('categories', $categories)->with('commande', $commande);
    }

    public function checkout(Request $request)
    {
        $commande = Commande::find($request->commande);
        $commande->etat = "payee";
        $commande->update();
        return redirect('/client/dashboard')->with('success', 'Commande payee');
    }

    public function messageblock()
    {
        return view('client.messageblock');
    }

    public function mescommandes()
    {
        return view('client.commandes.index');
    }
}
