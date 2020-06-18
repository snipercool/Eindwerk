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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/FaseOne', ['uses' => 'ApiController@getFaseOne']);
Route::get('/FaseTwo', ['uses' => 'ApiController@getFaseTwo']);
Route::get('/FaseThree', ['uses' => 'ApiController@getFaseThree']);

Route::get('/exemptions', ['uses' => 'ApiController@getExemptions']);

Route::get('/getIspFaseOne', ['uses' => 'ApiController@getIspFaseOne']);
Route::get('/getIspFaseTwo', ['uses' => 'ApiController@getIspFaseTwo']);
Route::get('/getIspFaseThree', ['uses' => 'ApiController@getIsFaseThree']);
Route::get('/getIspFaseFour', ['uses' => 'ApiController@getIspFaseFour']);



