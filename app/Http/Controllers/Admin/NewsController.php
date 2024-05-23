<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    public function index()
    {
        // Get the most recent news, you can limit it to a certain number if needed
        $news = News::where('is_delete', 0)->orderBy('created_at', 'desc')->get();
        // Return the news view with the news data
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('admin.news.create');
    }

    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        // Create a new news entry
        News::create($request->all());

        // Redirect to the news index with a success message
        return redirect()->route('admin.news.index')->with('success', 'News created successfully.');
    }
    public function edit($id)
    {
        $newsItem = News::findOrFail($id);
        return view('admin.news.create', compact('newsItem'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $newsItem = News::findOrFail($id);
        $newsItem->update($request->all());

        return redirect()->route('admin.news.index')->with('success', 'News updated successfully.');
    }
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->update(['is_delete' => 1]);
        return redirect()->route('admin.news.index')->with('success', 'Blog post deleted successfully.');
    }
}
