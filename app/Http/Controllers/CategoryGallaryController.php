<?php

namespace App\Http\Controllers;

use App\Models\CategoryGallary;
use Illuminate\Http\Request;

class CategoryGallaryController extends Controller
{
    
    public function index()
    {
        $categoryGallaries = CategoryGallary::all();
        return view('backend.pages.categorygallary.index' , compact('categoryGallaries') );
    }

    
    public function create()
    {
        return view('backend.pages.categorygallary.create');
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
            $request->image->move(public_path('categorygallary'), $imageName);
        }else {
            $imageName=null;
        }

        CategoryGallary::create([
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_ar,
            "pagetitle_ar"=>$request->pagetitle_ar,
            "pagetitle_en"=>$request->pagetitle_en,
            "text_ar"=>$request->text_ar,
            "text_en"=>$request->text_en,

            "image"=>$imageName,
        ]);

        return redirect()->route('CategoryGallary.index')->with('message' , 'Your Gallary addedd SuccessFully');
    }

   
    public function show(CategoryGallary $categoryGallary)
    {
        
    }

    
    public function edit(CategoryGallary $categoryGallary)
    {
        return view('backend.pages.categorygallary.edit' , compact('categoryGallary'));
    }

   
    public function update(Request $request, CategoryGallary $categoryGallary)
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
            $request->image->move(public_path('categorygallary'), $imageName);
        }else {
           
                $imageName = $categoryGallary->image;
        }

        $categoryGallary->update([
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
            "pagetitle_ar"=>$request->pagetitle_ar,
            "pagetitle_en"=>$request->pagetitle_en,
            "text_ar"=>$request->text_ar,
            "text_en"=>$request->text_en,

            "image"=>$imageName,
        ]);

        return redirect()->route('CategoryGallary.index')->with('message' , 'Your Gallary Updated SuccessFully');
    }

    
    public function destroy(CategoryGallary $categoryGallary)
    {
        $categoryGallary->delete();
        return redirect()->route('CategoryGallary.index')->with('message' , 'Your Gallary Deleted SuccessFully');

    }
}
