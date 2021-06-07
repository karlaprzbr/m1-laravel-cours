<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function form(Request $request)
    {
        if($request->isMethod("POST")) {
            $email = $request->input("email");
            $password = $request->input("password");
            $submit = $request->has("submit");
            return view("form", ["email"=>$email, "password"=>$password, "submit"=>$submit]);
        }
        return view('form');
    }
}
