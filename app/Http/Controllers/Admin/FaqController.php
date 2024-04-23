<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;


class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::where('is_deleted', 0)->get();
        return view('admin.faqs.index', ['faqs' => $faqs]);
    }

    public function create()
    {
        return view('admin.faqs.create');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        // Create a new FAQ record
        Faq::create([
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
        ]);

        return redirect()->route('admin.faq.index')->with('success', 'FAQ created successfully!');
    }

    public function edit(Faq $faq)
    {
        return view('admin.faqs.create', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        // Validate the form data
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        // Update the FAQ record
        $faq->update([
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
        ]);

        return redirect()->route('admin.faq.index')->with('success', 'FAQ updated successfully!');
    }

    public function destroy(Faq $faq)
    {
        // Update the is_deleted field to 1
        $faq->update(['is_deleted' => 1]);

        return redirect()->route('admin.faq.index')->with('success', 'FAQ deleted successfully!');
    }

}
