<?php

namespace App\Http\Controllers;

use App\Models\CategoryGallary;
use App\Models\Gallary;
use Illuminate\Http\Request;

class GallaryController extends Controller
{
    public function index()
    {
        $gallaries=Gallary::all();
        return view('backend.pages.Gallary.index' , compact('gallaries'));
    }

    
    public function create()
    {
        $categories = CategoryGallary::all();
        return view('backend.pages.Gallary.create' , compact('categories'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'pagetitle_ar' => 'required|string|max:255',
            'pagetitle_en' => 'required|string|max:255',
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('gallary'), $imageName);
        }else {
            $imageName=null;
        }

        Gallary::create([
            "title_ar"=>$request->title_ar,
            "title_en"=>$request->title_en,
            "pagetitle_ar"=>$request->pagetitle_ar,
            "pagetitle_en"=>$request->pagetitle_en,
            "category_id" =>$request->category_id,

            "image"=>$imageName,
        ]);

        return redirect()->route('Gallary.index')->with('message' , 'Your Gallary addedd SuccessFully');
    }

   
    public function show(Gallary $gallary)
    {
        
    }

    
    public function edit(Gallary $gallary)
    {
        $categories = CategoryGallary::all();
        return view('backend.pages.Gallary.edit' , compact('gallary' , 'categories'));
    }

    
    public function update(Request $request, Gallary $gallary)
    {
        $request->validate([
            
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'pagetitle_ar' => 'required|string|max:255',
            'pagetitle_en' => 'required|string|max:255',
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('gallaries'), $imageName);
        } else{
            $imageName = $gallary->image;
        
        }

        $gallary->update([
            
            "title_ar"=>$request->title_ar,
            "title_en"=>$request->title_en,
            "pagetitle_ar"=>$request->pagetitle_ar,
            "pagetitle_en"=>$request->pagetitle_en,
           
            "category_id"=>$request->category_id,
            "image"=>$imageName,
        ]);

        return redirect()->route('Gallary.index')->with('message' , 'Your Gallary Updated SuccessFully');
    }

   
    public function destroy(Gallary $gallary)
    {
        $gallary->delete();
        return redirect()->route('Gallary.index')->with('message' , 'Your Gallary Deleted SuccessFully');
    }
}
