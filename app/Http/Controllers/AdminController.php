<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\Domain;
use App\Models\User;

class AdminController extends Controller
{
    public function login_form()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('dashboard');
        }
        return view('admin.login-form');
    }


    public function login_functionality(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('dashboard'); // Redirect to admin dashboard
        } else {
            Session::flash('error-message', 'Invalid Email or Password');
            return back()->withInput($request->only('email'));
        }
    }


    public function dashboard()
    {
        $domainCount = Domain::count();
        $userCount = User::count();

        //return view('admin.dashboard');
        return view('admin.dashboard', [
            'domainCount' => $domainCount,
            'userCount' => $userCount,
        ]);
    }


    //todo: admin logout functionality
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login.form');
    }

}
