<?php

use App\Http\Controllers\api\AboutController;
use App\Http\Controllers\api\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//About
Route::get('abouts', [AboutController::class, 'index']);
Route::post('abouts', [AboutController::class, 'store']);
Route::get('abouts/{id}', [AboutController::class, 'show']);
Route::put('abouts/{id}/edit', [AboutController::class, 'update']);
Route::delete('abouts/{id}/delete', [AboutController::class, 'destroy']);
//Contact
Route::get('contacts', [ContactController::class, 'index']);
Route::post('contacts', [ContactController::class, 'store']);
Route::get('contacts/{id}', [ContactController::class, 'show']);
Route::get('contacts/{id}/edit', [ContactController::class, 'edit']);
Route::put('contacts/{id}/edit', [ContactController::class, 'update']);
Route::delete('contacts/{id}/delete', [ContactController::class, 'destroy']);
//Gallery
Route::get('galleries', [GalleryController::class, 'index']);
Route::post('galleries', [GalleryController::class, 'store']);
Route::get('galleries/{id}', [GalleryController::class, 'show']);
Route::get('galleries/{id}/edit', [GalleryController::class, 'edit']);
Route::put('galleries/{id}/edit', [GalleryController::class, 'update']);
Route::delete('galleries/{id}/delete', [GalleryController::class, 'destroy']);
//Service
Route::get('services', [ServiceController::class, 'index']);
Route::post('services', [ServiceController::class, 'store']);
Route::get('services/{id}', [ServiceController::class, 'show']);
Route::get('services/{id}/edit', [ServiceController::class, 'edit']);
Route::put('services/{id}/edit', [ServiceController::class, 'update']);
Route::delete('services/{id}/delete', [ServiceController::class, 'destroy']);
//Project
Route::get('projects', [ProjectController::class, 'index']);
Route::post('projects', [ProjectController::class, 'store']);
Route::get('projects/{id}', [ProjectController::class, 'show']);
Route::get('projects/{id}/edit', [ProjectController::class, 'edit']);
Route::put('projects/{id}/edit', [ProjectController::class, 'update']);
Route::delete('projects/{id}/delete', [ProjectController::class, 'destroy']);
