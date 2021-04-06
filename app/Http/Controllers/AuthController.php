<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(Request $request) 
    {
        // dd($request);
        $nama = $request["fname"];
        return view('welcome', ["nama" => $nama]);
    }

    public function register() 
    {
        return view('register');
    }
}
