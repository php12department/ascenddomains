<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FaqCategory;


class FaqCategoryController extends Controller
{
    public function index()
    {
        $categories = FaqCategory::where('is_delete', 0)->get();;
        return view('admin.faq_categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.faq_categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        FaqCategory::create($request->all());

        return redirect()->route('admin.faqcategories.index')
                         ->with('success', 'FAQ Category created successfully.');
    }
    public function show(FaqCategory $faqCategory)
    {
        return view('admin.faq_categories.show', compact('faqCategory'));
    }
    public function edit(FaqCategory $faqcategory)
    {
        return view('admin.faq_categories.edit', compact('faqcategory'));
    }
    public function update(Request $request, FaqCategory $faqcategory)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $faqcategory->update([
            'name' => $request->input('name'),
        ]);
        return redirect()->route('admin.faqcategories.index')
                         ->with('success', 'FAQ Category updated successfully.');
    }
    public function destroy(FaqCategory $faqcategory)
    {
        $faqcategory->update(['is_delete' => 1]);

        return redirect()->route('admin.faqcategories.index')
                         ->with('success', 'FAQ Category marked as deleted successfully.');
    }

}
