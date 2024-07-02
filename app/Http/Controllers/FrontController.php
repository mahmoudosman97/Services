<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Blog;
use App\Models\Gallary;
use App\Models\Contact;
use App\Models\About;
class FrontController extends Controller
{
    
    public function frontend()
    {
        
        return view('frontend.body');
    }


    public function BlogFront()
    {
        $blogs=Blog::all();
        // $slider= Slider::where('position_id','9')->get();
        return view('frontend.blogs' , compact('blogs'));
    }

    
    public function GalleryFront()
    {
        $gallaries=Gallary::all();
        // $slider= Slider::where('position_id','9')->get();
        return view('frontend.gallary' , compact('gallaries'));
    }

    public function ContactsFront()
    {
        $contacts=Contact::all();
        // $slider= Slider::where('position_id','12')->get();
        return view('frontend.contact' , compact('contacts'));
    }

    public function AboutFront()
    {
        $abouts = About::all();
        // $slider= Slider::where('position_id','12')->get();
        return view('frontend.about' , compact('abouts'));
    }

  
    
}
