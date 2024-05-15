<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;
use App\Models\BlogDetail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function myaccount()
    {
        return view('myaccount');

    }

    public function updateaccountinfo(Request $request)
    {
       
        $request->validate([
            'user_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
            'billing_first_name' => 'required|string|max:255',
            'billing_last_name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'address1' => 'required|string',
            'address2' => 'nullable|string',
            'zip_code' => 'required|string|max:20',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
        ]);

        $user = Auth::user();

        $user->name = $request->user_name;
        $user->email = $request->email;
        $user->save();

        
        $user->billingInformation->update([
            'first_name' => $request->billing_first_name,
            'last_name' => $request->billing_last_name,
            'country' => $request->country,
            'address1' => $request->address1,
            'address2' => $request->address2,
            'zip_code' => $request->zip_code,
            'city' => $request->city,
            'state' => $request->state,
            'phone_number' => $request->phone_number,
        ]);
        return redirect()->route('myaccount')->with('success', 'Account information updated successfully.');
    
    }

    public function blog()
    {
        $data['blogs'] = Blog::where('is_hide',0)->where('is_delete',0)->paginate(6);
        return view('blog')->with($data);
    }

    public function blogDetail(Request $request,$id){
        $data['blog'] = Blog::where('id',$id)->where('is_hide',0)->where('is_delete',0)->first();
        $data['recent_blogs'] = Blog::where('is_hide',0)->where('is_delete',0)->latest()->take(2)->get();
        return view('blog_detail')->with($data);
    }

    public function blogSearch(Request $request){
        $blog = Blog::where('blog_name','LIKE','%'.$request->search.'%')->first();
        $recent_blogs = Blog::where('is_hide',0)->where('is_delete',0)->latest()->take(2)->get();
        return view('blog_detail',compact('blog','recent_blogs'));
      
    }
}
