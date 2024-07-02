<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\SliderPosition;
use Illuminate\Http\Request;

class SliderController extends Controller
{
   
    public function index()
    {
        $sliders = Slider::all();
        return view('backend.pages.slider.index' , compact('sliders'));
    }

   
    public function create()
    {
        $sliderpositions = SliderPosition::all();
        return view('backend.pages.slider.create' , compact('sliderpositions'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'text_ar' => 'required|string|max:255',
            'text_en' => 'required|string|max:255',
            'pagetitle_ar' => 'required|string|max:255',
            'pagetitle_en' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
          

        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('sliders'), $imageName);
        }

       

        Slider::create([
            "text_ar"=>$request->text_ar,
            "text_en"=>$request->text_en,
            "pagetitle_ar"=>$request->pagetitle_ar,
            "pagetitle_en"=>$request->pagetitle_en,
            "position_id" =>$request->position_id,
            'image' => $imageName,

           
        ]);

        return redirect()->route('slider.index')->with('message' , 'Your Slider addedd SuccessFully');
    }

    
    public function show(Slider $slider)
    {
        
    }

   
    public function edit(Slider $slider)
    {
        $sliderpositions = SliderPosition::all();
        return view('backend.pages.slider.edit' , compact('sliderpositions' , 'slider'));
    }

    
    public function update(Request $request, Slider $slider)
    {
       
        $request->validate([
            
            'text_ar' => 'required|string|max:255',
            'text_en' => 'required|string|max:255',
            'pagetitle_ar' => 'required|string|max:255',
            'pagetitle_en' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
          
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('sliders'), $imageName);
            $slider->image = $imageName;
        }else{
            $imageName = $slider->image;
        }
       

        $slider->update([
            
            "text_ar"=>$request->text_ar,
            "text_en"=>$request->text_en,
            "pagetitle_ar"=>$request->pagetitle_ar,
            "pagetitle_en"=>$request->pagetitle_en,
            "position_id"=>$request->position_id,
            'image' => $imageName,
           
        ]);
        return redirect()->route('slider.index')->with('message' , 'Your Slider Updated SuccessFully');

    }

    
    public function destroy(Slider $slider)
    {
        $slider->delete();
     return redirect()->route('slider.index')->with('message' , 'Your Slider Deleted SuccessFully');

    }
}
