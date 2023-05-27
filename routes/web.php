<?php

use Illuminate\Support\Facades\Route;

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
    return view('layouts.app');
});

Route::get('/admin/search', function () {
    return view('admin.search');
});

Route::get('/exams', function () {
    return view('user.exams');
});

Route::get('/schedule', function () {
    return view('user.schedule');
});
