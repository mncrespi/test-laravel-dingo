<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});



/*
|--------------------------------------------------------------------------
| DINGO API Routes
|--------------------------------------------------------------------------
*/

$api = app('Dingo\Api\Routing\Router');


//$api->version(['v1'], ['prefix' => 'api/v1', 'namespace' => ''], function($api) {
$api->version(['v1'], ['namespace' => 'App\Http\Controllers\api'], function($api) {
    $api->get('hello-world', function() {
       return 'Hello World';
    });

    $api->get('simple', 'IndexController@index');
    $api->post('simple', 'IndexController@store');
    $api->get('simple/{id}', 'IndexController@show');
    $api->put('simple/{id}', 'IndexController@update');
    $api->delete('simple/{id}', 'IndexController@destroy');

    $api->resource('resource', 'IndexController');
});

