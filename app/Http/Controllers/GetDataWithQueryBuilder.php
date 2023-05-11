<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class GetDataWithQueryBuilder extends Controller
{
    public function index()
    {
        //with where conditon DB::table('devices')->where('id',5)->get()
       return DB::table('devices')->get();   

       //save data with db query

       DB::table('devices')->where('id','4')
       ->insert(['id' => '6',
       'name'=> 'jaspreet']);

        //udpate data with db query
        DB::table('devices')->where('id','4')
        ->update(['id' => '6',
        'name'=> 'jaspreet']);
    }
}
