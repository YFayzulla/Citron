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

//success
//qwert
//client azamat + shoxrux = love

Route::get('/', [IndexController::class,'index'])->name('index');
Route::get('/about', [AboutController::class,'show'])->name('about');
Route::get('/contact',function (){
    return view('contact');
})->name('contact');
Route::get('/project',[ProjectController::class,"show"])->name('project');
Route::get('/service',[ServiceController::class,'show'])->name('service');
Route::get('/galleries',[GalleryController::class, 'show'])->name('gallery');

Route::get('/our team', function () {
    return view('team');
})->name('team');

Route::get('/404 page', function () {
    return view('404');
})->name('404');


//lang

Route::get('/locale/{lang}',[LocalizationController::class,'setLang']);

//Route::resource('contacts',ContactController::class );



//actions
Route::resource('contacts',ContactController::class );

//admin panel

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    //resource
    Route::resource('abouts',AboutController::class);
    Route::resource('projects',ProjectController::class);
    Route::resource('services',ServiceController::class);
    Route::resource('/gallery',GalleryController::class);


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
