<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterSubscriber;


class NewsletterController extends Controller
{
    // public function subscribe(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email|unique:newsletter_subscribers,email',
    //     ]);

    //     $subscriber = NewsletterSubscriber::create([
    //         'email' => $request->input('email'),
    //     ]);
    //     return redirect()->back()->with('success', 'You have subscribed to the newsletter successfully!');
    // }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
    
        $email = $request->input('email');
    
        // Check if the email already exists
        $existingSubscriber = NewsletterSubscriber::where('email', $email)->first();
    
        if ($existingSubscriber) {
            return redirect()->back()->with('error', 'You are already subscribed to the newsletter!');
        }
    
        // If the email doesn't exist, create a new subscriber
        $subscriber = NewsletterSubscriber::create([
            'email' => $email,
        ]);
    
        return redirect()->back()->with('success', 'You have subscribed to the newsletter successfully!');
    }
    
}
