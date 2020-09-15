<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PageController@index');
Route::get('/noticias','PageController@newsarchive')->name(
    'newsarchive'
);
Route::get('/perfiles','PageController@parchive')->name('perfiles');
Route::get('/videos','PageController@videoarchive')->name('videos');
Route::get('/noticias/{slug}','PageController@singlenews')->name('news');
Route::get('/perfiles/{slug}','PageController@singlepref');
Route::get('/videos/{id}','PageController@singlevideo');
Route::get('/spo/{id}','PageController@singlesport');
Route::get('/planteles/{slug}/','PageController@plantelsingle');
Route::get('/planteles/{plantelSlug}/{deportistaSlug}/{id}','PageController@deportistasingle');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::post('/contact', [
    'uses' => 'ContactUsFormController@ContactUsForm',
    'as' => 'contact.store'
]);