<?php

namespace App\Http\Controllers;

use Http;
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

    public function sendDataToView()
    {
        $url = Http::get('https://reqres.in/api/users?page=1');
        return view('getdatafromhttp',['data'=>$url['data']]);
    }
    
}
