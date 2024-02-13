<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAuthentication extends Controller
{
    public function login(){
        return view("auth.login");
    }
    public function registration() {
        return view("auth.registration");
    }
    public function registerUser(request $request)
    {
        echo 'Value posted';
    }
    public function test(){
        echo 'testing';
    }
}
#request->validate (['name'=>'required','email'=>'required','password'=>'required']);