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

//Lo que este adentro de esto exige que el usuario este loggeado y sea ADMIN
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/search', function () {
        return view('admin.search');
    });
});

//Lo que este adentro de esto exige que el usuario este loggeado y sea USER
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/exams', function () {
        return view('user.exams');
    });
});

Route::get('/schedule', function () {
    return view('user.schedule');
});

Route::get('/test', 'App\Http\Controllers\TestController@index')->name('index');

Auth::routes();