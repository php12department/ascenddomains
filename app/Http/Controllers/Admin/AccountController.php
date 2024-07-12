<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class AccountController extends Controller
{
    public function show()
    {
        $admin = Admin::all();
        return view('admin.myaccount', compact('admin'));
    }
    public function update(Request $request,Admin $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255'
        ]);
        $id->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
        return redirect()->back()->with('success', 'Account updated successfully.');
    }
}
