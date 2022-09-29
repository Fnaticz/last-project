<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
// use App\Http\Controllers\RegisterController;
// use App\Http\Controllers\MitraController;
// use App\Http\Controllers\MitlogController;
// use App\Http\Controllers\MitregController;
// use Illuminate\Support\Facades\Route;


use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;

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


Route::get('/', function () {
    return view('index');
});

Route::get('/coupon', function () {
    return view('coupon');
});

Route::get('/details', function () {
    return view('details');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/dashboard', function () {
	return view('mitra.index');
});







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





Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.delete');

    Route::resource('posts', PostController::class);

    Route::resource('permissions', PermissionController::class);
    Route::resource('roles', RoleController::class);
});


