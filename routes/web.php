<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
// use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\MitraController;
// use App\Http\Controllers\MitlogController;
// use App\Http\Controllers\MitregController;
// use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PageController;

use App\Http\Controllers\BookingController;

use App\Http\Controllers\DashController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route::get('DB_DATABASE', function () {
    return view('welcome');
});

*/


Route::get('/about', function () {
    return view('welcome');
});

Route::resource('/', PageController::class);
Route::get('/', [PageController::class, 'index']);



Route::get('/coupon', function () {
    return view('coupon');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/dash', function () {
	return view('mitra.dash');
});

Route::get('/timebook', function () {
	return view('book');
});

Route::get('/create', function () {
	return view('bookings.create');
});

// Route::get('/dashtrial', function () {
// 	return view('mitra.dash');
// });

// Route::get('post', [ProductController::class, 'index'])->name('product.index')->middleware('auth');
// Route::post('post', [ProductController::class, 'store'])->name('product.store')->middleware('auth');



Route::group(['middleware' => 'auth'], function() {
    // Route::resources([
    // 'post' => ProductController::class,
    // ]);
    Route::get('/post/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/post', [ProductController::class, 'store'])->name('product.store');
    Route::get('/post', [ProductController::class, 'index'])->name('product.index');
    Route::get('/post/{product}', [ProductController::class, 'show'])->name('product.show');
    Route::get('/post/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/post/{product}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/post/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
    // Route::resource('post', DashController::class)->middleware('auth');

Route::get('/dashboard', [HomeController::class, 'index'])->name('home');
});

// Route::group(['middleware' => ['auth:tamu']], function(){

    Route::resource("/booking", BookingController::class); 
    
// });


// Route::get('/mitlog', [MitlogController::class, 'index'])->name('mitlog')->middleware('guest');
// Route::post('mitlog', [MitlogController::class, 'authenticate']);
// // Route::post()

// Route::get('/mitreg', [MitregController::class, 'index'])->name('mitreg')->middleware('guest');
// Route::post('/mitreg', [MitregController::class, 'store']);

// Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::post('/login', [LoginController::class, 'authenticate']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('logout', 'LoginController@logout')->name('logout');

// Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
// Route::post('/register', [RegisterController::class, 'store']);




    // Route::resource('posts', PostController::class);


// Route::group(['middleware' => 'auth'], function() {
//     Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
//     Route::post('/users', [UserController::class, 'store'])->name('users.store');
//     Route::get('/users', [UserController::class, 'index'])->name('users.index');
//     Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
//     Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
//     Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
//     Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.delete');


//     Route::resource('permissions', PermissionController::class);
//     Route::resource('roles', RoleController::class);
// });


