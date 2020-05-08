<?php

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
    return "APLIKASI SEMINAR APTIKOM KEPRI BACKEND v1.0";
});

$router->post('/auth/login', 'AuthController@login');

$router->group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {    
    $router->get('/user',['uses'=>'UserController@index','as'=>'user.index']);
    $router->post('/user/store',['uses'=>'UserController@store','as'=>'user.store']);
    $router->put('/user/update/{id}',['uses'=>'UserController@update','as'=>'user.update']);
    $router->delete('/user/{id}',['uses'=>'UserController@destroy','as'=>'user.destroy']);

    $router->post('logout', 'AuthController@logout');
    $router->post('refresh', 'AuthController@refresh');
    $router->post('me', 'AuthController@me');

});