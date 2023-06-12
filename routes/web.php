<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
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

//client`s page

Route::get('/',function (){
    return view('layout.app');
});





//lang

//actions

//admin panel

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    //resource
    Route::resource('contacts',ContactController::class );
    Route::resource('abouts',AboutController::class);
    Route::resource('projects',ProjectController::class);
    Route::resource('services',ServiceController::class);
    Route::resource('/gallery',GalleryController::class);


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Route::post('contact/store',[ContactController::class,'store'])->name('contact.store');
//Route::get('/locale/{lang}',[LocalizationController::class,'setLang']);

});

require __DIR__.'/auth.php';
