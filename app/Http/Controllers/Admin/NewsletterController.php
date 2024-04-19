<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NewsletterSubscriber;


class NewsletterController extends Controller
{
    public function index()
    {
        $subscribers = NewsletterSubscriber::all();
        return view('admin.newsletter.index', compact('subscribers'));
    }
}
