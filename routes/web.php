<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\PostController;
use Illuminate\Support\Facades\Route;

/*
    Notes:
        migrate wordweaver
        edit uri
        create buttons components
        better table
        better card
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

// All user roles have a common middleware
Route::group(['middleware' => ['auth', 'verified']], function () {
    // Admin route group where uri's are admin/dashboard... & routes are route(admin.index)...
    Route::group([
        'controller' => AdminController::class, 
        'name' => 'admin.', 
        'prefix' => 'admin'
    ], function () {
        Route::get('/dashboard', 'index')->name('admin.dashboard');
        Route::get('/users', 'user_list')->name('admin.users');
        Route::get('/posts', 'post_list')->name('admin.posts');
    });

    // User/author route group where uri's are author/dashboard... & routes are route(author.index)...
    Route::group([
        'controller' => PostController::class, 
        'name' => 'author.', 
        'prefix' => 'author'
    ], function () {
        Route::get('/dashboard', 'index')->name('author.dashboard');
        Route::get('/posts/create', 'create')->name('author.create');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication routes
require __DIR__.'/auth.php';
