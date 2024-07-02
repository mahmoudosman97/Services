<?php

namespace App\Http\Controllers;

use App\Models\SliderPosition;
use Illuminate\Http\Request;

class SliderPositionController extends Controller
{
    
    public function index()
    {
        $sliderpositions = SliderPosition::all();
        return view('backend.pages.sliderposition.index' , compact('sliderpositions'));
    }

    
    public function create()
    {
        return view('backend.pages.sliderposition.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name_ar'=>'required|max:50',
            'name_en'=>'required|max:50',
            'image'=>'required|mimes:png,jpg,jepg'
        ]);

       
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('sliderposition'), $imageName);
        }else {
            $imageName=null;
        }

        SliderPosition::create([
            'name_ar' =>$request->name_ar,
            'name_en' =>$request->name_en,
            'pagetitle_ar' =>$request->pagetitle_ar,
            'pagetitle_en' =>$request->pagetitle_en,
            'image' =>$imageName,
        ]);

        return redirect()->route('sliderposition.index')->with('message' , 'Your Slider Position adedd SuccessFully');
    }

    
    public function show(SliderPosition $sliderPosition)
    {
        
    }

    
    public function edit(SliderPosition $sliderPosition)
    {
        
        return view('backend.pages.sliderposition.edit' , compact('sliderPosition'));
    }

    
    public function update(Request $request, SliderPosition $sliderPosition)
    {
        $request->validate([
            
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'pagetitle_ar' => 'required|string|max:255',
            'pagetitle_en' => 'required|string|max:255',
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('sliderposition'), $imageName);
        } else{
            $imageName = $sliderPosition->image;
        
        }

        $sliderPosition->update([
            
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
            "pagetitle_ar"=>$request->pagetitle_ar,
            "pagetitle_en"=>$request->pagetitle_en,
           
           
            "image"=>$imageName,
        ]);

        return redirect()->route('sliderposition.index')->with('message' , 'Your Slider Category Updated SuccessFully');
    }

    
    public function destroy(SliderPosition $sliderPosition)
    {
        $sliderPosition->delete();
        return redirect()->route('sliderposition.index')->with('message' , 'Your Slider Deleted SuccessFully');
    }
}
