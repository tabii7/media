<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
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
        return view('experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $experience=new Experience();
        $request->validate([
            'job_title'=>'required',
            'company_name'=>'required',
            'company_logo'=>'required',
            'duration_from'=>'required',
            'duration_to'=>'required',
            'company_city'=>'required',
            'job_description'=>'required',
        ]);
        $experience->user_id=Auth()->id();
        $experience->job_title=$request->job_title;
        $experience->company_name=$request->company_name;
        $experience->duration_from=$request->duration_from;
        $experience->duration_to=$request->duration_to;
        $experience->city=$request->company_city;
        $experience->description=$request->job_description;
        if ($request->file('company_logo')) {
            $file = $request->file('company_logo');
            $filename = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/experience'), $filename);
            $experience->company_logo = 'images/experience/' . $filename;
        };
        // return $experience;
        $experience->save();
        return to_route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        //
    }
}
