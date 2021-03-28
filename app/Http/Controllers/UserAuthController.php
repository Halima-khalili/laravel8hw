<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    function login(){
        return view('admin.login');
    }
    function register(){
        return view('admin.register');
    }
    function create(Request $request){
        return $request->input();
    }
}
