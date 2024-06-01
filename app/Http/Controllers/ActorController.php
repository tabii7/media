<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            'short_video.*'=>'required|mimes:mp4,avi,wmv,mov|max:10240',
            'profile_picture.*'=>'required|image',
            'user_type'=>'required',
            'skills'=>'required',
        ]);

        $validated['user_id'] = $user->id;

        $actor = Actor::create($validated);


        $user->experience=$request->experience;
        $user->skills=$request->skills;

        if ($request->hasFile('profile_picture')) {
            $profilePictures = $request->file('profile_picture');
            $profilePicturePaths = [];
        
            foreach ($profilePictures as $file) {
                $filename = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images/user'), $filename);
                $profilePicturePaths[] = 'images/user/' . $filename;
            }
            $user['image'] = $profilePicturePaths;
        }
        
        if ($request->hasFile('short_video')) {
            $shortVideos = $request->file('short_video');
            $shortVideoPaths = [];
        
            foreach ($shortVideos as $file) {
                $filename = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('video/user'), $filename);
                $shortVideoPaths[] = 'video/user/' . $filename;
            }
            $user['video'] = $shortVideoPaths;
        }
        

        $user->assignRole('model');
        $user->user_type='model';
        $user->save();

        return redirect()->route('experience.create');
    }

    public function update(Request $request)
    {
        $loged = Auth()->user();
        $user = User::where('id',$loged->id )->first();
        $Actor = Actor::where('user_id', $loged->id)->first();

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
            'experience' => 'required|string|max:255',
            'short_video.*' => 'nullable|mimes:mp4,avi,wmv,mov|max:10240',
            'profile_picture.*' => 'nullable|image',
            'skills' => 'required|array',
        ]);



        $Actor->update([
            'age' => $request->age,
            'gender' => $request->gender,
            'pronouns' => $request->pronouns,
            'sexuality' => $request->sexuality,
            'height' => $request->height,
            'body_type' => $request->body_type,
            'body_art' => $request->body_art,
            'birthmark' => $request->birthmark,
            'scar' => $request->scar,
            'hair_color' => $request->hair_color,
            'features' => $request->features,
            'eye_color' => $request->eye_color,
            'relationship_status' => $request->relationship_status,
            'occupation' => $request->occupation,
            'residence' => $request->residence,
        ]);

        if ($request->has('delete_profile_pictures')) {
            foreach ($request->delete_profile_pictures as $imagePath) {
                if (file_exists(public_path($imagePath))) {
                    unlink(public_path($imagePath));
                    // Remove from database attribute
                    $user->image = array_diff($user->image, [$imagePath]);
                }
            }
        }
    
        if ($request->has('delete_short_videos')) {
            foreach ($request->delete_short_videos as $videoPath) {
                if (file_exists(public_path($videoPath))) {
                    unlink(public_path($videoPath));
                    // Remove from database attribute
                    $user->video = array_diff($user->video, [$videoPath]);
                }
            }
        }

        if ($request->hasFile('profile_picture')) {
            foreach ($request->file('profile_picture') as $file) {
                $filename = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images/user'), $filename);
                // Save file path in database attribute
                $image[] = 'images/user/' . $filename;
            }
            $user->forceFill(['image' => $image])->save();
        }
        
        if ($request->hasFile('short_video')) {
            foreach ($request->file('short_video') as $file) {
                $filename = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('video/user'), $filename);
                // Save file path in database attribute
                $video[] = 'video/user/' . $filename;
            }
            $user->forceFill(['video' => $video])->save();
        }

    

       $user->update([
            'experience' => $validated['experience'],
            'skills' => $validated['skills'],
        ]);


        return redirect()->route('home')->with('success', 'Actor updated successfully.');
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
    public function edit()
{
    // Retrieve the authenticated user
    $user = Auth::user();

    $Actor = DB::table('actors')
        ->join('users', 'users.id', '=', 'actors.user_id')
        ->where('actors.user_id', $user->id)
        ->first();

    if (!$Actor) {
        return redirect()->back()->with('error', 'Actor not found.');
    }

    return view('model.edit', compact('Actor'));
}


    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actor $actor)
    {
        //
    }
}
