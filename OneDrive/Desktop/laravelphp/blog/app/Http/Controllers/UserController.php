<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //to return the file
    function getUser(){
        //return "Meet Prajapati";
        return view('user');
    }

    //to return the text direct 
    function aboutUser(){
        return "Hello this is Meet Prajapati, I am Good Boy and i am 19.";
    }

    //for get request
    function getUserName($user) {
        // Define an array of users
        $users = ['Meet', 'Prajapati'];
        // Pass the 'user' parameter and 'users' array to the view
        return view('about', ['user' => $user, 'users' => $users]);
    }

    function addUser(Request $request){
        $request -> validate([
            'userName' => 'required | min:3 | max:20',
            'email' => 'required | email',
            'city' => 'required | min:3 | max:20 | Uppercase',
        ],[
            'userName.required' => 'userName cannot be empty',
            'city.Uppercase' => 'City name must be written in all uppercase characters.',
        ]);

        //echo $request->userName;//if we want to print only one entity.
        //print_r($request -> skill); // to get the whole array in request
        return $request;
    }

    //for file which is inside the sub folder
    //to check if file exists or not
    function adminLogin(){
        if(View::exists('admin.login')){
            return view('admin.login');
        } else{
            echo "No view Found.";
        }
    }
}

/**
 * * Controller
 * MVC - Model View Controller
 * Work :- Handles request from user and display view, Handle Database
 * controller is central unit which handles user reqest, model, and view.
 * 
 * We create controller in app/Http/Controllers
 * Command to create controller : php artisan make:controller UserController
 * 
 * Command to run the programmm : php artisan serve
 * 
 * We use controller to call php file because its okay for normal page but when we page's data is gathered from database at that time we have to use controller to call that page because it fetches data from Model.
 * 
 *  why we use controller to call pages instead direct calling them from rpputes 
 * Maintainability, Scalability, Clean Architecture
 * Separation of Concerns (SoC): Controllers help separate the logic of handling HTTP requests from the routing layer. This means that the routing file is responsible for defining the routes and mapping them to controllers, while the controller handles the business logic and data processing. This makes your code cleaner and easier to maintain.
 * Reusability: Controllers allow you to organize related logic into reusable methods. For instance, you can have a controller handle multiple actions for a specific resource (like creating, reading, updating, and deleting). This reusability keeps your code DRY (Don't Repeat Yourself).
 * Scalability: As your application grows, managing complex logic directly within routes can become messy and unmanageable. Controllers make it easier to organize logic into separate classes and methods, allowing your application to scale without making the routing file cluttered.
 * Middlewares and Dependency Injection: When using controllers, you can easily apply middlewares (like authentication or throttling) or inject dependencies (like services, repositories, or request objects) into controller methods, making your code more flexible and testable.
 * Code Organization: Controllers provide a structured way to handle multiple routes that belong to a similar function or resource (e.g., CRUD operations on a product or user). This organization helps in keeping your codebase cleaner and easier to understand.
 * RESTful Structure: Laravel follows a RESTful architecture, where each controller corresponds to a resource and handles actions related to that resource (such as index, show, create, edit, update, destroy). This encourages best practices in terms of API design and resource management.
 */

?>

