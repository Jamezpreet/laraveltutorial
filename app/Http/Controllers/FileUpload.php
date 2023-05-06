<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUpload extends Controller
{
    public function savefile(Request $request)
    {
        return $request->file('file')->store('jaspreet/docs');
    }
}
