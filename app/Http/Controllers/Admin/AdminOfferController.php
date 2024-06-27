<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;


class AdminOfferController extends Controller
{
    public function index()
    {
        $offers = Offer::orderBy('created_at', 'desc')->get();
        return view('admin.offers.index', compact('offers'));
    }

    public function show(Offer $offer)
    {
        return view('admin.offers.show', compact('offer'));
    }

    public function accept(Offer $offer)
    {
        $offer->update(['status' => 'accepted']);
        // Add any additional logic here (e.g., notifications, actions)
        return redirect()->back()->with('success', 'Offer accepted successfully.');
    }

    public function decline(Offer $offer)
    {
        $offer->update(['status' => 'declined']);
        // Add any additional logic here (e.g., notifications, actions)
        return redirect()->back()->with('success', 'Offer declined successfully.');
    }
}
