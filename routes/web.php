<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\isAdmin;    

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
Route::get('/blog',[UserController::class, 'index'])->name('blogs');
Route::get('/blog/{code}',[UserController::class, 'show'])->name('blog.show');

Route::get('/admin/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [LoginController::class, 'login']);
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/', [AdminController::class, 'viewadmin'])->name('admin-dashboard');
    Route::get('/create', [AdminController::class, 'create'])->name('form');
    Route::post('/store', [AdminController::class, 'store'])->name('blog-store');
    Route::get('/blog', [AdminController::class, 'index'])->name('blogindex');
    Route::get('/blog/{code}', [AdminController::class, 'show'])->name('showblog');
    Route::get('/blog/{code}/edit', [AdminController::class, 'edit'])->name('blog-edit');
    Route::put('/blog/{code}', [AdminController::class, 'update'])->name('blog-update');
    Route::delete('/blog/{code}', [AdminController::class, 'destroy'])->name('blog-delete');
});