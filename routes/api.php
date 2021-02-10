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

// login user
Route::post('/login', 'PassportController@login');

Route::middleware('auth:api')->group(function(){
    // register user
    Route::post('/register', 'PassportController@register');

    // get user
    Route::get('/user', 'PassportController@details');

    // get daerah
    Route::get('/provinsi',         'ProvinsiController@index');    
    Route::get('/provinsi/search',  'ProvinsiController@show');
    Route::get('/kabupaten/search', 'KabupatenController@show');
    Route::get('/kecamatan/search', 'KecamatanController@show');
    Route::get('/kelurahan/search', 'KelurahanController@show');
    Route::get('/kodepos/search',   'KodeposController@show');

    // get master data
    Route::get('/agama',                'MasterAgamaController@index');
    Route::get('/hubungan_keluarga',    'MasterHubunganKeluargaController@index');
    Route::get('/hubungan_kerja',       'MasterHubunganKerjaController@index');
    Route::get('/status_rumah',         'MasterStatusRumahController@index');

    // simpan input data
    Route::post('dataPribadi/simpan',           'DataPribadiController@simpan');
    Route::post('dataAlamatDomisili/simpan',    'DataAlamatDomisiliController@simpan');
    Route::post('dataAlamatRumah/simpan',       'DataAlamatRumahController@simpan');
    Route::post('dataKeluarga/simpan',          'DataAnggotaKeluargaController@simpan');
    Route::post('dataBpjs/simpan',              'DataBpjsController@simpan');
});



