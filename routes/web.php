<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/admin/dashBord/book/home' ,  [App\Http\Controllers\StudentController::class , 'index'])->name('admin.home');
Route::get('/admin/dashBord/book/create' ,[App\Http\Controllers\StudentController::class , 'create'])->name('admin.create');
Route::post('/admin/dashBord/book/store' ,[App\Http\Controllers\StudentController::class , 'store'])->name('admin.store');



Route::get('admin/dashBord/book/edit', function () {
    return view('dashBordStudent.edit');
});