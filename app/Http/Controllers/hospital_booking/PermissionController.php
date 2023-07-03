<?php

namespace App\Http\Controllers\hospital_booking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $permissions= Permission::all();
        return view('admin.permissions.index', compact('permissions'));
    }
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.permissions.create');
    }
    public  function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validated= $request->validate(['name'=> 'required']);

        Permission::create($validated);

        return to_route('admin.permissions.index')->with('message','Permission Created Successfully');
    }
    public function edit(Permission $permission)
    {
        return view('admin.permissions.edit',compact('permission'));

    }
    public  function update(Request $request , Permission $permission){
        $validated= $request->validate(['name'=> 'required']);
        $permission->update($validated);

        return to_route('admin.permissions.index')->with('message','Permission Updated Successfully');

    }
    public function destroy(Permission $permission){
        $permission ->delete();
        return back()->with('message','Role deleted Successfully');
    }
}
