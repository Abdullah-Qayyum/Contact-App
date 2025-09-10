<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

//  Redirect dashboard to contacts
Route::get('/dashboard', function () {
    return redirect('/contacts');
})->middleware(['auth', 'verified'])->name('dashboard');

//  Protect these routes with auth middleware
Route::middleware('auth')->group(function () {
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Contact routes (CRUD)
    Route::resource('contacts', ContactController::class);
});

require __DIR__.'/auth.php';


Route::middleware('auth')->group(function () {
    Route::resource('contacts', ContactController::class);
});
