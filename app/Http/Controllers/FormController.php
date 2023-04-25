<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function getData(Request $request)
    {
        return $request->all();
    }
}
