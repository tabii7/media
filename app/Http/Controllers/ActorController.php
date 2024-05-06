<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;


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
    public function create()
    {
        $user= Auth()->user();
        $exists=Actor::where('user_id',$user->id)->exists();
        if($exists)
        {
            return to_route('home');
        }
        $roles=Role::whereNotIn('name',['admin'])->get();
        return view('actor.create',compact('user','roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user=Auth()->user();   
        $exists=Actor::where('user_id',$user->id)->exists();
        if($exists)
        {
            return to_route('home');
        }
       $validated= $request->validate([
            'age'=>'required',
            'gender'=>'required',
            'pronouns'=>'required',
            'sexuality'=>'required',
            'height'=>'required',
            'body_type'=>'required',
            'body_art'=>'required',
            'birthmark'=>'required',
            'scar'=>'required',
            'hair_color'=>'required',
            'features'=>'required',
            'eye_color'=>'required',
            'relationship_status'=>'required',
            'occupation'=>'required',
            'residence'=>'required',
        ]);
        $validated['user_id']=$user->id;
        Actor::create($validated);

        $user->assignRole('actor');
        $user->user_type='actor';
        $user->save();
        return to_route('home');
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
