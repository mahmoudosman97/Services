<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
   
    public function index()
    {
        $clients = Client::all();
        return view('backend.pages.client.index' , compact('clients'));
    }

    
    public function create()
    {
        return view('backend.pages.client.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
           
            'pagetitle_ar' => 'required|string|max:255',
            'pagetitle_en' => 'required|string|max:255',
            'link' => 'required|string',
            
            'image_ar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'image_en' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        if ($request->hasFile('image_ar')) {
            $imageName_ar = time() . '.' . $request->image_ar->extension();
            $request->image_ar->move(public_path('clients'), $imageName_ar);
        }else {
            $imageName_ar=null;
        }

        // if ($request->hasFile('image_en')) {
        //     $imageName_en = time() . '.' . $request->image_en->extension();
        //     $request->image_en->move(public_path('clients'), $imageName_en);
        // }else {
        //     $imageName_en=null;
        // }

        Client::create([
            
            "pagetitle_ar"=>$request->pagetitle_ar,
            "pagetitle_en"=>$request->pagetitle_en,
            
            "link"=>$request->link,

            "image_ar"=>$imageName_ar,
            // "image_en"=>$imageName_en,
        ]);

        return redirect()->route('client.index')->with('message' , 'Your Client addedd SuccessFully');
    }

    
    public function show(Client $client)
    {
        //
    }

   
    public function edit(Client $client)
    {
        return view('backend.pages.client.edit' , compact('client'));
    }

    
    public function update(Request $request, Client $client)
    {
        $request->validate([
           
            'pagetitle_ar' => 'required|string|max:255',
            'pagetitle_en' => 'required|string|max:255',
            'link' => 'required|string',
            
            'image_ar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_en' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        if ($request->hasFile('image_ar')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('clients'), $imageName);
        }else {
            $imageName= $client->image_ar;
        }

        if ($request->hasFile('image_en')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('clients'), $imageName);
        }else {
            $imageName=$client->image_en;
        }

        $client->update([
            
            "pagetitle_ar"=>$request->pagetitle_ar,
            "pagetitle_en"=>$request->pagetitle_en,
            
            "link"=>$request->link,

            "image_ar"=>$imageName,
            "image_en"=>$imageName,
        ]);

        return redirect()->route('client.index')->with('message' , 'Your Client Updated SuccessFully');
    }

   
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('client.index')->with('message' , 'Your Client Updated SuccessFully');

    }
}
