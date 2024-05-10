<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DomainCategory;


class DomainCategoryController extends Controller
{
    public function index()
    {
        $categories = DomainCategory::where('is_delete', 0)->get();
        return view('admin.domaincategories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.domaincategories.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:domain_categories|max:255',
        ]);

        DomainCategory::create($validatedData);

        return redirect()->route('admin.domaincategories.index')
            ->with('success', 'Category created successfully.');
    }

    public function edit($id)
    {
        $categories = DomainCategory::findOrFail($id);
        return view('admin.domaincategories.edit', compact('categories'));
    }

    public function update(Request $request, DomainCategory $domaincategory)
    {
        $request->validate([
            'name' => 'required|unique:domain_categories,name,'.$domaincategory->id.'|max:255',
        ]);
        $domaincategory->update([
            'name' => $request->input('name'),
        ]);
        
        return redirect()->route('admin.domaincategories.index')
            ->with('success', 'Category updated successfully.');
    }

    public function destroy(DomainCategory $domaincategory)
    {
        $domaincategory->update(['is_delete' => 1]);
        return redirect()->route('admin.domaincategories.index')
            ->with('success', 'Category deleted successfully.');
    }
}
