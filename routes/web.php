<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Company_contrller;
use App\Http\Controllers\Products_contrller;
use App\Http\Controllers\aboutus_contrller;
use App\Http\Controllers\job_contrller;
use App\Http\Controllers\connectus_contrller;
use App\Http\Controllers\blogController;


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
//صفحه اصلی
Route::get('/', [Company_contrller::class, 'companysender'])->name('main.company');


//شغل و فرصت های شغلی
Route::get('/job', [job_contrller::class, 'jobs'])->name('jobs');
Route::get('/detail-job/{id}', [job_contrller::class, 'jobdeails'])->name('job.deails');
Route::post('/detail-job-request', [job_contrller::class, 'jobrequest'])->name('job.request');

//ارتباط با ما
Route::get('/connect-us', [connectus_contrller::class, 'connectes'])->name('connect.us');
Route::post('/connect-us-comment', [connectus_contrller::class, 'connectescomment'])->name('connect.us.comment');

//محصولات
Route::get('/product-send', [Products_contrller::class, 'productsender'])->name('allproducts');
Route::get('/single-product/{id}', [Products_contrller::class, 'productdetails'])->name('product.details');

//درباره ی ما 
Route::get('/about-us', [aboutus_contrller::class, 'aboutus'])->name('aboutus.us');

//وبلاگ
Route::get('/blog-all', [blogController::class, 'blogallmain'])->name('blogall.main');
Route::get('/blogList', [blogController::class, 'bloglist'])->name('blog.list');
Route::get('/editBlog/{id}', [blogController::class, 'editblog'])->name('blog.edit');
Route::post('/editBlogsave/{id}', [blogController::class, 'editsave'])->name('blog.editsave');

Route::get('/404', function () {
    return view('404');
});

Route::get('/blog-2', function () {
    return view('blog-2');
});
Route::get('/blog', function () {
    return view('blog');
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

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/single-page', function () {
    return view('single-page');
});

Route::get('/createBlog', function () {
    return view('createBlog');
});
