<?php

namespace App\Http\Controllers;
use App\Models\Adminlogin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;    
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $admin = Adminlogin::where('username', trim($request->username))->first();

        if (!$admin) {
            return back()->withErrors(['username' => 'Username not found']);
        }

        if (!$admin->password) {
            return back()->withErrors(['password' => 'No password set for this user']);
        }

        if (!Hash::check($request->password, $admin->password)) {
            return back()->withErrors(['password' => 'Incorrect password']);
        }

        Auth::guard('admin')->login($admin);

        return redirect()->route('form');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin/login');
    }
}
