<?php

use App\Http\Controllers\AdminGestionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    // $user= \App\Models\User::first();
    // dd($user->roles()->where('name','admin')->exists());
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('role:admin')->group(function () {
    Route::resource('livres', LivreController::class);
    Route::resource('cats', CategoryController::class);
    Route::get('/gestion', [AdminGestionController::class, 'user']);

});

Route::resource('User', LivreController::class);



require __DIR__ . '/auth.php';
