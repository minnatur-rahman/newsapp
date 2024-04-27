<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home',[HomeController::class, 'Index'])->middleware(['auth', 'admin'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'admin'])->group(function () {

    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin/dashboard','Index')->name('admindashboard');
        // Route::get('/admin/login', 'Login');
    });

    Route::controller(CategoryController::class)->group(function(){
        Route::get('/admin/category','Index')->name('categories');
        Route::post('/admin/category/store','Store')->name('category.store');
        Route::get('/category/delete/{id}','Destroy')->name('category.delete');
    });





});
