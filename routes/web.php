<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\MitlogController;
use App\Http\Controllers\MitregController;
// use Illuminate\Support\Facades\Route;

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

Route::get('/mitra/dashboard', function () {
	return view('mitra.index');
});







Route::get('/mitlog', [MitlogController::class, 'index'])->name('mitlog')->middleware('guest');
Route::post('mitlog', [MitlogController::class, 'authenticate']);
// Route::post()

Route::get('/mitreg', [MitregController::class, 'index'])->name('mitreg')->middleware('guest');
Route::post('/mitreg', [MitregController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);





// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::group(['middleware' => 'auth'], function() {
//     Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
//     Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
//     Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
//     Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
//     Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
//     Route::put('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
//     Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.delete');

//     Route::resource('posts', App\Http\Controllers\PostController::class);

//     Route::resource('permissions', App\Http\Controllers\PermissionController::class);
//     Route::resource('roles', App\Http\Controllers\RoleController::class);
// });


