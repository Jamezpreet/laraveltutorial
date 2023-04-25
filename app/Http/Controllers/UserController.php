<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index($username)
    {
        return "index function is called and your username is $username";
    }
    
    public function userloadview($username)
    {
        return view('welcome2',['name' => $username]);
    }
    
}
