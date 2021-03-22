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

Route::get('/', function () {
    return view('home');
});
Route::get('actionadventure', function () {
    return view('actionadventure');
});
Route::get('horror', function () {
    return view('horror');
});
Route::get('comic', function () {
    return view('comic');
});
Route::get('ironman', function () {
    return view('ironman');
});
Route::get('pacificrim', function () {
    return view('pacificrim');
});
Route::get('thegreatgatsby', function () {
    return view('thegreatgatsby');
});
Route::get('mummy', function () {
    return view('mummy');
});