<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function getData(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        return $request->all();
    }
}
