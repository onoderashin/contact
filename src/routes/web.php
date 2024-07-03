<?php

use App\Http\Controllers\InquiryController;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'index']);
Route::get('/inquiry', [InquiryController::class, 'showForm'])->name('inquiry.form');
Route::post('/inquiry/confirm', [InquiryController::class, 'confirm'])->name('inquiry.confirm');
Route::post('/inquiry/submit', [InquiryController::class, 'submit'])->name('inquiry.submit');
Route::get('/inquiry/thanks', [InquiryController::class, 'showThanks'])->name('inquiry.thanks');

// Registration and login views
Route::view('/register', 'auth.register')->name('register');
Route::view('/login', 'auth.login')->name('login');

// Fortify registration process
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

// Additional authentication routes
Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);

Route::get('/index', [ContactController::class, 'index']);
Route::get('/confirm', [ContactController::class, 'showConfirmPage']);
Route::get('/thanks', [ContactController::class, 'showThanksPage']);
Route::get('/register', [ContactController::class, 'showRegisterPage']);
// CreateNewUser のルートを追加する
// Login ページのルートを追加する

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
});