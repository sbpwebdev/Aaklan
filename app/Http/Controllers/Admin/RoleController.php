<?php

// app/Http/Controllers/Admin/RoleController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.roles', compact('permissions'));
    }

    public function store(Request $request)
    {
        $role = Role::create(['name' => $request->role_name]);
        $role->permissions()->attach($request->permissions);
        return redirect()->back()->with('success', 'Role created successfully!');
    }
}
