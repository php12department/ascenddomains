<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use App\Models\FaqCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class FaqController extends Controller
{
    public function index()
    {
        $categories = FaqCategory::where('is_delete', 0)->get();
        $faqs = Faq::where('is_deleted', 0)->get();
        return view('admin.faqs.index', ['faqs' => $faqs,'categories' => $categories]);
    }
    public function create()
    {
        $categories = FaqCategory::where('is_delete', 0)->get();
        return view('admin.faqs.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
            'category_id' => 'required|exists:faq_categories,id',
        ]);
        Faq::create([
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
            'category_id' => $request->input('category_id'),
        ]);
        return redirect()->route('admin.faq.index')->with('success', 'FAQ created successfully!');
    }

    public function edit(Faq $faq)
    {
        $categories = FaqCategory::where('is_delete', 0)->get();
        return view('admin.faqs.create', compact('faq', 'categories'));
    }

    public function update(Request $request, Faq $faq)
    {
        $request->validate([
            'question' => 'required|string',
            'answer' => 'required|string',
            'category_id' => 'required|exists:faq_categories,id',
        ]);
        $faq->update([
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
            'category_id' => $request->input('category_id'),
        ]);
        return redirect()->route('admin.faq.index')->with('success', 'FAQ updated successfully!');
    }
    public function destroy(Faq $faq)
    {
        $faq->update(['is_deleted' => 1]);
        return redirect()->route('admin.faq.index')->with('success', 'FAQ deleted successfully!');
    }

}
