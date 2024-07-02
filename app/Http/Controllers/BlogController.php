<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\CategoryBlog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    
    public function index()
    {
        $blogs=Blog::all();
        return view('backend.pages.blogs.index' , compact('blogs'));
    }

    
    public function create()
    {
        $categories = CategoryBlog::all();
        return view('backend.pages.blogs.create' , compact('categories'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'pagetitle_ar' => 'required|string|max:255',
            'pagetitle_en' => 'required|string|max:255',
            'body_ar' => 'required|string',
            'body_en' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('blogs'), $imageName);
        }else {
            $imageName=null;
        }

        Blog::create([
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
            "title_ar"=>$request->title_ar,
            "title_en"=>$request->title_en,
            "pagetitle_ar"=>$request->pagetitle_ar,
            "pagetitle_en"=>$request->pagetitle_en,
            "body_ar"=>$request->body_ar,
            "body_en"=>$request->body_en,
            "category_id"=>$request->category_id,
            "image"=>$imageName,
        ]);

        return redirect()->route('Blog.index')->with('message' , 'Your Blog addedd SuccessFully');
    }

    public function show(Blog $blog)
    {
        //
    }

    
    public function edit(Blog $blog)
    {
        $categories = CategoryBlog::all();
        return view('backend.pages.blogs.edit' , compact('blog' , 'categories'));
    }

   
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'pagetitle_ar' => 'required|string|max:255',
            'pagetitle_en' => 'required|string|max:255',
            'body_ar' => 'required|string',
            'body_en' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('blogs'), $imageName);
        } else{
            $imageName = $blog->image;
        
        }

        $blog->update([
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
            "title_ar"=>$request->title_ar,
            "title_en"=>$request->title_en,
            "pagetitle_ar"=>$request->pagetitle_ar,
            "pagetitle_en"=>$request->pagetitle_en,
            "body_ar"=>$request->body_ar,
            "body_en"=>$request->body_en,
            "category_id"=>$request->category_id,
            "image"=>$imageName,
        ]);

        return redirect()->route('Blog.index')->with('message' , 'Your Blog Updated SuccessFully');
    }

   
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('Blog.index')->with('message' , 'Your Blog Deleted SuccessFully');
    }
}
