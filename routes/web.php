<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SendersIdController;
use App\Http\Controllers\HistoriqueController;

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
Route::resource('devices', DeviceController::class);
Route::resource('token', TokenController::class);
Route::resource('historiques', HistoriqueController::class);
Route::resource('dashboard', DashboardController::class);

Route::get('/historique/search', [HistoriqueController::class, 'search'])->name('historique.search');



