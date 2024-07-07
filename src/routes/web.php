<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

Route::view('/register', 'auth.register')->name('register');
Route::view('/login', 'auth.login')->name('login');

Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');

Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);

Route::get('/index', [ContactController::class, 'index']);
Route::get('/confirm', [ContactController::class, 'showConfirmPage']);
Route::get('/thanks', [ContactController::class, 'showThanksPage']);
Route::get('/register', [ContactController::class, 'showRegisterPage']);
Route::get('/', function () {
    return view('welcome');
});