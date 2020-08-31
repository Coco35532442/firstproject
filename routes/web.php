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

Route::get('/hello-world', function () {
    return 'hello world';
});

Route::get('/user/{id}', function ($id) {
    return 'user_id:'.$id;
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin', function () {
    return view('admin/home');
})->name('dashboard');

Route::get('/admin/tables', function () {
    return view('admin/tables');
})->name('tables');

Route::get('/admin/charts', function () {
    return view('admin/charts');
})->name('charts');
