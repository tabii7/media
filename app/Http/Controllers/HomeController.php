<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\User;
use illuminate\Support\Facades\DB;
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
        $userCounts = User::select('user_type', \DB::raw('count(*) as count'))
                    ->whereNotIn('user_type', ['admin','null']) // Add your user types to exclude here
                    ->groupBy('user_type')
                    ->get();
        
       
        if(Auth::user()->hasRole('admin')){
            return view('adminhome',compact('userCounts'));
        }

        return view('home',compact('user'));
    }
}
