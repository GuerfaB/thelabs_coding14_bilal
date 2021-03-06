<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index(){
        $user = User::all();
        $roles = Role::all();
        return view("adminUser", compact("user", "roles"));
    }
}
