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

// homepage //
Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');});

// webshop page //
Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {Route::get('/webshop', function () {return view('webshop');})->name('webshop');});

// request page //
Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->group(function () {Route::get('/requestPage', function () {return view('requestPage');})->name('requestPage');});
