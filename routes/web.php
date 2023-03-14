<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
// localhost/lumen/public
$router->get('/', function () use ($router) {
    return $router->app->version();
});

// http://localhost/lumen/public/books/
$router->get('books', ['uses' => 'BookController@showALLBooks']);
// http://localhost/lumen/public/books/5
$router->get('books/{id}', ['uses' => 'BookController@showOneBook']);

$router->get('authors', ['uses' => 'AuthorController@showALLAuthors']);

$router->get('authors/{author_id}', ['uses' => 'AuthorController@showOneAuthor']);
