<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\FaqCategory;

class FaqController extends Controller
{
    public function index()
    {
        $categories = FaqCategory::where('is_delete', 0)->with('faqs')->get();
        return view('faq', ['categories' => $categories]);
    }
    public function show($id)
    {
        $faq = Faq::findOrFail($id);
        return view('faqs.show', ['faq' => $faq]);
    }
}
