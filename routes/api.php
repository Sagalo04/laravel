<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('heroes/{page}','App\Http\Controllers\HeroesController@getHeroes');

Route::get('heroe/{id}','App\Http\Controllers\HeroesController@getSingleHeroe');

Route::get('reactions','App\Http\Controllers\ReactionsController@getReactions');

Route::post('addReaction','App\Http\Controllers\ReactionsController@insertReaction');

Route::post('updateReaction/{heroe_id}','App\Http\Controllers\ReactionsController@updateReaction');