<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\ProjectsController;
use App\Http\Controllers\Admin\D_ProjectsController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\Admin\WordsController;


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
Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::get('dashboard', [MainController::class, 'dashboard'])->name('dashboard');
    Route::resource('projects',   ProjectsController::class);
    Route::resource('d_projects',   D_ProjectsController::class);
    Route::resource('posts',   PostsController::class);
    Route::resource('words',   WordsController::class);
    Route::post('/post-image-upload',[PostsController::class,'upload'])->name('upload');
    Route::post('/words-image-upload',[PostsController::class,'word'])->name('word');

});
Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profiles', [ProfileController::class, 'update'])->name('update');
    Route::delete('/profiless', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
