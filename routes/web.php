<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home', ['title' => 'Home']);
});
Route::get('/about', function () {
    return view('pages.about', ['title'=> 'About Us']);
});
Route::get('/gallery', function () {
    return view('pages.gallery', ['title'=> 'Gallery']);
});
Route::get('/services', function () {
    return view('pages.services', ['title'=> 'Services']);
});
Route::get('/contact', function () {
    return view('pages.contact', ['title'=> 'Contact Us']);
});
