<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\News;
use App\Models\Domain;
use App\Models\Contact;
use App\Models\BlogDetail;
use App\Models\StaticPage;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function blog()
    {
        $data['blogs'] = Blog::where('is_hide', 0)->where('is_delete', 0)->paginate(6);
        return view('blog')->with($data);
    }

    public function blogDetail(Request $request, $id)
    {
        $data['blog'] = Blog::where('id', $id)->where('is_hide', 0)->where('is_delete', 0)->first();
        $data['recent_blogs'] = Blog::where('is_hide', 0)->where('is_delete', 0)->latest()->take(2)->get();
        return view('blog_detail')->with($data);
    }

    public function blogSearch(Request $request)
    {
        $blog = Blog::where('blog_name', 'LIKE', '%' . $request->search . '%')->first();
        $recent_blogs = Blog::where('is_hide', 0)->where('is_delete', 0)->latest()->take(2)->get();
        return view('blog_detail', compact('blog', 'recent_blogs'));
    }

    public function contactus()
    {
        $contacts = Contact::all();
        return view('contactus', ['contacts' => $contacts]);
    }

    public function submitContactForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'message' => 'required|string',
        ]);
        $contact = Contact::create($validatedData);
        return redirect()->back()->with('success', 'Your message has been submitted successfully!');
    }

    public function privacypolicy()
    {
        $static_pages = StaticPage::where('id', 1)->first();
        return view('privacy', ['static_pages' => $static_pages]);
    }
    public function terms()
    {
        $static_pages = StaticPage::where('id', 2)->first();
        return view('terms', ['terms' => $static_pages]);
    }
    public function domainauctions()
    {
       $domains = Domain::with('type')->get();
      //  $domains = Domain::take(20)->get();
        return view('domain_auctions', ['domains' => $domains]);
    }

    public function buydomain()
    {
        return view('buy_domain');
    }
    public function selldomain()
    {
        return view('sell_domains');
    }

    public function overview() //buying-guide
    {
        return view('overview');
    }
    public function recentnews(Request $request, $id) //recent news
    {
        $data['news'] = News::where('id', $id)->where('is_delete', 0)->first();
        return view('recentnews')->with($data);
    }
    public function premiumdomains()
    {
        return view('premium_domains_name');
    }

    public function aboutus() 
    {
        return view('aboutus');
    }
}
