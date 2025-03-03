<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SendersIdController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();




Route::middleware(['auth'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/profile', [ProfilController::class, 'show'])->name('profile.show');
    Route::put('/profile', [ProfilController::class, 'updateProfile'])->name('profile.update');
    Route::put('/profile/change-password', [ProfilController::class, 'updatePassword'])->name('profile.password.update');
    Route::post('/profile/logout-other-sessions', [ProfilController::class, 'logoutOtherSessions'])->name('logout.other.sessions');
    Route::delete('/profile/delete-account', [ProfilController::class, 'deleteAccount'])->name('account.delete');
    Route::post('/user/update-image', [ProfilController::class, 'updateImage'])->name('user.updateImage');
});

Route::resource('senders-ids', SendersIdController::class);
