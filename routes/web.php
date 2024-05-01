<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SubcategoryController;
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


    // category roue//
    Route::controller(CategoryController::class)->group(function(){
        Route::get('/categories','Index')->name('categories');
        Route::post('/categories/store','Store')->name('category.store');
        Route::get('/categories/delete/{id}','Destroy')->name('category.delete');
        Route::get('/categories/edit/{id}','Edit')->name('category.edit');
        Route::post('/categories/update/{id}','Update')->name('category.update');
    });

    // subcategory route
    Route::controller(SubcategoryController::class)->group(function(){
        Route::get('/subcategory', 'Index')->name('subcategories');
        Route::post('/subcategories/store','Store')->name('subcategory.store');
        Route::get('/subcategories/delete/{id}','Destroy')->name('category.delete');
        Route::get('/subcategories/edit/{id}','Edit')->name('subcategory.edit');
        Route::post('/subcategories/update/{id}','Update')->name('subcategory.update');


    });








});
