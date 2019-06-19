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

$router->get('foo', function () use ($router) {
    return 'Hello, world!';
});

$router->group(['prefix' => 'api/v1'], function($app)
{
	// CRUD
	$app->post('car','CarController@createCar');
	$app->get('car/{id}', 'CarController@readCar');
	$app->put('car/{id}','CarController@updateCar');
	$app->delete('car/{id}','CarController@deleteCar');

	// List all cars
	$app->get('car','CarController@index');
	$app->get('cars','CarController@index');
});