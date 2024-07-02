<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
   
    public function index()
    {
        $teams=Team::all();
        return view('backend.pages.team.index' , compact('teams'));
    }

    
    public function create()
    {
        return view('backend.pages.team.create');
    }

    
    public function store(Request $request)
    {
        
        $request->validate([
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'exp' => 'required|string|max:255',
            'summary' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string',
            'spec' => 'required|string',
            'skills' => 'required|string',
            'education' => 'required|string',
            'pagetitle_ar' => 'required|string',
            'pagetitle_en' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('teams'), $imageName);
        }else {
            $imageName=null;
        }

        Team::create([
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
            "exp"=>$request->exp,
            "summary"=>$request->summary,
            "address"=>$request->address,
            "phone"=>$request->phone,
            "email"=>$request->email,
            "spec"=>$request->spec,
            "skills"=>$request->skills,
            "education"=>$request->education,
            "pagetitle_ar"=>$request->pagetitle_ar,
            "pagetitle_en"=>$request->pagetitle_en,
            "image"=>$imageName,
        ]);

        return redirect()->route('team.index')->with('message' , 'Your Team addedd SuccessFully');
    }

   
    public function show(Team $team)
    {
        
    }

   
    public function edit(Team $team)
    {
        return view('backend.pages.team.edit' , compact('team'));
    }

    
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'exp' => 'required|string|max:255',
            'summary' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string',
            'spec' => 'required|string',
            'skills' => 'required|string',
            'education' => 'required|string',
            'pagetitle_ar' => 'required|string',
            'pagetitle_en' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('teams'), $imageName);
        }else {
            $imageName = $team->image;
        }

        $team->update([
            "name_ar"=>$request->name_ar,
            "name_en"=>$request->name_en,
            "exp"=>$request->exp,
            "summary"=>$request->summary,
            "address"=>$request->address,
            "phone"=>$request->phone,
            "email"=>$request->email,
            "spec"=>$request->spec,
            "skills"=>$request->skills,
            "education"=>$request->education,
            "pagetitle_ar"=>$request->pagetitle_ar,
            "pagetitle_en"=>$request->pagetitle_en,
            "image"=>$imageName,
        ]);

        return redirect()->route('team.index')->with('message' , 'Your Team Updated SuccessFully');
    }

   
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect()->route('team.index')->with('message' , 'Your Team Deleted SuccessFully');

    }
}
