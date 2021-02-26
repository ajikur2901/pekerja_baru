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

// register user
Route::post('/register', 'PassportController@register');

Route::middleware('auth:api')->group(function(){

    // get user
    Route::get('/user', 'PassportController@details');

    // get daerah
    Route::get('/provinsi',         'ProvinsiController@index');    
    Route::get('/provinsi/search',  'ProvinsiController@show');
    Route::get('/kabupaten/search', 'KabupatenController@show');
    Route::get('/kecamatan/search', 'KecamatanController@show');
    Route::get('/kelurahan/search', 'KelurahanController@show');
    Route::get('/kodepos/search',   'KodeposController@show');

    // get / create / update / delete master data
        //agama
    Route::get('/agama',                        'MasterAgamaController@index');
    Route::post('/agama/create',                'MasterAgamaController@create');
    Route::put('/agama/update',                 'MasterAgamaController@update');
    Route::delete('/agama/delete/{id}',         'MasterAgamaController@delete');
        //hub keluarga
    Route::get('/hubunganKeluarga',             'MasterHubunganKeluargaController@index');
    Route::post('/hubunganKeluarga/create',     'MasterHubunganKeluargaController@create');
    Route::put('/hubunganKeluarga/update',      'MasterHubunganKeluargaController@update');
    Route::delete('/hubunganKeluarga/delete/{id}','MasterHubunganKeluargaController@delete');
        //hub kerja
    Route::get('/hubunganKerja',                'MasterHubunganKerjaController@index');
    Route::post('/hubunganKerja/create',        'MasterHubunganKerjaController@create');
    Route::put('/hubunganKerja/update',         'MasterHubunganKerjaController@update');
    Route::delete('/hubunganKerja/delete/{id}', 'MasterHubunganKerjaController@delete');
        //stat rumah
    Route::get('/statusRumah',                  'MasterStatusRumahController@index');
    Route::post('/statusRumah/create',          'MasterStatusRumahController@create');
    Route::put('/statusRumah/update',           'MasterStatusRumahController@update');
    Route::delete('/statusRumah/delete/{id}',   'MasterStatusRumahController@delete');

    // simpan input data
    Route::post('dataPribadi/simpan',           'DataPribadiController@simpan');
    Route::post('dataAlamatDomisili/simpan',    'DataAlamatDomisiliController@simpan');
    Route::post('dataAlamatRumah/simpan',       'DataAlamatRumahController@simpan');
    Route::post('dataKeluarga/simpan',          'DataAnggotaKeluargaController@simpan');
    Route::post('dataBpjs/simpan',              'DataBpjsController@simpan');
});



