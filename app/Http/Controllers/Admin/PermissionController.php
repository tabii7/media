<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    function index()
    {
        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));
    }
    public function create()
    {
        return view('admin.permissions.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate(['name' => 'required|min:3']);
        Permission::create($validated);
        return to_route('admin.permissions.index')->with('success', 'Permission added successfully!');
    }
    public function edit(Permission $permission)
    {
        $roles = Role::all();
        return view('admin.permissions.edit', compact('permission', 'roles'));
    }
    public function update(Request $request, Permission $permission)
    {
        $validated = $request->validate(['name' => 'required|min:3']);
        $permission->update($validated);
        return to_route('admin.permissions.index')->with('success', 'Permission updated successfully!');;
    }
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return back()->with('success', 'Permission deleted');
    }

    public function assignRoles(Request $request, Permission $permission)
    {

        //  dd($request->role);
        // return $permission;
        $roleName = $request->role;

        // Check if the role is already assigned to the permission
        if($permission->hasRole($roleName)) {
            return back()->with('success', 'Role already assigned to the permission');
        }

        // Assign the role to the permission
        $permission->assignRole($roleName);

        return back()->with('success', 'Role assigned to the permission');
    }

    public function removeRole(Role $role, Permission $permission)
    {
        if ($role->hasPermissionTo($permission)) {
            $role->revokePermissionTo($permission);
            return back()->with('success', 'Permissions revoked');
        }
        return back()->with('success', 'Permissions not exist');
    }
}
