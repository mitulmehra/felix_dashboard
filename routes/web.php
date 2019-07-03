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


Auth::routes();
Route::get('/', 'HomeController@login')->name('home');
Route::get('/home', 'HomeController@login')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


Route::group(['middleware' => ['login']], function (){
    Route::get('/upload','UploadController@index');
    Route::post('/save_upload', 'UploadController@save')->name('save_upload');

    Route::get('/template_videos','VideoController@index');
    Route::get('/create_video','VideoController@create_video');
    Route::post('/render_video','VideoController@render_video');

});
