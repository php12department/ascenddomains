<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AccountController extends Controller
{
    //
    public function show()
    {
        $admin = Admin::all();
        return view('admin.myaccount', compact('admin'));
    }
    public function update(Request $request,Admin $id)
    {
       //dd($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255'
        ]);
        // Update admin details
        $id->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Account updated successfully.');
    }
}
