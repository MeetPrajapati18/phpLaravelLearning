<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //if table name doesnt matches to the model name
    //protected $table = "name_of_table";

    function testFun(){
        return "this is test function.";
    }
}
