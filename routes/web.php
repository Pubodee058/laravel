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
    return view('welcome');
});

Route::get('about', function () {
    $name= "pubodell";
    $date= "8 มีนาคม 2546";
    return view('about', compact('name','date'));
})->name('about');

Route::get('blog', function () {
    return view('blog');
})->name('blog');