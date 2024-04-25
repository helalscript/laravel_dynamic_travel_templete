<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TravelaController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackendController;


Route::middleware('auth:sanctum')->prefix('admin')->group(function(){
    Route::resource('users',UserController::class)->names('users');
// Route::get('/contact',[TravelaController::class,'contact'])->name('contact');
// Route::get('/subscribe',[TravelaController::class,'subscribe'])->name('subscribe');
// Route::get('/testimonial',[TravelaController::class,'testimonial'])->name('testimonial');
// Route::get('/blog',[TravelaController::class,'blog'])->name('blog');
// Route::get('/guide',[TravelaController::class,'guide'])->name('guide');
// Route::get('/gallery',[TravelaController::class,'gallery'])->name('gallery');
// Route::get('/booking',[TravelaController::class,'booking'])->name('booking');
// Route::get('/package',[TravelaController::class,'package'])->name('package');
// Route::get('/tour',[TravelaController::class,'tour'])->name('tour');
// Route::get('/destination',[TravelaController::class,'destination'])->name('destination');
// Route::get('/services',[TravelaController::class,'service'])->name('service');
//Route::get('/about',[TravelaController::class,'about'])->name('about');

//Route::resource('aboutrk',AboutController::class)->names('abt');

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('login',[BackendController::class,'index']);
Route::post('login',[LoginController::class,'login']);
Route::post('logout',[LoginController::class,'logout'])->middleware('auth:sanctum');
