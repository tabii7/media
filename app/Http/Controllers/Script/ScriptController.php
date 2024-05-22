<?php

namespace App\Http\Controllers\Script;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Script;
use App\Models\Scene;

class ScriptController extends Controller
{
    public function store(Request $request)
{
    
    $request->validate([
        'name' => 'required|string',
        'author' => 'required|string',
    ]);

    $writer = Auth::user()->id;


    $script = new Script();

    $script->user_id = $writer;
    $script->name = $request->name;
    $script->author = $request->author;
    $script->save();

    return view('writer.script_scenes',compact('script'))->with('success', 'Script created successfully!');
}


public function addScene(Request $request, $scriptId)
{
   
    $request->validate([
        'actors' => 'required|string',
        'props' => 'required|string',
        'scene' => 'required|string',
    ]);

    $scene = new Scene();
    $scene->script_id = $scriptId;
    $scene->actors = $request->actors; // Update with the actual column name in your 'scenes' table
    $scene->props = $request->props; // Update with the actual column name in your 'scenes' table
    $scene->scene = $request->scene; // Update with the actual column name in your 'scenes' table
    $scene->save();

    return response()->json(['success' => true, 'message' => 'Scene added successfully!']);
}

public function Script_show()


{
   // Get the authenticated user's ID
   $userId = Auth::id();

   // Retrieve all scripts belonging to the authenticated user
   $scripts = Script::where('user_id', $userId)->get();

   // Pass the scripts data to the view
   return view('writer.view_script', compact('scripts'));
    

}

public function single_Script($id){

    $script = Script::where('id', $id)->get()->first();

    $scenes = Scene::where('script_id', $id)->get();
    return view('writer.view_script_detail', compact('script','scenes'));
}


public function edit_Script($id){

    $script = Script::where('id', $id)->get()->first();
    $scene = Scene::where('script_id',$id);
    return view('writer.edit_script', compact('script','scene'));

}

public function update_Script(Request $request){
    $script = Script::find($request->id);
  
    return redirect()->route('writer.view_script');

}

}
