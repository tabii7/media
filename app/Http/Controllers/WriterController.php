<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
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
        $user=Auth()->user();   
        $exists=Writer::where('user_id',$user->id)->exists();
        if($exists)
        {
            return to_route('home');
        }
        return view('writer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user=Auth()->user();   
        $exists=Writer::where('user_id',$user->id)->exists();
        if($exists)
        {
            return to_route('home');
        }
        $validated=$request->validate([

            'age'=>'required',
            'gender'=>'required',
            'about_yourself'=>'required',
            'portfolio'=>'required',
            'best_genre'=>'required',
            'best_format'=>'required',
            'best_language'=>'required',
            'writing_speed'=>'required',
            'inspirational_content'=>'required',
            'favourite_writers'=>'required',
        ]);
        $validated['user_id']=$user->id;
        Writer::create($validated);

        $user->assignRole('writer');
        $user->user_type='writer';
        $user->save();
        return to_route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Writer $writer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Writer $writer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Writer $writer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Writer $writer)
    {
        //
    }
}
