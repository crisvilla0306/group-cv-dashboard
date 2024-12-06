<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // Login logic
    public function login(Request $request)
    {
        // login user

        // validate input
        $fields = $request->validate([
            'username' => ['required', 'max:255', 'exists:users,username'],
            'password' => ['required']
        ]);

        // login the user
        if (Auth::attempt($fields)) {

            return redirect()->intended('dashboard');
        } else {
            return back()->withErrors([
                'error' => 'Incorrect password!'
            ]);
        }
    }

    // Dashboard logic
    public function showDashboard()
    {
        // Fetching all data from the users table without any restrictions
        $admins = DB::table('informations')->get();
        return view('dashboard', compact('admins'));
    }


    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

}
