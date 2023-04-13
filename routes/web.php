<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Moderator\ModeratorController;
use App\Http\Controllers\User\UserController;
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
    
    return view('welcome');
})->name('home');

// All user roles have a common middleware
Route::group(['middleware' => ['auth', 'verified']], function () {
    // Admin route group where uri's are admin/dashboard... & routes are route(admin.index)...
    Route::group([
        'controller' => AdminController::class, 
        'middleware' => 'role:admin',
        'name' => 'admin.', 
        'prefix' => 'admin'
    ], function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    // Modderator route group where uri's are modderator/dashboard... & routes are route(modderator.index)...
    Route::group([
        'controller' => ModeratorController::class,
        'middleware' => 'role:moderator',
        'name' => 'moderator.',
        'prefix' => 'moderator'
    ], function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    // User/author route group where uri's are author/dashboard... & routes are route(author.index)...
    Route::group(
        [
        'controller' => UserController::class, 
        'middleware' => 'role:author',
        'name' => 'author.', 
        'prefix' => 'author'
    ], function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Authentication routes
require __DIR__.'/auth.php';
