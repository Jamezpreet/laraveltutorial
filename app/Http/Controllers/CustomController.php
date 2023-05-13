<?php

namespace App\Http\Controllers;

use App\Models\Accessor;
use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function getModifiedData()
    {
       return json_decode(Accessor::all());
    }
}
