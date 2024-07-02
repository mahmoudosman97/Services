<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    
    public function index()
    {
        $abouts = About::all();
        return view('backend.pages.about.index' , compact('abouts'));
    }

    
    public function create()
    {
        return view('backend.pages.about.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            
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
            $request->image->move(public_path('abouts'), $imageName);
        }else {
            $imageName=null;
        }

        About::create([
           
            "title_ar"=>$request->title_ar,
            "title_en"=>$request->title_en,
            "pagetitle_ar"=>$request->pagetitle_ar,
            "pagetitle_en"=>$request->pagetitle_en,
            "body_ar"=>$request->body_ar,
            "body_en"=>$request->body_en,
            "category_id"=>$request->category_id,
            "image"=>$imageName,
        ]);

        return redirect()->route('about.index')->with('message' , 'Your About addedd SuccessFully');
    }

   
    public function show(About $about)
    {
        //
    }

    
    public function edit(About $about)
    {
        return view('backend.pages.about.edit' , compact('about'));
    }

    
    public function update(Request $request, About $about)
    {
        $request->validate([
            
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
            $request->image->move(public_path('abouts'), $imageName);
        }else {
            $imageName= $about->image;
        }

        $about->update([
           
            "title_ar"=>$request->title_ar,
            "title_en"=>$request->title_en,
            "pagetitle_ar"=>$request->pagetitle_ar,
            "pagetitle_en"=>$request->pagetitle_en,
            "body_ar"=>$request->body_ar,
            "body_en"=>$request->body_en,
            "category_id"=>$request->category_id,
            "image"=>$imageName,
        ]);

        return redirect()->route('about.index')->with('message' , 'Your About Updated SuccessFully');
    }

    
    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('about.index')->with('message' , 'Your About Deleted SuccessFully');
    }
}
