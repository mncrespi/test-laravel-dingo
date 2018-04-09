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


$api->version('v1', function($api) {
    $api->get('hello-world', function() {
       return 'Hello World';
    });
});
