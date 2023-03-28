<?php

use App\Http\Controllers\AdminGestionController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\cloudinary;
use App\Http\Controllers\favorieController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\messageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LikeController;
use App\Http\Livewire\SearchLivres;
use App\Http\Livewire\Catalog;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
    $users = App\Models\user::with('Roles')->where('id',Auth::user()->id)->get();
    return view('dashboard')->with('users', $users);;
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');

//     Route::get('/sessions', function () {
//         return view('sessions', [
//             'sessions' => DB::table('sessions')->get(),
//         ]);
//     })->name('sessions');
// });












Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('role:admin')->group(function () {
    Route::resource('livres', LivreController::class);
    Route::resource('cats', CategoryController::class);
    Route::get('/gestion', [AdminGestionController::class, 'user'])->name('gestion');;
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [UserController::class, 'index'])->name('/home');
    Route::get('users/like/{id}', [LikeController::class, 'store'])->name('users/like');
    Route::get('users/show/{id}', [UserController::class, 'show'])->name('users/show');
    Route::get('users/search/{search}', [UserController::class, 'search'])->name('users/search');

    Route::get('users/favorie', [favorieController::class, 'index'])->name('users/favorie');
    Route::get('users/addFavorie/{id}', [favorieController::class, 'addFavorie'])->name('users/addFavorie');



    Route::get('/show/{id}', [GroupeController::class, 'show'])->name('groupe');
    Route::get('/groupes', [GroupeController::class, 'index'])->name('groupes');
    Route::post('/addgroupe', [GroupeController::class, 'addGroupe'])->name('/addgroupe');
    Route::get('joinGroupe/{id}', [GroupeController::class, 'joinGroupe'])->name('joinGroupe');
    Route::post('/groupe/{id}/message', [messageController::class, 'store'])->name('message.store');






    Route::get('Livewire', [Catalog::class, 'render'])->name('Livewire');

});

Route::get('signature', [cloudinary::class, 'getsignature']);



require __DIR__ . '/auth.php';
