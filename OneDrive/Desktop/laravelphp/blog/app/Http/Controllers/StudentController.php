<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function show(){
        return "List of Student.";
    }

    function add(){
        return "Student Added.";
    }

    function delete(){
        return "Student Deleted.";
    }

    function aboutStudent($name){
        return $name;
    }
}
