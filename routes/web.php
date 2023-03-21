<?php

/** @var \Laravel\Lumen\Routing\Router $router */
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET,HEAD,PUT,POST,DELETE,PATCH,OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin, Authorization');
Route::options('/{any:.*}', [function (){ 
   return response(['status' => 'success']); 
  }
 ]
);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|

*/

// to wrap up like 
//localhost:8000/api
$router->group(['prefix' => 'api'], function () use ($router) {


//localhost:8000
$router->get('/', function () use ($router) {
    return 'Graaahhhhhhhhh!!!!!';
});

//localhost:8000/books
$router->get('books',['uses' => 'BookController@getAllBooks']);

//localhost:8000/books/2
$router->get('books/{id}',['uses' => 'BookController@getOneBook']);

// CRUD

// create
$router->post('books',['uses' => 'BookController@createBook']);

// delete
$router->delete('books/{id}',['uses' => 'BookController@deleteBook']);

// update
$router->put('books/{id}',['uses' => 'BookController@updateBook']);


});