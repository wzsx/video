<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/video','Test\TestController@oss1');
Route::get('/video2','Test\TestController@oss2');
Route::get('/oss','Test\TestController@saveToOss');
Route::get('/mp','video\IndexController@mp');
Route::get('/cc','video\IndexController@cc');
Route::post('/oss/urle','Oss\OssController@urle');