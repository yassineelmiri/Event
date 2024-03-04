<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicationController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('home');

Route::post('/publications/ajouter', [PublicationController::class, 'store'])->name('ajouter');
Route::get('/package', [AuthController::class, 'afficher'])->name('afficher');
Route::get('/packag{publication}e', [AuthController::class, 'show'])->name('show.publications');
Route::get('/reservati{publication}on', [AuthController::class, 'detail'])->name('show.reservation');

Route::resource('profiles', ProfileController::class);
Route::resource('publications', PublicationController::class);

Route::get('/login', [AuthController::class, 'show'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/lagout', [AuthController::class, 'logout'])->name('login.logout');
Route::get('/Forgot-password', [AuthController::class, 'Forgot'])->name('Forgot');
Route::post('/Forgot-password', [AuthController::class, 'ForgotPost'])->name('Forgot.Post');


Route::get('/Login',[AuthController::class,'index'])->name('login.show');
