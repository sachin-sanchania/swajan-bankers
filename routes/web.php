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
    return view('home');
});
Route::group(['prefix' => '', 'name' => 'front.', 'as' => 'front.'], function () {
    Route::get('/', \App\Livewire\Home::class)->name('index');
    Route::get('/about-us', \App\Livewire\AboutUs::class)->name('about-us');
    Route::get('/contact-us', \App\Livewire\ContactUs::class)->name('contact-us');
    Route::get('/schedule-visit', \App\Livewire\ScheduleVisit::class)->name('schedule-visit');
    Route::get('/gallery', \App\Livewire\Gallery::class)->name('gallery');
    Route::get('/facilities', \App\Livewire\Facilities::class)->name('facilities');
    Route::get('/faq', \App\Livewire\Faq::class)->name('faq');
    Route::get('/events', \App\Livewire\Events::class)->name('events');
    Route::get('/luxury-living/villa', \App\Livewire\Villa::class)->name('villa');
    Route::get('/luxury-living/apartment', \App\Livewire\Apartment::class)->name('apartment');
});
Route::get('/clear-cache', function () {
    $clearcache = \Illuminate\Support\Facades\Artisan::call('cache:clear');
    echo "Cache cleared<br>";

    $clearview = \Illuminate\Support\Facades\Artisan::call('view:clear');
    echo "View cleared<br>";

    $clearconfig = \Illuminate\Support\Facades\Artisan::call('config:clear');
    echo "Config cleared<br>";

    $clearroute = \Illuminate\Support\Facades\Artisan::call('route:clear');
    echo "Route cleared<br>";
});
