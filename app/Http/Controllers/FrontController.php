<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\News;
use App\Models\Domain;
use App\Models\Contact;
use App\Models\BlogDetail;
use App\Models\StaticPage;
use App\Models\DomainMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $extensions = DB::table('domains')->distinct()->pluck('extension');
        $length = DB::table('domains')->distinct()->pluck('length');

        return view('premium_domains_name', ['extensions' => $extensions,'length' => $length ]);
    }

    public function aboutus()
    {
        return view('aboutus');
    }
    public function index()
    {
        $premiumDomains = Domain::where('type_id', 4)
            ->where('is_sold', 0)
            ->leftJoin('domain_media', 'domains.id', '=', 'domain_media.domain_id')
            ->orderByRaw('domain_media.id IS NULL')
            ->select('domains.*', 'domain_media.media_img as media_image')
            ->take(10)
            ->get();

        $featuredDomains = Domain::where('type_id', 1)
            ->where('is_sold', 0)
            ->leftJoin('domain_media', 'domains.id', '=', 'domain_media.domain_id')
            ->orderByRaw('domain_media.id IS NULL')
            ->select('domains.*', 'domain_media.media_img as media_image')
            ->take(10)
            ->get();

        $topDomains = Domain::where('type_id', 3)
            ->where('is_sold', 0)
            ->leftJoin('domain_media', 'domains.id', '=', 'domain_media.domain_id')
            ->orderByRaw('domain_media.id IS NULL')
            ->select('domains.*', 'domain_media.media_img as media_image')
            ->take(10)
            ->get();

        $brandDomainslist = Domain::where('type_id', 2)
            ->where('is_sold', 0)
            ->leftJoin('domain_media', 'domains.id', '=', 'domain_media.domain_id')
            ->whereRaw('LENGTH(domains.name) <= 8')
            ->orderByRaw('domain_media.id IS NULL')
            ->select('domains.*', 'domain_media.media_img as media_image')
            ->take(5)
            ->get();

        $topDomainslist = Domain::where('type_id', 3)
            ->where('is_sold', 0)
            ->leftJoin('domain_media', 'domains.id', '=', 'domain_media.domain_id')
            ->whereRaw('LENGTH(domains.name) <= 8')
            ->orderByRaw('domain_media.id IS NULL')
            ->select('domains.*', 'domain_media.media_img as media_image')
            ->take(5)
            ->get();

        $featuredDomainslist = Domain::where('type_id', 1)
            ->where('is_sold', 0)
            ->leftJoin('domain_media', 'domains.id', '=', 'domain_media.domain_id')
            ->whereRaw('LENGTH(domains.name) <= 8')
            ->orderByRaw('domain_media.id IS NULL')
            ->select('domains.*', 'domain_media.media_img as media_image')
            ->take(5)
            ->get();

        $domainlist = Domain::where('is_sold', 0)->get();


        return view('welcome', compact('domainlist','premiumDomains', 'featuredDomains', 'topDomains','brandDomainslist','featuredDomainslist','topDomainslist'));
    }

    public function singledomain($id)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $domaindetails = Domain::with('category', 'domainMedia')->where('id', $id)->first();
        return view('singledomain', compact('domaindetails'));
    }
    public function domainlist($type_id) //type wise
    {
        $Domains = Domain::where('type_id', $type_id)
            ->where('is_sold', 0)
            ->leftJoin('domain_media', 'domains.id', '=', 'domain_media.domain_id')
            ->orderByRaw('domain_media.id IS NULL')
            ->select('domains.*', 'domain_media.media_img as media_image')
            ->get();

        return view('domainlistaspertype', compact('Domains'));
    }

    public function domainlistcateory($category_id)
    {
        $Domains = Domain::where('category_id', $category_id)
            ->where('is_sold', 0)
            ->leftJoin('domain_media', 'domains.id', '=', 'domain_media.domain_id')
            ->orderByRaw('domain_media.id IS NULL')
            ->select('domains.*', 'domain_media.media_img as media_image')
            ->get();

        return view('domainlistaspercategory', compact('Domains'));
    }

    public function search(Request $request)
    {
        $query = $request->get('q', '');
        $domains = Domain::where('name', 'LIKE', "%{$query}%")
            ->where('is_sold', 0)
            ->get(['id', 'name']);

        return response()->json($domains);
    }

    public function premiumdomainsearch(Request $request)
    {
        $query = DB::table('domains')->where('is_sold', 0);
        if ($request->filled('query')) {
            $query->where('name', 'like', '%' . $request->input('query') . '%');
        }

        if ($request->filled('min_price') && $request->filled('max_price')) {
            $query->whereBetween((DB::raw('CAST(min_offer AS DECIMAL(10, 2))')),[
                $request->input('min_price'),
                    $request->input('max_price')
            ]);
        }
        if ($request->filled('extensions')) {
            $query->whereIn('extension', $request->input('extensions'));
        }
        if ($request->filled('lengths')) {
            $query->whereIn('length', $request->input('lengths'));
        }
        $totalDomains = $query->count();

       // $domains = $query->get();
       $domains = $query->limit(20)->get();
        $extensions = DB::table('domains')->distinct()->pluck('extension');
        $length = DB::table('domains')->distinct()->pluck('length');

     //   return view('premium_domains_name', ['extensions' => $extensions,'length' => $length ,'domains' => $domains]);
     return view('premium_domains_name', [
        'extensions' => $extensions,
        'length' => $length,
        'domains' => $domains,
        'totalDomains' => $totalDomains // pass total count to the view
    ]);
    }


}
