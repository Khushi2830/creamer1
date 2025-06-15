<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view("admin.dashboard");  
    }

    public function manageUser(){
       $users = User::all();
        return view("admin.manageUser", compact("users"));
    }

}
