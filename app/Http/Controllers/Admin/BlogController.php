<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Blog;
use App\Models\BlogDetail;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::where('is_delete', 0)->get();
        return view('admin.blogs.index', compact('blogs'));
    }
    public function create()
    {
        return view('admin.blogs.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'blog_name' => 'required',
            'owner_name' => 'required',
            'date' => 'required|date',
            'blog_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required',
            'is_hide' => 'boolean',
        ]);
        if ($request->hasFile('blog_img')) {
            $image = $request->file('blog_img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/blog'), $imageName);
        }
        $blog = new Blog();
        $blog->blog_name = $validatedData['blog_name'];
        $blog->owner_name = $validatedData['owner_name'];
        $blog->date = $validatedData['date'];
        $blog->blog_img = $imageName;
        $blog->is_hide = $request->has('is_hide');
        $blog->save();

        $blogDetail = new BlogDetail();
        $blogDetail->blog_id = $blog->id;
        $blogDetail->content = $validatedData['content'];
        $blogDetail->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post created successfully.');
    }
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $blogDetail = BlogDetail::where('blog_id', $id)->first(); // Get blog details
        return view('admin.blogs.edit', compact('blog', 'blogDetail'));
       // return view('admin.blogs.edit', compact('blog'));
    }
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'blog_name' => 'required',
            'owner_name' => 'required',
            'date' => 'required|date',
            'blog_img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required',
            'is_hide' => 'boolean',
        ]);

        // Find the blog post by its ID
        $blog = Blog::findOrFail($id);

        // Update the blog post fields
        $blog->blog_name = $validatedData['blog_name'];
        $blog->owner_name = $validatedData['owner_name'];
        $blog->date = $validatedData['date'];
        $blog->is_hide = $request->has('is_hide');

        // Handle image upload if a new image is provided
        if ($request->hasFile('blog_img')) {
            $image = $request->file('blog_img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/img/blog'), $imageName);

            // Delete old image if it exists
            if ($blog->blog_img) {
                unlink(public_path('assets/img/blog/' . $blog->blog_img));
            }

            // Update the blog image field
            $blog->blog_img = $imageName;
        }

        // Save the updated blog post
        $blog->save();

        $blogDetail = BlogDetail::where('blog_id', $id)->first();
        $blogDetail->content = $validatedData['content'];
        $blogDetail->save();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog post updated successfully.');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->update(['is_delete' => 1]);
        BlogDetail::where('blog_id', $id)->update(['is_delete' => 1]);
        return redirect()->route('admin.blogs.index')->with('success', 'Blog post deleted successfully.');
    }

}


