<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZadachaController;
use App\Http\Controllers\ProductController;

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


//Route::get('/', function () {
//    return view('index');
Route::get('/','App\Http\Controllers\ZadachaController@index');
//});
Route::group(['prefix'=>'zadacha'], function(){

Route::get('/home','App\Http\Controllers\ZadachaController@index')->name('home');
Route::get('/delete_odel/{id}','App\Http\Controllers\ZadachaController@delete')->name('delete_odel');
Route::get('/edit_odel/{id}','App\Http\Controllers\ZadachaController@edit_odel')->name('edit_odel');
Route::get('/form_odel','App\Http\Controllers\ZadachaController@form_show_odel')->name('form_odel');
Route::get('/insert_odel','App\Http\Controllers\ZadachaController@insert_odel')->name('insert_odel');
Route::get('/otdeli','App\Http\Controllers\ZadachaController@otdeli')->name('otdeli');
Route::get('/sotrudniki','App\Http\Controllers\ZadachaController@sotrudnik')->name('sotrudniki');
Route::get('/show/{id}','App\Http\Controllers\ZadachaController@show')->name('show');
Route::post('/update/{id}','App\Http\Controllers\ZadachaController@update')->name('update');
Route::get('/create','App\Http\Controllers\ZadachaController@create')->name('create');
Route::get('/edit/{id}','App\Http\Controllers\ZadachaController@edit')->name('edit');
Route::get('/store','App\Http\Controllers\ZadachaController@store')->name('store');
Route::get('/delete/{id}','App\Http\Controllers\ZadachaController@deletes')->name('delete');
Route::get('/show_odel','App\Http\Controllers\ZadachaController@show_odel')->name('show_odel');
});

Route::get('/product',[ProductController::class,'index']);


