<?php

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
Route::get('/cart', [HomeController::class, 'cart']);
Route::get('/checkout', [HomeController::class, 'checkout']);
Route::get('/contact-us', [HomeController::class, 'contact'])->name('contact-us');
Route::get('/about-us', [HomeController::class, 'about'])->name('about-us');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/service/{id}', [HomeController::class, 'service'])->name('service');
Route::get('/services/{id}', [HomeController::class, 'categoryservice'])->name('categoryservice');
Route::get('/addtocart/{id}',[HomeController::class, 'index'])->whereNumber('id')->name('addtocart');



// Admin
Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

    // Category table
    Route::get('category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
    Route::get('category/add', [App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
    Route::post('category/store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin_category_store');
    Route::get('category/show', [App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');
    Route::get('category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
    Route::get('category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');

    // Service Table
    route::prefix('service')->group(function (){
        Route::get('/', [App\Http\Controllers\Admin\ServiceController::class, 'index'])->name('admin_service');
        Route::get('/create', [App\Http\Controllers\Admin\ServiceController::class, 'create'])->name('admin_service_add');
        Route::post('/store', [App\Http\Controllers\Admin\ServiceController::class, 'store'])->name('admin_service_store');
        Route::get('/show/{id}', [App\Http\Controllers\Admin\ServiceController::class, 'show'])->name('admin_service_show');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\ServiceController::class, 'edit'])->name('admin_service_edit');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\ServiceController::class, 'update'])->name('admin_service_update');
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\ServiceController::class, 'destroy'])->name('admin_service_delete');
    });

    // Service Image Gallery
    route::prefix('image')->group(function (){
        Route::get('/create/{service_id}', [App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
        Route::post('/store/{service_id}', [App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
        Route::get('/show', [App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
        Route::get('/delete/{id}/{service_id}', [App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
    });

    // Settings
    Route::get('setting', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

    // Messages
    route::prefix('message')->group(function (){
        Route::get('/', [App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_delete');
    });
});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){
    Route::get('/', [UserController::class, 'index'])->name('myprofile');
});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function (){
    Route::get('/profile', [UserController::class, 'index'])->name('profile');
});


Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('admin_logout');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


