<?php

namespace App\Http\Controllers;

use App\Models\CategoryBlog;
use Illuminate\Http\Request;

class CategoryBlogController extends Controller
{
    
    public function index()
    {
        $categoryBlogs = CategoryBlog::all();
        return view('backend.pages.categoryblog.index' , compact('categoryBlogs'));
    }

    
    public function create()
    {
        return view('backend.pages.categoryblog.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'pagetitle_ar' => 'required|string|max:255',
            'pagetitle_en' => 'required|string|max:255',
            'text_ar' => 'required|string',
            'text_en' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('categoryblog'), $imageName);
        }else {
            $imageName=null;
        }

        CategoryBlog::create([
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_ar,
            "pagetitle_ar"=>$request->pagetitle_ar,
            "pagetitle_en"=>$request->pagetitle_en,
            "text_ar"=>$request->text_ar,
            "text_en"=>$request->text_en,

            "image"=>$imageName,
        ]);

        return redirect()->route('CategoryBlog.index')->with('message' , 'Your Blog addedd SuccessFully');
    }

   
    public function show(CategoryBlog $categoryBlog)
    {
        //
    }

    
    public function edit(CategoryBlog $categoryBlog)
    {
        return view('backend.pages.categoryblog.edit' , compact('categoryBlog'));
    }

   
    public function update(Request $request, CategoryBlog $categoryBlog)
    {
        $request->validate([
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'pagetitle_ar' => 'required|string|max:255',
            'pagetitle_en' => 'required|string|max:255',
            'text_ar' => 'required|string',
            'text_en' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('categoryblog'), $imageName);
        }else {
           
                $imageName = $categoryBlog->image;
        }

        $categoryBlog->update([
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
            "pagetitle_ar"=>$request->pagetitle_ar,
            "pagetitle_en"=>$request->pagetitle_en,
            "text_ar"=>$request->text_ar,
            "text_en"=>$request->text_en,

            "image"=>$imageName,
        ]);

        return redirect()->route('CategoryBlog.index')->with('message' , 'Your Blog Updated SuccessFully');
    }

    
    public function destroy(CategoryBlog $categoryBlog)
    {
        $categoryBlog->delete();
        return redirect()->route('CategoryBlog.index')->with('message' , 'Your Blog Deleted SuccessFully');
    }
}
