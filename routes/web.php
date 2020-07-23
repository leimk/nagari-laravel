<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', 'DataController@index')->name('root');
Route::get('/data', 'DataController@index')->name('data.index');
Route::get('/data/cari/{id:noPK}','DataController@cari')->name('data.cari');
Route::post('/data', 'DataController@simpan')->name('data.simpan');


Auth::routes(['register' => false]); //Buang jika mau dipakai untuk register user
// Auth::routes(['password.reset' => false]);

Route::get('/home', 'HomeController@index')->name('home');
