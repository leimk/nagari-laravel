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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/', function (Request $request){
//     return response()->json([$request]);
// });

// Route::post('/', function(){
//     return 'dari api';
// });

// Route::group(['prefix'=>'auth'], function(){
//     Route::post('login','MainController@login');
//     Route::post('register','MainController@register');
//     Route::group(['middleware'=>'auth:api'], function(){
//         Route::get('logout', 'MainController@logout');
//         Route::get('profile', 'MainController@profile');
//     });
// });


Route::group(['prefix'=>'auth'],function(){ 
     // Tutup saja, registrasi di luar API
    Route::post('login', 'MainController@login')->name('login');

    //Group api/auth/xxxx...
    Route::group(['middleware'=>'auth:api'], function(){
        Route::get('logout','MainController@logout');
        Route::get('/profile','MainController@profile');
        Route::get('/', 'DataController@index')->name('root');
        Route::get('/data', 'DataController@index')->name('data.index');
        Route::get('/data/cari/{id:noPK}','DataController@cari')->name('data.cari');
        Route::post('/data/produksi/','DataController@produksi')->name('data.produksi');
        Route::post('/data', 'DataController@simpan')->name('data.simpan');
        // Auth::routes(['password.reset' => true]);
        // Route::post('/password/reeset','Auth\ResetPasswordController@reset');
        Route::post('change_password', 'Auth\ResetPasswordController@change_password');
        // Route::post('forgot_password', 'Api\AuthController@forgot_password');

        Route::post('register','MainController@register'); //pertimbangan, nanti user yg teregister bisa register?????
    });
});

// Auth::routes(['register' => false]); //Buang jika mau dipakai untuk register user
// // Auth::routes(['password.reset' => false]);

// Route::get('/home', 'HomeController@index')->name('home');

