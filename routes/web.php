<?php

use App\Postcard;
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

Route::get('/', function () {
    return view('welcome');
});

// Service Container
Route::get('pay', 'PayOrderController@store');

// Facade
Route::get('/facades', function () {
    Postcard::hello('Hello', 'abc@123.com');
});

Route::get('search/query', 'SearchController@query');
Route::get('search/add', 'SearchController@add');
Route::get('search/delete', 'SearchController@delete');
