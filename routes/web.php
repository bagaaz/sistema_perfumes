<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\Perfumes\PerfumesController;
use Illuminate\Support\Facades\Route;

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

/*
$router->get('/', function () use ($router) {
    return $router->app->version();
});
*/

//Rotas Sem Login
$router->get('/api/perfumes', ['uses' => 'Perfumes/PerfumesController@index']);
$router->get('/api/search/{nome}', ['uses' => 'Perfumes/PerfumesController@search']);
$router->get('/api/perfume/{perfume_id}', ['uses' => 'Perfumes/PerfumesController@show']);

//Rotas com Login do Usuario


//Rotas com Login do Administrador
