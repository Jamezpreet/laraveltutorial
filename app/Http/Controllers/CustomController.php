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

    public function setModifiedData()
    {
        $acc = new Accessor();
        $acc->name = 'deepak';
        $acc->address = 'nulll';
        $acc->save();
    }

    public function RouteModelBinding(Accessor $key)
    {
        return $key;
    }
}
