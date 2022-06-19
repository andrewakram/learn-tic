<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;

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
//    return view('welcome');
//});
Route::get('cache', function () {
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return 'success';
});

Route::get('/', [HomeController::class,'index'])->name('home');


Route::get('/change-language/{lang}', function ($lang) {
    session()->put('lang', $lang);
    return back();
});

Route::group([
    'prefix' => 'admin',
    'namespace' => 'App\Http\Controllers'
], function () {

    Route::group(['namespace' => 'MainAdmin', 'as' => 'admin'], function () {
        Route::get('login', 'AuthController@login_view')->name('login-view');
        Route::post('login', 'AuthController@login')->name('.login');
        Route::get('logout', 'AuthController@logout')->name('.logout');

        Route::group(['middleware' => 'auth:admin'], function () {
            Route::get('home', 'HomeController@index')->name('.home');
        });
        Route::group(['middleware' => 'auth:admin'], function () {

            Route::group(['prefix' => 'supervisors', 'as' => '.supervisors'], function () {
                Route::get('/', 'SupervisorController@index');
                Route::get('getData', 'SupervisorController@getData')->name('.datatable');
                Route::get('/create', 'SupervisorController@create')->name('.create');
                Route::post('/store', 'SupervisorController@store')->name('.store');
                Route::get('/edit/{id}', 'SupervisorController@edit')->name('.edit');
                Route::post('/update', 'SupervisorController@update')->name('.update');
                Route::get('/show/{id}', 'SupervisorController@show')->name('.show');
                Route::post('/delete', 'SupervisorController@delete')->name('.delete');
                Route::post('/delete-multi', 'SupervisorController@deleteMulti')->name('.deleteMulti');
            });

            Route::group(['prefix' => 'cities', 'as' => '.cities'], function () {
                Route::get('/', 'CityController@index');
                Route::get('getData', 'CityController@getData')->name('.datatable');
                Route::get('/create', 'CityController@create')->name('.create');
                Route::post('/store', 'CityController@store')->name('.store');
                Route::get('/edit/{id}', 'CityController@edit')->name('.edit');
                Route::post('/update', 'CityController@update')->name('.update');
                Route::get('/show/{id}', 'CityController@show')->name('.show');
                Route::post('/delete', 'CityController@delete')->name('.delete');
                Route::post('/delete-multi', 'CityController@deleteMulti')->name('.deleteMulti');
            });

            Route::group(['prefix' => 'categories', 'as' => '.categories'], function () {
                Route::get('/', 'CategoryController@index');
                Route::get('getData', 'CategoryController@getData')->name('.datatable');
                Route::get('/create', 'CategoryController@create')->name('.create');
                Route::post('/store', 'CategoryController@store')->name('.store');
                Route::get('/edit/{id}', 'CategoryController@edit')->name('.edit');
                Route::post('/update', 'CategoryController@update')->name('.update');
                Route::get('/show/{id}', 'CategoryController@show')->name('.show');
                Route::post('/delete', 'CategoryController@delete')->name('.delete');
                Route::post('/delete-multi', 'CategoryController@deleteMulti')->name('.deleteMulti');
            });

            Route::group(['prefix' => 'blogs', 'as' => '.blogs'], function () {
                Route::get('/', 'BlogController@index');
                Route::get('getData', 'BlogController@getData')->name('.datatable');
                Route::get('/create', 'BlogController@create')->name('.create');
                Route::post('/store', 'BlogController@store')->name('.store');
                Route::get('/edit/{id}', 'BlogController@edit')->name('.edit');
                Route::post('/update', 'BlogController@update')->name('.update');
                Route::get('/show/{id}', 'BlogController@show')->name('.show');
                Route::post('/delete', 'BlogController@delete')->name('.delete');
                Route::post('/delete-multi', 'BlogController@deleteMulti')->name('.deleteMulti');
            });

        });
    });

});
