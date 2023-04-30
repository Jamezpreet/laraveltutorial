<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use APP\Models\Device;
use App\Models\Product;

class ProductController extends Controller
{
    public function productList()
    {
        return Product::all(); //get data through model
        //return DB::connection('mysql2')->table('products')->get(); // get records with query
    }
}
