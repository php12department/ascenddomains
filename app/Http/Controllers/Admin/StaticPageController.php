<?php

namespace App\Http\Controllers\Admin;

use App\Models\StaticPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaticPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $staticPages = StaticPage::all();
        return view('admin.static_pages.index', compact('staticPages'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $staticPage = StaticPage::findOrFail($id);
        return view('admin.static_pages.edit', compact('staticPage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $staticPage = StaticPage::findOrFail($id);
        $staticPage->content = $request->input('content');
        $staticPage->save();

        $request->session()->flash('message', 'Content updated successfully!');

        // Redirect back or to another page
        return redirect()->route('admin.StaticPage.index');
    }
}
