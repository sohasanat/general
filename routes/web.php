<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Company_contrller;
use App\Http\Controllers\Products_contrller;
use App\Http\Controllers\aboutus_contrller;
use App\Http\Controllers\job_contrller;
use App\Http\Controllers\connectus_contrller;

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

Route::get('/', [Company_contrller::class, 'companysender'])->name('main.company');



Route::get('/job', [job_contrller::class, 'jobs'])->name('jobs');

Route::get('/detail-job/{id}', [job_contrller::class, 'jobdeails'])->name('job.deails');

Route::post('/detail-job-request', [job_contrller::class, 'jobrequest'])->name('job.request');


Route::get('/connect-us', [connectus_contrller::class, 'connectes'])->name('connect.us');
Route::post('/connect-us-comment', [connectus_contrller::class, 'connectescomment'])->name('connect.us.comment');


Route::get('/product-send', [Products_contrller::class, 'productsender'])->name('allproducts');

Route::get('/single-product/{id}', [Products_contrller::class, 'productdetails'])->name('product.details');


Route::get('/about-us', [aboutus_contrller::class, 'aboutus'])->name('aboutus.us');


Route::get('/404', function () {
    return view('404');
});
//Route::get('/about-us', function () {
//    return view('about-us');
//});
Route::get('/blog-2', function () {
    return view('blog-2');
});
Route::get('/blog', function () {
    return view('blog');
});
//Route::get('/contact-us', function () {
//    return view('contact-us');
//});//**** */
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
//Route::get('/products', function () {
//   return view('products');
//});
Route::get('/sign-up', function () {
    return view('sign-up');
});
Route::get('/single-page', function () {
    return view('single-page');
});
//Route::get('/single-product', function () {
//    return view('single-product');
//});
//Route::get('/job', function () {
//    return view('job');
//});//**** */
//Route::get('/detail-job', function () {
//    return view('detail-job');
//});//**** */
