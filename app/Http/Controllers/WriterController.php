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
                $imageName = $image->getClientOriginalName();
                $imagePath = 'images/writer/' . $imageName;
                $image->move(public_path('images/writer'), $imageName);
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

    public function update(Request $request)
    {
        $user=Auth()->user();   
       
        $writer = Writer::where('user_id', $user->id)->first();

        $request->validate([
            'age' => 'required|integer|min:1',
            'gender' => 'required|in:male,female,others',
            'about_yourself' => 'required|string|max:500',
            'portfolio.*' => 'image|mimes:jpeg,png,jpg|max:2048',
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
                $imageName = $image->getClientOriginalName();
                $imagePath = 'images/writer/' . $imageName;
                $image->move(public_path('images/writer'), $imageName);
                $portfolioImages[] = $imagePath;
                
            }

            $writer->update([
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
    
        }else{
            $writer->update([
                'user_id' => Auth::id(),
                'age' => $request->age,
                'gender' => $request->gender,
                'about_yourself' => $request->about_yourself,
                'best_genre' => $request->best_genre,
                'best_format' => $request->best_format,
                'best_language' => $request->best_language,
                'writing_speed' => $request->writing_speed,
                'inspirational_content' => $request->inspirational_content,
                'favourite_writers' => $request->favourite_writers,
            ]);
        }
    
        return redirect()->route('home')->with('success', 'Writer updated successfully.');
     
    }

   
    public function show(Writer $writer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $user = Auth::user();
        $writer = Writer::where('user_id', $user->id)->firstOrFail();

        return view('writer.edit', compact('writer'));
    }



    /**
     * Update the specified resource in storage.
     */
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Writer $writer)
    {
        //
    }
}
