<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }
    public function create()
    {
        return view('admin.roles.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate(['name' => 'required|min:3']);
        Role::create($validated);
        return to_route('admin.roles.index')->with('success', 'Role added successfully!');;
    }
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role', 'permissions'));
    }
    public function update(Request $request, role $role)
    {
        $validated = $request->validate(['name' => 'required|min:3']);
        $role->update($validated);
        return to_route('admin.roles.index')->with('success', 'Role updated successfully!');;
    }
    public function destroy(Role $role)
    {
        $role->delete();
        return back()->with('success', 'Role deleted');
    }

    public function givePermission(Request $request, Role $role)
    {
        if($role->hasPermissionTo($request->permission))
        {
            return back()->with('success', 'Permissions exist');
        }
        $role->givePermissionTo($request->permission);
        return back()->with('success', 'Permissions assigned');

    }
    public function revokePermission(Role $role, Permission $permission)
    {
        if($role->hasPermissionTo($permission))
        {
            $role->revokePermissionTo($permission);
            return back()->with('success', 'Permissions revoked');
        }
        return back()->with('success', 'Permissions not exist');

    }
}
