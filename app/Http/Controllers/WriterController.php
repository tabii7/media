<?php

namespace App\Http\Controllers;

use App\Models\Writer;

use Illuminate\Support\Facades\Auth;
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
    // public function store(Request $request)
    // {
    //     $user=Auth()->user();   
    //     $exists=Writer::where('user_id',$user->id)->exists();
    //     if($exists)
    //     {
    //         return to_route('home');
    //     }
    //     $validated=$request->validate([

    //         'age'=>'required',
    //         'gender'=>'required',
    //         'about_yourself'=>'required',
    //         'portfolio'=>'required',
    //         'best_genre'=>'required',
    //         'best_format'=>'required',
    //         'best_language'=>'required',
    //         'writing_speed'=>'required',
    //         'inspirational_content'=>'required',
    //         'favourite_writers'=>'required',
    //     ]);
    //     $validated['user_id']=$user->id;
    //     Writer::create($validated);

    //     $user->assignRole('writer');
    //     $user->user_type='writer';
    //     $user->save();
    //     return to_route('home');
    // }

    public function store(Request $request)
    {
        $user=Auth()->user();   
        $exists=Writer::where('user_id',$user->id)->exists();
        if($exists)
        {
            return to_route('home');
        }
        $request->validate([
            'age' => 'required|integer|min:1',
            'gender' => 'required|in:male,female,others',
            'about_yourself' => 'required|string|max:500',
            'portfolio.*' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'best_genre' => 'required|string|max:100',
            'best_format' => 'required|string|max:100',
            'best_language' => 'required|string|max:100',
            'writing_speed' => 'required|string|max:100',
            'inspirational_content' => 'required|string|max:100',
            'favourite_writers' => 'required|string|max:100',
        ]);

        $portfolioImages = [];
        if ($request->hasFile('portfolio')) {
            foreach ($request->file('portfolio') as $image) {
                $imagePath = $image->store('images/writer', 'public');
                $portfolioImages[] = $imagePath;
            }
        }

        $writer = Writer::create([
            'user_id' => Auth::id(),
            'age' => $request->age,
            'gender' => $request->gender,
            'about_yourself' => $request->about_yourself,
            'portfolio' => json_encode($portfolioImages),
            'best_genre' => $request->best_genre,
            'best_format' => $request->best_format,
            'best_language' => $request->best_language,
            'writing_speed' => $request->writing_speed,
            'inspirational_content' => $request->inspirational_content,
            'favourite_writers' => $request->favourite_writers,
        ]);

        $user->assignRole('writer');
        $user->user_type='writer';
        $user->save();

        return redirect()->route('home')->with('success', 'Writer created successfully.');
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
