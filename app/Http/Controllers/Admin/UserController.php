<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users=User::get();
        return view('admin.user.index',compact('users'));
    }
    public function assign_role($id)
    {
        $roles=Role::all();
        $user=User::findOrFail($id);
        // $user->assignRole('vendor');
        
        return view('admin.user.assign_role',compact('user','roles'));
    }
    public function assign_role_action(Request $request, $id)
    {
        $user=User::findOrFail($id);
        $roleName = $request->role;
        try{

            $roleName = $request->role;
           $a= $user->assignRole($roleName);
           if($a){
               return back()->with('success', 'Role assigned to the permission');
               
            }
            return back()->with('success', 'something went wrong');
    
        }catch(\Exception $e) {
            return $e->getMessage();
        }
    }
    public function removeRole(User $user,Role $role)
    {
       $user->removeRole($role);
       return back()->with('success', 'role removed');
    }

}
