<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function submitOffer(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'offer' => 'required|numeric',
            'user_id' => 'required|exists:users,id',
            'domain_id' => 'required|exists:domains,id',
        ]);

        // Create a new offer
        Offer::create([
            'user_id' => $request->user_id,
            'domain_id' => $request->domain_id,
            'offer' => $request->offer,
        ]);

        return redirect()->back()->with('success', 'Offer submitted successfully!');
    }
}
