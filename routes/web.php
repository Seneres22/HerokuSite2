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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/users',['uses' => 'UserController@getUsers']);
$router->get('/users', 'UserController@index'); // get all users records
$router->post('/users', 'UserController@add'); // create new user record
$router->get('/users/{id}', 'UserController@show'); // get user by id
$router->put('/users/{id}', 'UserController@update'); // update user record
$router->patch('/users/{id}', 'UserController@update'); // update user record
$router->delete('/users/{id}', 'UserController@delete'); // delete record

$router->get('/usersjob', 'UserJobController@index'); 
$router->get('/userjob/{id}', 'UserJobController@show'); // get user by id