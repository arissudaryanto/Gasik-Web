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

Route::get('/', [ 'uses' => 'App\Http\Controllers\HomeController@index', 'as' => 'index']);
Route::get('pricing', [ 'uses' => 'App\Http\Controllers\HomeController@pricing', 'as' => 'pricing']);

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
