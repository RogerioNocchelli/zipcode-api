<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use App\Http\Controllers\Controller;

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

// Route::get('/api/all', [Controller::class, 'getAll']);

$router->group(['prefix' => '/api'], function () use ($router) {
    $router->post('/save', 'Controller@save');
    $router->get('/all', 'Controller@getAll');
});
