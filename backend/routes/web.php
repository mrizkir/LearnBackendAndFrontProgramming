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

$router->group(['middleware'=>'auth:api'], function () use ($router)
{
    $router->get('/user',['uses'=>'UserController@index','as'=>'user.index']);
    $router->post('/user/store',['uses'=>'UserController@store','as'=>'user.store']);
    $router->put('/user/update/{id}',['uses'=>'UserController@update','as'=>'user.update']);
    $router->delete('/user/{id}',['uses'=>'UserController@destroy','as'=>'user.destroy']);

    //authentication    
    $router->post('/auth/logout',['uses'=>'AuthController@logout','as'=>'auth.logout']);
    $router->get('/auth/refresh',['uses'=>'AuthController@refresh','as'=>'auth.refresh']);
    $router->get('/auth/me',['uses'=>'AuthController@me','as'=>'auth.me']);
});