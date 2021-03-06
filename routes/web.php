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

Route::get('/', '\App\Http\Controllers\DashboardController@home')->name('home');
Route::get('/dashboard', '\App\Http\Controllers\DashboardController@showDashboard')->middleware(['auth'])->name('dashboard');
Route::post('/timeline', '\App\Http\Controllers\DashboardController@createPost');
Route::get('/user', function () {
    return view('user');
});
Route::post('/posts/{post}/like', [App\Http\Controllers\PostController::class, 'like'])->name('posts.like');
Route::post('/photos/{photo}/like', [App\Http\Controllers\PhotoController::class, 'like'])->name('photos.like');
Route::get('/user-info/{id}', '\App\Http\Controllers\DashboardController@showUser')->middleware(['auth'])->name('user-info');

Route::get('/timeline', '\App\Http\Controllers\DashboardController@index')->name('timeline');
Route::post('/comments', '\App\Http\Controllers\CommentController@store')->name('comments.store');
Route::get('/legalmentions', function () {
    return view('legalmentions');
});


require __DIR__.'/auth.php';
