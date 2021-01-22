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

Route::post('/login', 'PassportController@login');
Route::post('/register', 'PassportController@register');

Route::middleware('auth:api')->group(function(){
    Route::get('/user', 'PassportController@details');

    // daerah
    Route::get('/provinsi', 'ProvinsiController@index');    
    Route::get('/provinsi/search', 'ProvinsiController@show');
    Route::get('/kabupaten/search', 'KabupatenController@show');
    
});


Route::middleware('auth:api')->get('/kecamatan', function (Request $request) {
    return 'under construction!';
});

Route::middleware('auth:api')->get('/desa', function (Request $request) {
    return 'under construction!';
});
