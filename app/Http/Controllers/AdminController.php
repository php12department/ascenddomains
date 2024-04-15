<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AdminController extends Controller
{
    public function login_form()
    {
        return view('admin.login-form');
    }

    //todo: admin login functionality
    // public function login_functionality(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         if (Auth::user()->is_admin) {
    //             return redirect()->route('dashboard');
    //         } else {
    //             Session::flash('error-message', 'You do not have the right to access this page.');
    //             return back()->withInput($request->only('email'));            }
    //     } else {    
    //         Session::flash('error-message', 'Invalid Email or Password');
    //         return back()->withInput($request->only('email'));
    //     }
    // }


    // public function login_functionality(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ]);

    //     $credentials = $request->only('email', 'password');

    //     if (Auth::guard('admin')->attempt($credentials) &&  Auth::user()->is_admin == 1) {
    //         return redirect()->route('dashboard');
    //     } else {
    //         Session::flash('error-message', 'Invalid Email or Password');
    //         return back()->withInput($request->only('email'));
    //     }
    // }

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
        return view('admin.dashboard');
    }


    //todo: admin logout functionality
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('login.form');
    }

}
