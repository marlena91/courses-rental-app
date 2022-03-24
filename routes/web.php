<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CourseUserController;

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

Route::resource('/courses', CoursesController::class);
Route::resource('/', CoursesController::class);
Route::resource('/users', UsersController::class);
Route::delete('/courseusers/{courseId}/{userId}', [CourseUserController::class, 'destroy'])->name('remove.course');
Route::post('/courseusers/{courseId}/{userId}', [CourseUserController::class, 'store'])->name('create.course');

Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
