<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StudentController;

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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/news', 'news')->name('news');
    Route::get('/staff', 'staff')->name('staff');
    Route::get('/vision', 'vision')->name('vision');
    Route::get('/news/{post:slug}', 'showNews')->name('news.show');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login-admin', 'index')->name('login')->middleware('guest');
    Route::post('/login-admin', 'authenticate')->name('login.auth')->middleware('guest');
    Route::post('/logout-admin', 'logout')->name('logout.auth')->middleware('auth');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register-admin', 'index')->name('register.view');
    Route::post('/register-admin', 'store')->name('register.auth');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::controller(PostController::class)->middleware('auth')->group(function () {
    Route::get('/dashboard/post', 'index')->name('post.index');
    Route::get('/dashboard/post/create', 'create')->name('post.create');
    Route::get('/dashboard/post/edit/{post:slug}', 'edit')->name('post.edit');
    Route::post('/dashboard/post', 'store')->name('post.store');
    Route::put('/dashboard/post/edit/{post:slug}', 'update')->name('post.update');
    Route::delete('/dashboard/post/delete/{post}', 'destroy')->name('post.delete');
});

Route::controller(StaffController::class)->middleware('auth')->group(function () {
    Route::get('/dashboard/staff', 'index')->name('staff.index');
    Route::get('/dashboard/staff/create', 'create')->name('staff.create');
    Route::get('/dashboard/staff/edit/{staff}', 'edit')->name('staff.edit');
    Route::post('/dashboard/staff', 'store')->name('staff.store');
    Route::put('/dashboard/staff/edit/{staff}', 'update')->name('staff.update');
    Route::delete('/dashboard/staff/delete/{staff}', 'destroy')->name('staff.delete');
});

Route::controller(StudentController::class)->middleware('auth')->group(function () {
    Route::get('/dashboard/student', 'index')->name('student.index');
    Route::get('/dashboard/student/create', 'create')->name('student.create');
    Route::get('/dashboard/student/edit/{student:nis}', 'edit')->name('student.edit');
    Route::post('/dashboard/student', 'store')->name('student.store');
    Route::put('/dashboard/student/edit/{student:nis}', 'update')->name('student.update');
    Route::delete('/dashboard/student/delete/{student:nis}', 'destroy')->name('student.delete');
});
