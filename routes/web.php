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
    return view('user.user');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard', [
        'active_link' => 'dashboard'
    ]);
})->name('dashboard');

Route::get('/question-data/{category}', function ($category) {
    return view('admin.question-data', [
        'category' => $category,
        'active_link' => $category
    ]);
})->name('question-data');
