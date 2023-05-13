<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accessor extends Model
{
    use HasFactory;

    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }
    
    public function getAddressAttribute($value)
    {
        return "house no  ".$value."  ends ";
    }

}
