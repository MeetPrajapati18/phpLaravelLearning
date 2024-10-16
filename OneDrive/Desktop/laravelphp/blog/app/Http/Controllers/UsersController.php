<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    //
    function queries(){
        $result = DB::table('users') -> get(); // to get all data
        //$result = DB::table('users') -> where ('id', '1') -> get(); //this is how we can put condition to get data
        //$result = DB::table('users') -> first();
        //$result = [$result]; //when we pass single person data then we have to convert it into array so we dont get error
        //return $result;

        // $result = DB::table('users') -> insert([ //to insert the dta
        //     'name' => 'Prajapati',
        //     'email' => 'prajapati@gmail.com',
        //     'password' => '987654321',
        // ]);

        // if($result){
        //     return "Data Inserted.";
        // } else{
        //     return "Failed to insert data";
        // }

        // $result = DB::table('users') -> where('name', 'Prajapati') -> upDate(['password' => '123456789']); // to update the data
        // if($result){
        //     return "Data updated";
        // } else{
        //     return "Failed to update data";
        // }

        // $result = DB::table('users') -> where('name', 'Prajapati') -> delete(); //to delete the data
        // if($result){
        //     return "Data deleted";
        // } else{
        //     return "Failed to delete data";
        // }

        return view('users', ['users' => $result]);
    }
}
