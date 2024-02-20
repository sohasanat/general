
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Company_contrller;
use App\Http\Controllers\Products_contrller;
use App\Http\Controllers\aboutus_contrller;
use App\Http\Controllers\job_contrller;
use App\Http\Controllers\connectus_contrller;
use App\Http\Controllers\blogController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\cmsprductcontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\cmsdefintionjobcontroller;
use App\Http\Controllers\customerController;
use App\Http\Controllers\tiketController;


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
Route::get('/main', [Company_contrller::class, 'companysender'])->name('main.company');
Route::get('/', [Company_contrller::class, 'main'])->name('main');



//تعریف ادمین
Route::get('/loginview', [Company_contrller::class, 'loginview'])->name('login.view');
Route::post('/login', [UserController::class, 'user'])->name('loginuser');
Route::post('/register', [UserController::class, 'userrequest'])->name('user.register');
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
Route::get('/lostpassword', [UserController::class, 'losst'])->name('user.losstpas');
Route::post('/lostpassword-vrify', [UserController::class, 'sendVerificationCode'])->name('user.losstpasvrify');


//شغل و فرصت های شغلی
Route::get('/job', [job_contrller::class, 'jobs'])->name('jobs');
Route::get('/detail-job/{id}', [job_contrller::class, 'jobdeails'])->name('job.deails');
Route::post('/detail-job-request', [job_contrller::class, 'jobrequest'])->name('job.request');



//مدیریت شغل و فرصت های شغلی

Route::post('/cms-job-save', [cmsdefintionjobcontroller::class, 'cmsjobsave'])->name('cmsjob.save');
Route::get('/cms-job-edit/{id}', [cmsdefintionjobcontroller::class, 'cmsjobedit'])->name('cmsjob.edit');
Route::post('/cms-job-edit-save/{id}', [cmsdefintionjobcontroller::class, 'cmsjobeditsave'])->name('cmsjob.editsave');
Route::get('/cmsjob-delete/{id}', [cmsdefintionjobcontroller::class, 'cmsjobdelete'])->name('cmsjob.delete');


Route::get('/job-list-cms', [cmsdefintionjobcontroller::class, 'jobs'])->name('cmsjoblist');
Route::get('/resumes', [cmsdefintionjobcontroller::class, 'resumes'])->name('resumeslist');
Route::get('/resumesdetails/{resume}', [cmsdefintionjobcontroller::class, 'resumesdatails'])->name('resume.details');
Route::get('/sendtocontroller', [cmsdefintionjobcontroller::class, 'cmsjobex'])->name('send.to.controller');

//ارتباط با ما
Route::get('/connect-us', [connectus_contrller::class, 'connectes'])->name('connect.us');
Route::post('/connect-us-comment', [connectus_contrller::class, 'connectescomment'])->name('connect.us.comment');


//مدیریت مشتری 
Route::post('/cmscustomer-save', [customerController::class, 'customersave'])->name('customer.save');
Route::get('/cmscustomer-list', [customerController::class, 'customercmslist'])->name('customer.list');
Route::get('/cmscustomer-edit/{id}', [customerController::class, 'customereditview'])->name('customer.editview');
Route::post('/cmscustomer-editsave/{id}', [customerController::class, 'customereditsave'])->name('customer.editsave');
Route::get('/cmscustomer-delete/{id}', [customerController::class, 'customeredelete'])->name('customer.delete');


//محصولات
Route::get('/product-send', [Products_contrller::class, 'productsender'])->name('allproducts');
Route::get('/single-product/{id}', [Products_contrller::class, 'productdetails'])->name('product.details');
Route::post('/single-product-demo', [Products_contrller::class, 'productdemo'])->name('product.demo');
Route::post('/single-product-comment', [Products_contrller::class, 'productcomments'])->name('product.comment');


//فیلتر محصولات 
Route::get('/product-serch', [Products_contrller::class, 'products'])->name('searchpro');
Route::get('/product-fillter', [Products_contrller::class, 'productsfill'])->name('productsfilter');

//مدیریت محصولات
Route::post('/product-save', [cmsprductcontroller::class, 'productsave'])->name('product.save');
Route::get('/product-list', [cmsprductcontroller::class, 'productcmslist'])->name('product.list');
Route::get('/product-edit/{id}', [cmsprductcontroller::class, 'producteditview'])->name('product.editview');
Route::post('/product-editsave/{id}', [cmsprductcontroller::class, 'producteditsave'])->name('product.editsave');
Route::get('/product-delete/{id}', [cmsprductcontroller::class, 'productedelete'])->name('product.delete');

//درباره ی ما 
Route::get('/about-us', [aboutus_contrller::class, 'aboutus'])->name('aboutus.us');

//وبلاگ
Route::get('/blog-all', [blogController::class, 'blogallmain'])->name('blogall.main');
Route::get('/blogList', [blogController::class, 'bloglist'])->name('blog.list');
Route::get('/editBlog/{id}', [blogController::class, 'editblog'])->name('blog.edit');
Route::post('/editBlogsave/{id}', [blogController::class, 'editsave'])->name('blog.editsave');
Route::post('/Blogsave', [blogController::class, 'blogsave'])->name('blog.save');
Route::get('/Blogcreate', [blogController::class, 'blogcreate'])->name('blog.create');
Route::get('/deleteBlogsave/{id}', [blogController::class, 'blogdelete'])->name('blog.delete');



//tiketing  سایت 





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

Route::get('/lost-pass-code', function () {
    return view('lost-password-vrify');
});



//محصولات
//Route::get('/product-list', function () {
//    return view('c-productList');
//});

Route::get('/product-create', function () {
    return view('c-productCreate');
});

Route::get('/product-edit', function () {
    return view('c-productEdit');
});

//مشتریان
Route::get('/customer-list', function () {
    return view('c-customerList');
});

Route::get('/customer-create', function () {
    return view('c-customerCreate');
});

Route::get('/customer-edit', function () {
    return view('c-customerEdit');
});

//شغل
Route::get('/job-list', function () {
    return view('c-jobList');
});

Route::get('/job-create', function () {
    return view('c-jobCreate');
});

Route::get('/job-edit', function () {
    return view('c-jobEdit');
});

//کارجویان
Route::get('/resume-list', function () {
    return view('c-resumeList');
});


Route::get('/ticketList', function () {
    return view('ticketing.ticketList');
});

Route::get('/ticketCreate', function () {
    return view('ticketing.ticketCreate');
});

Route::get('/ticketDetail', function () {
    return view('ticketing.ticketDetail');
});



Route::get('/c-ticketList', function () {
    return view('ticketing.c-ticketList');
});

Route::get('/c-ticketDetail', function () {
    return view('ticketing.c-ticketDetail');
});

Route::get('/c-ticketListHistory', function () {
    return view('ticketing.c-ticketListHistory');
});