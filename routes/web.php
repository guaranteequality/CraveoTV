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

Route::get('/', function () { return view('Home'); });
Route::get('first', function () { return view('First'); });
Route::get('second', function () { return view('Second'); });
Route::get('third', function () { return view('Third'); });
