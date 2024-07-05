<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       // return view('home');
       return redirect()->route('index');
    }

    public function myaccount()
    {
        return view('myaccount');
    }

    public function updateaccountinfo(Request $request)
    {
        $request->validate([
            'user_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'billing_first_name' => 'required|string|max:255',
            'billing_last_name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'address1' => 'required|string',
            'address2' => 'nullable|string',
            'zip_code' => 'required|string|max:20',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
        ],
        [
            'user_name.required' => 'Username is required.',
            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.unique' => 'This email address is already taken.',
            'billing_first_name.required' => 'First name is required.',
            'billing_last_name.required' => 'Last name is required.',
            'country.required' => 'Country is required.',
            'address1.required' => 'Address is required.',
            'zip_code.required' => 'Zip code is required.',
            'city.required' => 'City is required.',
            'state.required' => 'State is required.',
            'phone_number.required' => 'Phone number is required.',
        ]
    );
        $user = Auth::user();

        $user->name = $request->user_name;
        $user->email = $request->email;
        $user->save();


        $user->billingInformation->update([
            'first_name' => $request->billing_first_name,
            'last_name' => $request->billing_last_name,
            'country' => $request->country,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'zip_code' => $request->zip_code,
            'city' => $request->city,
            'state' => $request->state,
            'phone_number' => $request->phone_number,
        ]);
        return redirect()->route('myaccount')->with('success', 'Account information updated successfully.');

    }
}
