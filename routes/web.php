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

$router->get('/users', 'UserController@getUsers');
$router->get('/users/{id}', 'UserController@getUser');
$router->get('/login', 'UserController@loginPage');
$router->post('validate', ['as' => 'validate', 'uses' => 'UserController@validateUser']
);
$router->get('dashboard', ['as' => 'dashboard', 'uses' => 'UserController@dashboard']
);
$router->post('/users',['uses' => 'UserController@addUsers']);
$router->put('/users/{id}',['uses' => 'UserController@updateUser']);
$router->delete('/users/{id}',['uses' => 'UserController@deleteUser']);


// userjob routes
$router->get('/usersjob','UserJobController@index');
$router->get('/userjob/{id}','UserJobController@show'); // get user by id