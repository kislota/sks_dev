<?php

use App\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserCollection;
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

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function () {

    Route::post('login', 'AuthController@login');
    Route::post('me', 'AuthController@me');

    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('register', 'AuthController@register');

    Route::get('users', 'UserController@index');
    Route::get('user/{user}', 'UserController@show');
    Route::put('user', 'UserController@store');
    Route::delete('user/{user}', 'UserController@destroy');


    Route::get('comments', 'CommentController@index');
    Route::get('comment/{comment}', 'CommentController@show');
    Route::post('comment', 'CommentController@store');
    Route::put('comment', 'CommentController@store');
    Route::delete('comment/{comment}', 'CommentController@destroy');
});



