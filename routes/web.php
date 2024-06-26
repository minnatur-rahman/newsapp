<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DistrictController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\SubcategoryController;
use App\Http\Controllers\Backend\SubdistrictController;
use App\Http\Controllers\frontend\ExtraController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/home',[HomeController::class, 'Index'])->middleware(['auth', 'admin'])->name('home');

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
        Route::get('/admin/login', 'Login');
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

    //___Posts Routes___//
    Route::controller(PostController::class)->group(function(){
        Route::get('/create/post', 'Create')->name('create.post');
        Route::post('/post/store', 'Store')->name('post.store');
        //___Json Data__//
        Route::get('/get/subcat/{cat_id}', 'GetSubCat');
        Route::get('/get/subdist/{dist_id}', 'GetSubDist');
        Route::get('/all/post', 'Index')->name('all.post');
        Route::get('/post/delete/{id}', 'Destroy');
        Route::get('/post/edit/{id}','Edit')->name('post.edit');
        Route::post('/post/update/{id}','Update')->name('post.update');
    });


    //___setting__//
    Route::controller(SettingController::class)->group(function(){
        //___socials setting___//
        Route::get('/social/setting','SocialSetting')->name('social.setting');
        Route::post('/social/update/{id}','SocialUpdate')->name('social.update');
       //___SEO setting___//
       Route::get('/seo/setting','SeoSetting')->name('seo.setting');
       Route::post('/seo/update/{id}','SeoUpdate')->name('seo.update');
       //___Namaz setting___//
       Route::get('/namaz/setting','NamazSetting')->name('namaz.setting');
       Route::post('/namaz/update/{id}','NamazUpdate')->name('namaz.update');
       //___Live Tv setting___//
       Route::get('/livetv/setting','LiveTVSetting')->name('livetv.setting');
       Route::post('/livetv/update/{id}','LiveTvUpdate')->name('livetv.update');
       Route::get('/livetv/deactive/{id}','LiveTVDeActive')->name('livetv.deactive');
       Route::get('/livetv/active/{id}','LiveTVActive')->name('livetv.active');
       //___Notice setting___//
       Route::get('/notice/setting','NoticeSetting')->name('notice.setting');
       Route::post('/notice/update/{id}','NoticeUpdate')->name('notice.update');
       Route::get('/notice/deactive/{id}','NoticeDeActive')->name('notice.deactive');
       Route::get('/notice/active/{id}','NoticeActive')->name('notice.active');
       //___Important Website___//
       Route::get('/important/website','ImportantWebsite')->name('important.website');
       Route::post('/website/store','WebsiteStore')->name('website.store');
       Route::get('/website/edit/{id}','WebsiteEdit')->name('website.edit');
       Route::post('/website/update/{id}','WebsiteUpdate')->name('website.update');
    });

    Route::controller(GalleryController::class)->group(function(){
      //___Photo Gallery___//
      Route::get('/photo/gallery','PhotoGallery')->name('photos.gallery');
      Route::post('/photo/store','PhotoStore')->name('photo.store');
      Route::get('/photo/edit/{id}','PhotoEdit')->name('photo.edit');
      Route::post('/photo/update/{id}','PhotoUpdate')->name('photo.update');
      Route::get('/photo/delete/{id}', 'PhotoDestroy');
      //___video Gallery___//
      Route::get('/video/gallery','VideoGallery')->name('video.gallery');
      Route::post('/video/store','VideoStore')->name('video.store');
      Route::get('/video/edit/{id}','VideoEdit')->name('video.edit');
      Route::post('/video/update/{id}','VideoUpdate')->name('video.update');
    });

});


//___Extra Routes___//
Route::controller(ExtraController::class)->group(function(){
    Route::get('/lang/english','LangEnglish')->name('lang.english');
    Route::get('/lang/bangla','LangBangla')->name('lang.bangla');

});
