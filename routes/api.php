<?php

use App\Http\Controllers\API\BaseController;
use Illuminate\Support\Facades\Route;

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
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::fallback(function () { //handle the 404 error into API, encoded json string instead of returning a view
    return (new BaseController())->sendError(__('home.error').' 404',[],404);
});

Route::post('register','API\Auth\LoginController@register');
Route::post('login','API\Auth\LoginController@login');

Route::middleware('auth:api')->group(function () {
    Route::post('logout', 'API\Auth\LoginController@logout');
    Route::get('test','API\Auth\LoginController@test');
});
