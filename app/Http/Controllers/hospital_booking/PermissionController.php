<?php

namespace App\Http\Controllers\hospital_booking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index(){
        $permissions= Permission::all();
        return view('admin.permissions.index', compact('permissions'));
    }
}