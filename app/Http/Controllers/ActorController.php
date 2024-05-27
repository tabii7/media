<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
  

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $user = Auth::user();
        $exists = Actor::where('user_id', $user->id)->exists();
    
        if ($exists) {
            return redirect()->route('home');
        }
    
        $validated = $request->validate([
            'age' => 'required|integer|min:0',
            'gender' => 'required|string|in:male,female,others',
            'pronouns' => 'required|string|max:255',
            'sexuality' => 'required|string|max:255',
            'height' => 'required|string|max:255',
            'body_type' => 'required|string|max:255',
            'body_art' => 'required|string|max:255',
            'birthmark' => 'required|string|max:255',
            'scar' => 'required|string|max:255',
            'hair_color' => 'required|string|max:255',
            'features' => 'required|string|max:255',
            'eye_color' => 'required|string|max:255',
            'relationship_status' => 'required|string|in:married,single',
            'occupation' => 'required|string|max:255',
            'residence' => 'required|string|max:255',
            'experience'=>'required',
            'short_video'=>'required|mimes:mp4,avi,wmv,mov|max:10240',
            'profile_picture'=>'required|image',
            'user_type'=>'required',
            'skills'=>'required',
        ]);
    
        $validated['user_id'] = $user->id;
    
        $actor = Actor::create($validated);


        $user->experience=$request->experience;
        $user->skills=$request->skills;
      
        if ($request->file('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/user'), $filename);
            $user['image'] = 'images/user/' . $filename;
        }
        if ($request->file('short_video')) {
            $file = $request->file('short_video');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('video/user'), $filename);
            $user['video'] = 'video/user/' . $filename;
        }
        
        // return $user;
        $user->assignRole($request->user_type);
        $user->save();
    
        $user->assignRole('model');
        $user->user_type='model';
        $user->save();
    
        return redirect()->route('experience.create');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Actor $actor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Actor $actor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Actor $actor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actor $actor)
    {
        //
    }
}
