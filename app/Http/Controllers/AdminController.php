<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function profile()
    {
        return view('admin.profile');
    }

    public function updateprofile(Request $request)
    {
        Auth::user()->name = $request->name;
        Auth::user()->email = $request->email;
        if ($request->password) {
            Auth::user()->password = Hash::make($request->password);
        }
        Auth::user()->update();
        return redirect('/admin/profile')->with('success', 'Profile edited');
    }

    public function users()
    {
        $users = User::where('role', 'user')->get();
        return view('admin.users.index')->with('users', $users);
    }

    public function commandes()
    {
        return view('admin.commandes.index');
    }
}
