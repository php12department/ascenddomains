<?php

namespace App\Http\Controllers\Admin;

use App\Models\Domain;
use App\Models\DomainMedia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DomainMediaController extends Controller
{
    //
    public function index()
    {
        //$domainMedia = DomainMedia::all();
        // Return a response, e.g., as JSON
        // return response()->json($domainMedia);
        $domainMedia = DomainMedia::where('is_delete', false)->with('domain')->get();
        return view('admin.domainmedia.index', compact('domainMedia'));
    }
    public function create()
    {
        // Get all domains that do not have media added
        $domains = Domain::doesntHave('domainMedia')->get();
        return view('admin.domainmedia.create', compact('domains'));
    }

    // Store a newly created domain media in storage
    public function store(Request $request)
    {
        $messages = [
            'domain_id.required' => 'Please select a domain.',
            'domain_id.exists' => 'The selected domain is invalid.',
            'media_img.required' => 'Please upload a media image.',
            'media_img.image' => 'The file must be an image.',
            'media_img.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
            'media_img.max' => 'The image size must not exceed 2048 kilobytes.',
        ];

        $request->validate([
            'domain_id' => 'required|exists:domains,id',
            'media_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], $messages);

        if ($request->hasFile('media_img')) {
            $imageName = time() . '.' . $request->media_img->extension();
            $request->media_img->move(public_path('assets/img/domains'), $imageName);
            DomainMedia::create([
                'domain_id' => $request->domain_id,
                'media_img' => $imageName,
                'is_delete' => false,
            ]);
        }
        return redirect()->route('admin.domainmedia')->with('status', 'Domain media added successfully.');
    }
    // Show the form for editing the specified domain media
    public function edit($id)
    {
        $domainMedia = DomainMedia::findOrFail($id);
        $domains = Domain::all();
        return view('admin.domainmedia.edit', compact('domainMedia', 'domains'));
    }

    // Update the specified domain media in storage
    public function update(Request $request, $id)
    {
        $messages = [
            'domain_id.required' => 'Please select a domain.',
            'domain_id.exists' => 'The selected domain is invalid.',
            'media_img.required' => 'Please upload a media image.',
            'media_img.image' => 'The file must be an image.',
            'media_img.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
            'media_img.max' => 'The image size must not exceed 2048 kilobytes.',
        ];
        $request->validate([
            'domain_id' => 'required|exists:domains,id',
            'media_img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], $messages);

        $domainMedia = DomainMedia::findOrFail($id);
        $domainMedia->domain_id = $request->domain_id;

        if ($request->hasFile('media_img')) {
            $imageName = time() . '.' . $request->media_img->extension();
            $request->media_img->move(public_path('assets/img/domains'), $imageName);
            $domainMedia->media_img = $imageName;
        }

        $domainMedia->save();
        return redirect()->route('admin.domainmedia')->with('status', 'Domain media updated successfully.');
    }
    // Remove the specified domain media from storage
    public function destroy($id)
    {
        $domainMedia = DomainMedia::findOrFail($id);
        $domainMedia->is_delete = true;
        $domainMedia->save();
        return redirect()->route('admin.domainmedia')->with('status', 'Domain media deleted successfully.');
    }

    // Display the specified domain media
    public function show($id)
    {
        $domainMedia = DomainMedia::with('domain')->findOrFail($id);
        return view('admin.domainmedia.show', compact('domainMedia'));
    }

}
