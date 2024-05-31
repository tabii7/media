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
            'short_video' => 'nullable|mimes:mp4,avi,wmv,mov|max:10240',
            'profile_picture' => 'nullable|image',
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


        if ($request->file('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/user'), $filename);
            $userimage = 'images/user/' . $filename;
            $user->forceFill(['image' => $userimage])->save();
        }

        if ($request->file('short_video')) {
            $file = $request->file('short_video');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('video/user'), $filename);
            $uservideo = 'video/user/' . $filename;
            $user->forceFill(['video' => $uservideo])->save();
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
