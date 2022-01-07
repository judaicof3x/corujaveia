<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ThemeController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => 'auth:sanctum', 'prefix' => ''], function() {

    // Altera o tema
    Route::post('dark', [ThemeController::class, 'dark'])->name('theme.dark');
    Route::post('light', [ThemeController::class, 'light'])->name('theme.light');

    // Lista todos os eventos
    Route::get('', [EventController::class, 'index'])->name('event.index');

    // Cadastra um novo evento
    Route::get('cadastrar', [EventController::class, 'create'])->name('event.create');
    Route::post('cadastrar', [EventController::class, 'store'])->name('event.store');

    // Lista todas as galerias do evento
    Route::get('{slug}', [EventController::class, 'show'])->name('event.show');

    // Edita o evento
    Route::get('{slug}/editar', [EventController::class, 'edit'])->name('event.edit');
    Route::put('{slug}/editar', [EventController::class, 'update'])->name('event.update');
    Route::delete('{slug}/editar', [EventController::class, 'destroy'])->name('event.destroy');

    // Vê a galeria do evento
    Route::get('{slug}/{date}', [EventController::class, 'galleryShow'])->name('gallery.show');
});