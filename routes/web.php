<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DistrictController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\SubcategoryController;
use App\Http\Controllers\Backend\SubdistrictController;
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


    //___category roue___//
    Route::controller(CategoryController::class)->group(function(){
        Route::get('/categories','Index')->name('categories');
        Route::post('/categories/store','Store')->name('category.store');
        Route::get('/categories/delete/{id}','Destroy')->name('category.delete');
        Route::get('/categories/edit/{id}','Edit')->name('category.edit');
        Route::post('/categories/update/{id}','Update')->name('category.update');
    });

    //___subcategory route___//
    Route::controller(SubcategoryController::class)->group(function(){
        Route::get('/subcategory', 'Index')->name('subcategories');
        Route::post('/subcategories/store','Store')->name('subcategory.store');
        Route::get('/subcategories/delete/{id}','Destroy')->name('category.delete');
        Route::get('/subcategories/edit/{id}','Edit')->name('subcategory.edit');
        Route::post('/subcategories/update/{id}','Update')->name('subcategory.update');
    });

    //___District Route___//
    Route::controller(DistrictController::class)->group(function(){
        Route::get('/districts', 'Index')->name('districts');
        Route::post('/district/store','Store')->name('district.store');
        Route::get('/districts/delete/{id}','Destroy');
        Route::get('/districts/edit/{id}','EditDistrict')->name('district.edit');
        Route::post('/districts/update/{id}','Update')->name('district.update');
    });

    //___Subdistrict Route___//
    Route::controller(SubdistrictController::class)->group(function(){
        Route::get('/subdistrict', 'Index')->name('subdistricts');
        Route::post('/subdistricts/store','SubdistrictStore')->name('subdistrict.store');
        Route::get('/subdistricts/delete/{id}','Destroy');
        Route::get('/subdistricts/edit/{id}','Edit')->name('subdistrict.edit');
        Route::post('/subdistricts/update/{id}','Update')->name('subdistrict.update');

    });


});



    //___Posts Routes___//
    Route::controller(PostController::class)->group(function(){
        Route::get('/create/post', 'Create')->name('create.post');
        //___Json Data__//
        Route::get('get/subcat/{cat_id}', 'GetSubCat');

    });
