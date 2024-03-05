<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\SadminController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
})->name('home');

Route::resource('publications', PublicationController::class);
Route::post('/publications/ajouter', [PublicationController::class, 'store'])->name('ajouter');

Route::get('/utilisateur', [SadminController::class, 'utilisateur'])->name('admin.utilisateur');
Route::resource('admin', AdminController::class);
Route::resource('profiles', ProfileController::class);



Route::get('/package', [AuthController::class, 'afficher'])->name('afficher');
Route::get('/packag{publication}e', [AuthController::class, 'show'])->name('show.publications');
Route::get('/reservati{publication}on', [AuthController::class, 'detail'])->name('show.reservation');
Route::get('/login', [AuthController::class, 'show'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/lagout', [AuthController::class, 'logout'])->name('login.logout');
Route::get('/Forgot-password', [AuthController::class, 'Forgot'])->name('Forgot');
Route::post('/Forgot-password', [AuthController::class, 'ForgotPost'])->name('Forgot.Post');
Route::get('/reset-password{token}', [AuthController::class, 'ResetPassword'])->name('reset.password');
Route::post('/reset-password', [AuthController::class, 'ResetPasswordPost'])->name('reset.password.post');
Route::get('/Login',[AuthController::class,'index'])->name('login.show');
