<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\AssignOp\Concat;

class ContactController extends Controller
{
   
    public function index()
    {
        $contacts=Contact::all();
        return view('backend.pages.contact.index' , compact('contacts'));
    }

    
    public function create()
    {
        return view('backend.pages.contact.create');
    }

    
    public function store(Request $request)
    {

        $request->validate([
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'facebook' => 'required|string',
            'twitter' => 'required|string',
            'instagram' => 'required|string',
            'youtube' => 'required|string',
            'pagetitle_ar' => 'required|string',
            'pagetitle_en' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);


        Contact::create([
            "title_ar"=>$request->title_ar,
            "title_en"=>$request->title_en,
            "location"=>$request->location,
            "address"=>$request->address,
            "phone"=>$request->phone,
            "email"=>$request->phone,
            "instagram"=>$request->instagram,
            "facebook"=>$request->facebook,
            "twitter"=>$request->twitter,
            "youtube"=>$request->youtube,
            "pagetitle_ar"=>$request->pagetitle_ar,
            "pagetitle_en"=>$request->pagetitle_en,
            
        ]);

        return redirect()->route('contact.index')->with('message' , 'Your Contact addedd SuccessFully');
    }

   
    public function show(Contact $contact)
    {
        //
    }

    
    public function edit(Contact $contact)
    {
        return view('backend.pages.contact.edit' , compact('contact'));
    }

    
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'title_ar' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'facebook' => 'required|string',
            'twitter' => 'required|string',
            'instagram' => 'required|string',
            'youtube' => 'required|string',
            'pagetitle_ar' => 'required|string',
            'pagetitle_en' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);


        $contact->update([
            "title_ar"=>$request->title_ar,
            "title_en"=>$request->title_en,
            "location"=>$request->location,
            "address"=>$request->address,
            "phone"=>$request->phone,
            "email"=>$request->phone,
            "instagram"=>$request->instagram,
            "facebook"=>$request->facebook,
            "twitter"=>$request->twitter,
            "youtube"=>$request->youtube,
            "pagetitle_ar"=>$request->pagetitle_ar,
            "pagetitle_en"=>$request->pagetitle_en,
            
        ]);

        return redirect()->route('contact.index')->with('message' , 'Your Contact Updated SuccessFully');
    }

    
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index')->with('message' , 'Your Contact Deleted SuccessFully');
    }
}
