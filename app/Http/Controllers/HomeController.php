<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        
          $user=Auth()->user();
        //   return $user->skills;
         
         $user->experiences;

        // if(!$user->experience || !$user->user_type || !$user->image || !$user->video)
        // {
        //     return to_route('auth.user.detail');
        // }

        return view('home',compact('user'));
    }
}
