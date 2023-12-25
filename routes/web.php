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
    return view('welcome');
});
Route::get('/404', function () {
    return view('404');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/blog-2', function () {
    return view('blog-2');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact-us', function () {
    return view('contact-us');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/lost-password', function () {
    return view('lost-password');
});
Route::get('/manager', function () {
    return view('manager');
});
Route::get('/project', function () {
    return view('project');
});
Route::get('/products', function () {
    return view('products');
});
Route::get('/sign-up', function () {
    return view('sign-up');
});
Route::get('/single-page', function () {
    return view('single-page');
});
Route::get('/single-product', function () {
    return view('single-product');
});
Route::get('/job', function () {
    return view('job');
});
