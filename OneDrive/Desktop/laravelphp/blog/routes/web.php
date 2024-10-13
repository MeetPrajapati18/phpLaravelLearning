<?php

use Illuminate\Support\Facades\Route;
//to call controller
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

//Routes for normal files

// 2nd method to route the page
Route::view('/home','home');
//Route::view('userName/{user}','about');

//how to do redirect
//Route::redirect('/home','/');

Route::get('/about/{user}', function($user) {
    $users = ['Meet', 'Prajapati']; // Define the users array
    return view('about', ['user' => $user, 'users' => $users]); // Pass both user and users
});

Route::get('user',[UserController::class, 'getUser']);
Route::get('about',[UserController::class,'aboutUser']);
Route::get('userName/{name}',[UserController::class,'getUserName']);
Route::post('addUser',[UserController::class,'addUser']);

//Routes for admin
Route::get('admin',[UserController::class, 'adminLogin']);

//Rotes for Forms
Route::view('userForm','userForm');



/**
 * 
 * View in Laravel
 * 
 * View is the folder which contains the UI part of the project
 * We keep it in Resource folder
 * Command to make view file : php artisan make:view fileName
 */

/**
 * Blade Template in Laravel
 * Blade is Laravel's templating engine, used to simplify and enhance the process of creating HTML views in PHP.
 * This is included in Laravel Framework.
 * we can write php tags also in the blade template
 * we can execute php code using blade template.
 * extension :- .blade.php
 */

/**
 * Sub View in Laravel 
 * When one view is included in another view then included view is consider as a sub view.
 * we create it same as we create view 
 * Command to create Sub View : php artisan make:view folderName.fileName -->> if we want to  create it in any folder otherwise fileName is enough
 * 
 */

/**
 * Component in Laravel
 * A piece of code which can be reused in project
 * in components you'll find code for both php and UI code also 
 * Components can be reused in same and different both files.
 */

/**
 * Commands to push in git
 * git status
 * git add .
 * git commit -m "Your commit message here"
 * git push origin master
 */
