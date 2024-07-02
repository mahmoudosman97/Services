<?php

namespace App\Http\Controllers;

use App\Models\Approach;
use Illuminate\Http\Request;

class ApproachController extends Controller
{
    
    public function index()
    {
        $approaches = Approach::all();
        return view('backend.pages.approach.index' , compact('approaches'));
    }

    
    public function create()
    {
        return view('backend.pages.approach.create');
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
            $request->image->move(public_path('approaches'), $imageName);
        }else {
            $imageName=null;
        }

        Approach::create([
           
            "title_ar"=>$request->title_ar,
            "title_en"=>$request->title_en,
            "pagetitle_ar"=>$request->pagetitle_ar,
            "pagetitle_en"=>$request->pagetitle_en,
            "body_ar"=>$request->body_ar,
            "body_en"=>$request->body_en,
            "category_id"=>$request->category_id,
            "image"=>$imageName,
        ]);

        return redirect()->route('approach.index')->with('message' , 'Your Approach addedd SuccessFully');
    }

   
    public function show(Approach $approach)
    {
        //
    }

    
    public function edit(Approach $approach)
    {
        return view('backend.pages.approach.edit' , compact('approach'));
    }

    
    public function update(Request $request, Approach $approach)
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
            $request->image->move(public_path('approaches'), $imageName);
        }else {
            $imageName= $approach->image;
        }

        $approach->update([
           
            "title_ar"=>$request->title_ar,
            "title_en"=>$request->title_en,
            "pagetitle_ar"=>$request->pagetitle_ar,
            "pagetitle_en"=>$request->pagetitle_en,
            "body_ar"=>$request->body_ar,
            "body_en"=>$request->body_en,
            "category_id"=>$request->category_id,
            "image"=>$imageName,
        ]);

        return redirect()->route('approach.index')->with('message' , 'Your Approach Updated SuccessFully');
    }

    
    public function destroy(Approach $approach)
    {
        $approach->delete();
        return redirect()->route('approach.index')->with('message' , 'Your Approach Deleted SuccessFully');
    }
}
