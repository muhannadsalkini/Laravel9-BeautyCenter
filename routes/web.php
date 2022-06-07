<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');
Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact-us');
Route::get('/about-us', [HomeController::class, 'about'])->name('about-us');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/service/{id}', [HomeController::class, 'service'])->name('service');
Route::get('/services/{id}', [HomeController::class, 'categoryservice'])->name('categoryservice');
Route::get('/addtocart/{id}',[HomeController::class, 'index'])->whereNumber('id')->name('addtocart');
Route::get('/servicelist/{search}', [HomeController::class, 'servicelist'])->name('servicelist');
Route::post('/getservice', [HomeController::class, 'getservice'])->name('getservice');



// Admin
Route::middleware('auth')->prefix('admin')->group(function (){

    // Admin role
    Route::middleware('admin')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

        // Category table
        Route::get('category', [CategoryController::class, 'index'])->name('admin_category');
        Route::get('category/add', [CategoryController::class, 'add'])->name('admin_category_add');
        Route::post('category/store', [CategoryController::class, 'store'])->name('admin_category_store');
        Route::get('category/show', [CategoryController::class, 'show'])->name('admin_category_show');
        Route::get('category/edit/{id}', [CategoryController::class, 'edit'])->name('admin_category_edit');
        Route::post('category/update/{id}', [CategoryController::class, 'update'])->name('admin_category_update');
        Route::get('category/delete/{id}', [CategoryController::class, 'destroy'])->name('admin_category_delete');

        // Service Table
        route::prefix('service')->group(function (){
            Route::get('/', [ServiceController::class, 'index'])->name('admin_service');
            Route::get('/create', [ServiceController::class, 'create'])->name('admin_service_add');
            Route::post('/store', [ServiceController::class, 'store'])->name('admin_service_store');
            Route::get('/show/{id}', [ServiceController::class, 'show'])->name('admin_service_show');
            Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('admin_service_edit');
            Route::post('/update/{id}', [ServiceController::class, 'update'])->name('admin_service_update');
            Route::get('/delete/{id}', [ServiceController::class, 'destroy'])->name('admin_service_delete');
        });

        // Service Image Gallery
        route::prefix('image')->group(function (){
            Route::get('/create/{service_id}', [ImageController::class, 'create'])->name('admin_image_add');
            Route::post('/store/{service_id}', [ImageController::class, 'store'])->name('admin_image_store');
            Route::get('/show', [ImageController::class, 'show'])->name('admin_image_show');
            Route::get('/delete/{id}/{service_id}', [ImageController::class, 'destroy'])->name('admin_image_delete');
        });

        // Messages
        route::prefix('message')->group(function (){
            Route::get('/', [MessageController::class, 'index'])->name('admin_message');
            Route::get('/edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
            Route::post('/update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
            Route::get('/delete/{id}', [MessageController::class, 'destroy'])->name('admin_message_delete');
        });

        // Review
        route::prefix('review')->group(function (){
            Route::get('/', [ReviewController::class, 'index'])->name('admin_review');
            Route::post('/update/{id}', [ReviewController::class, 'update'])->name('admin_review_update');
            Route::get('/delete/{id}', [ReviewController::class, 'destroy'])->name('admin_review_delete');
            Route::get('/show/{id}', [ReviewController::class, 'show'])->name('admin_review_show');
        });

        // Faq
        route::prefix('faq')->group(function (){
            Route::get('/', [FaqController::class, 'index'])->name('admin_faq');
            Route::get('/create', [FaqController::class, 'create'])->name('admin_faq_add');
            Route::post('/store', [FaqController::class, 'store'])->name('admin_faq_store');
            Route::get('/show/{id}', [FaqController::class, 'show'])->name('admin_faq_show');
            Route::get('/edit/{id}', [FaqController::class, 'edit'])->name('admin_faq_edit');
            Route::post('/update/{id}', [FaqController::class, 'update'])->name('admin_faq_update');
            Route::get('/delete/{id}', [FaqController::class, 'destroy'])->name('admin_faq_delete');
        });

        // Settings
        Route::get('setting', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
        Route::post('setting/update', [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

        // Appointment
        route::prefix('appointment')->group(function (){
            Route::get('/', [App\Http\Controllers\Admin\AppointmentController::class, 'index'])->name('admin_appointment');
            Route::post('/create', [App\Http\Controllers\Admin\AppointmentController::class, 'create'])->name('admin_appointment_add');
            Route::post('/store', [App\Http\Controllers\Admin\AppointmentController::class, 'store'])->name('admin_appointment_store');
            Route::get('/show/{id}', [App\Http\Controllers\Admin\AppointmentController::class, 'show'])->name('admin_appointment_show');
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\AppointmentController::class, 'edit'])->name('admin_appointment_edit');
            Route::post('/update/{id}', [App\Http\Controllers\Admin\AppointmentController::class, 'update'])->name('admin_appointment_update');
            Route::get('/delete/{id}', [App\Http\Controllers\Admin\AppointmentController::class, 'destroy'])->name('admin_appointment_delete');
        });

        // User
        route::prefix('user')->group(function (){
            Route::get('/', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_user');
            Route::post('/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin_user_add');
            Route::post('/store', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin_user_store');
            Route::get('/show/{id}', [App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('/update/{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('/delete/{id}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('/userrole/{id}', [App\Http\Controllers\Admin\UserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('/userrolestore/{id}', [App\Http\Controllers\Admin\UserController::class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('/userroledelete/{userid}/{roleid}', [App\Http\Controllers\Admin\UserController::class, 'user_role_delete'])->name('admin_user_role_delete');
        });
    });
});

// User
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){
    Route::get('/', [UserController::class, 'index'])->name('myprofile');
    Route::get('/myreviews', [UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/destroyreview/{id}', [UserController::class, 'destroyreview'])->name('destroyreview');
});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){
    Route::get('/profile', [UserController::class, 'index'])->name('profile');

    // Appointment
    route::prefix('appointment')->group(function (){
        Route::get('/', [AppointmentController::class, 'index'])->name('user_appointment');
        Route::post('/create', [AppointmentController::class, 'create'])->name('user_appointment_add');
        Route::post('/store', [AppointmentController::class, 'store'])->name('user_appointment_store');
    });
});

// Login
Route::get('/admin/login', [HomeController::class, 'admin_login'])->name('admin_login');
Route::get('/login2', [HomeController::class, 'login'])->name('login2');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


