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

    function getStudent(){
        $data = new \App\Models\Student;
        echo $data -> testFun();
        $students = \App\Models\Student::all();
        return view('students', ['data' => $students]);
    }
}

/**
 * Inspecting Model Feature
 * ------------------------
 * Command :- php artisan model:show modelName (i.e. Student)
 * when table name doesn''t matches to the model name then there woulb be some limitation to show data of the table.
 */

/**
 * Http Client
 * It is used to call API (Application Programmin Interface)
 * 
 */
