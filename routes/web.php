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
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function() use ($router){

    $router->group(['prefix' => 'sexo'], function() use ($router) {
        $router->get('/', ['uses' => 'SexosController@index']);
        $router->get('/{id}', ['uses' => 'SexosController@show']);
        $router->post('/', ['uses' => 'SexosController@store']);
        $router->put('/{id}', ['uses' => 'SexosController@update']);
        $router->delete('/{id}', ['uses' => 'SexosController@destroy']);
    });
});
