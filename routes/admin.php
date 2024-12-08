<?php

use Illuminate\Support\Facades\Route;



Route::group(['namespace' => 'Admin', 'as' => 'admin.'], function () {
    /*authentication*/

    Route::get('login', [\App\Http\Controllers\Admin\LoginController::class,'login'])->name('login');
    Route::get('forgot-password', 'LoginController@forgotPassword')->name('forgotPassword');
    Route::post('login-submit', [\App\Http\Controllers\Admin\LoginController::class,'loginSubmit'])->name('login-submit');
    Route::post('forgot-submit', 'LoginController@forgotSubmit');
    Route::get('/r/{key?}', 'LoginController@resetPassword')->name('reset-password');
    Route::post('reset-password-submit', 'LoginController@resetPasswordSubmit')->name('reset-password-submit');

    /*authentication*/
    Route::group(['middleware' => ['admin']], function () {
        Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class,'index'])->name('dashboard');
        Route::get('logout', [\App\Http\Controllers\Admin\LoginController::class,'logout'])->name('logout');

        Route::prefix('testimonial')->name('testimonial.')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\TestimonialController::class,'index'])->name('index');
            Route::get('/create', [\App\Http\Controllers\Admin\TestimonialController::class,'create'])->name('create');
            Route::post('/store', [\App\Http\Controllers\Admin\TestimonialController::class,'store'])->name('store');
            Route::get('/edit/{id}', [\App\Http\Controllers\Admin\TestimonialController::class,'edit'])->name('edit');
            Route::post('/update/{id}', [\App\Http\Controllers\Admin\TestimonialController::class,'update'])->name('update');
            Route::post('/delete', [\App\Http\Controllers\Admin\TestimonialController::class,'delete'])->name('delete');
            Route::post('/delete-image', [\App\Http\Controllers\Admin\TestimonialController::class,'deleteImage'])->name('delete-image');
        });

        Route::prefix('events')->name('events.')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\EventsController::class,'index'])->name('index');
            Route::get('/create', [\App\Http\Controllers\Admin\EventsController::class,'create'])->name('create');
            Route::post('/store', [\App\Http\Controllers\Admin\EventsController::class,'store'])->name('store');
            Route::get('/edit/{id}', [\App\Http\Controllers\Admin\EventsController::class,'edit'])->name('edit');
            Route::post('/update/{id}', [\App\Http\Controllers\Admin\EventsController::class,'update'])->name('update');
            Route::post('/delete', [\App\Http\Controllers\Admin\EventsController::class,'delete'])->name('delete');
            Route::post('/delete-image', [\App\Http\Controllers\Admin\EventsController::class,'deleteImage'])->name('delete-image');
            Route::post('/change-status', [\App\Http\Controllers\Admin\EventsController::class,'changeStatus'])->name('change-status');
        });

        Route::prefix('gallery')->name('gallery.')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\GalleryController::class,'index'])->name('index');
            Route::get('/create', [\App\Http\Controllers\Admin\GalleryController::class,'create'])->name('create');
            Route::post('/store', [\App\Http\Controllers\Admin\GalleryController::class,'store'])->name('store');
            Route::get('/edit/{id}', [\App\Http\Controllers\Admin\GalleryController::class,'edit'])->name('edit');
            Route::post('/update/{id}', [\App\Http\Controllers\Admin\GalleryController::class,'update'])->name('update');
            Route::post('/delete', [\App\Http\Controllers\Admin\GalleryController::class,'delete'])->name('delete');
            Route::post('/delete-image', [\App\Http\Controllers\Admin\GalleryController::class,'deleteImage'])->name('delete-image');
            Route::post('/change-status', [\App\Http\Controllers\Admin\GalleryController::class,'changeStatus'])->name('change-status');
        });

        Route::prefix('settings')->name('settings.')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\SettingsController::class,'index'])->name('index');
            Route::get('/change-password', [\App\Http\Controllers\Admin\SettingsController::class,'changePassword'])->name('change-password');
            Route::post('/update', [\App\Http\Controllers\Admin\SettingsController::class,'update'])->name('update');
            Route::post('/change-password/update', [\App\Http\Controllers\Admin\SettingsController::class,'updatePassword'])->name('updatePassword');
        });
    });
});

