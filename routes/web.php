<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index']);
Route::get('/a-propos', [PagesController::class, 'apropos']);
Route::get('/nos-formations', [PagesController::class, 'nosformations']);
Route::get('/blog', [PagesController::class, 'blog']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::post('/contact/store', [ContactController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('/dashboard')->group(function(){

    /** Niveau de formation */
    Route::get('/niveaux', [NiveauController::class, 'index'])->name('niveau.index');
    
    /** Catégorie de formation */
    Route::get('/categories', [CategorieController::class, 'index'])->name('categorie.index');
    Route::post('/categorie/store', [CategorieController::class, 'store'])->name('categorie.store');
    Route::get('/categorie/{id}/show', [CategorieController::class, 'show'])->name('categorie.show');
    Route::post('/categorie/update', [CategorieController::class, 'update'])->name('categorie.update');
    Route::get('/categorie/{id}/destroy', [CategorieController::class, 'destroy'])->name('categorie.destroy');

})->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
