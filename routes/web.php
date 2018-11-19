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
    return redirect()->route('index');
});


$router->group(['prefix' => 'api'], function () use ($router) {

    $router->get('', ['as' => 'index', function () {
        return view('index');
    }]);

    $router->get('regions', [
        'as' => 'regions', 'uses' => 'BeachController@getAllRegions'
    ]);

    $router->get('beaches',  ['uses' => 'BeachController@getAllBeaches']);

    $router->get('beaches/{region}',  ['uses' => 'BeachController@getBeachesByRegion']);

    $router->get('beaches/{region}/{name}',  ['uses' => 'BeachController@getBeach']);
    
    $router->get('beaches/{region}/{name}/review/{id}',  ['uses' => 'BeachController@getReview']);
       
    $router->post('beaches/{region}/{name}/review', ['uses' => 'BeachController@create']);
        
    $router->put('beaches/{region}/{name}/reviews/{id}', ['uses' => 'BeachController@update']);

  });