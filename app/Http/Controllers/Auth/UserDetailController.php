<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;


class UserDetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function create()
    {
        $user= Auth()->user();
        $roles=Role::whereNotIn('name',['admin'])->get();
        
        return view('auth.user.detail',compact('user','roles'));
    }
    public function store(Request $request)  {
        // return $request;
        $user=Auth()->user();

        
        //  $user->roles;
        //  return $user;
        $request->validate([
            'experience'=>'required',
            'short_video'=>'required|mimes:mp4,avi,wmv,mov|max:10240',
            'profile_picture'=>'required|image',
            'user_type'=>'required',
            'skills'=>'required',
        ]);
        // return $v;
        $user->experience=$request->experience;
        $user->skills=$request->skills;
        $user->user_type=$request->user_type;
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
        return to_route('experience.create');
    }
}
