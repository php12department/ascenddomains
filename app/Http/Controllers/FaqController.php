<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;


class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::where('is_deleted', false)->get();
        return view('faq', ['faqs' => $faqs]);
    }

    public function show($id)
    {
        $faq = Faq::findOrFail($id);
        return view('faqs.show', ['faq' => $faq]);
    }
}
