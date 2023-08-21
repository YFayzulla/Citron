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

//
//Route::get('/service',function (){
//    return view('service');
//})->name('service');

//Route::get('/project',function (){
//    return view('project');
//})->name('project');
//
//Route::get('/service',function (){
//    return view('service');
//})->name('service');

//over


Route::get('/service', [ServiceController::class, 'show'])->name('service');
Route::get('/Portfolio', [GalleryController::class, 'show'])->name('gallery');
Route::get('/about', [AboutController::class, 'show'])->name('about');
Route::get('/project', [ProjectController::class, 'show'])->name('project');
Route::get('/', [IndexController::class, 'index'])->name('home');


//lang

//actions
Route::get('store', [IndexController::class, 'contact'])->name('contact');
Route::post('store/store', [IndexController::class, 'store'])->name('contact.store');

//admin panel

//Route::get('/dashboard', function () {
//    return view('admin.dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/locale/{lang}', [LocalizationController::class, 'setLang']);


Route::middleware('auth')->group(function () {
    //resource
    Route::resource('contacts', ContactController::class);
    Route::resource('abouts', AboutController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('/gallery', GalleryController::class);
//    extra
    Route::get('/add_user/{id}', [IndexController::class, 'project_add_user'])->name('add_user');
    Route::get('/create_user/{id}', [IndexController::class, 'project_create_user'])->name('create_user');
    Route::post('/save/user', [IndexController::class, 'project_save_user'])->name('save_user');
    Route::delete('/user/delete/{id}', [IndexController::class, 'delete'])->name('delete.user');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__ . '/auth.php';

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
