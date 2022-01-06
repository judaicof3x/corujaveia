<?php

use App\Http\Controllers\PhotosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'auth:sanctum', 'verified'], function () {
    Route::get('', [PhotosController::class, 'view'])->name('dashboard');
    
    Route::get('upload', [PhotosController::class, 'index'])->name('photos.index');
    Route::post('upload', [PhotosController::class, 'store'])->name('photos.store');
    Route::delete('{photo}', [PhotosController::class, 'destroy'])->name('photos.destroy');
});