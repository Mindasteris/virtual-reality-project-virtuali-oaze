<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index');
Route::view('/virtuali-realybe', 'virtualReality')->name('vr');
Route::view('/apie-mus', 'about')->name('aboutUs');

// Atsiliepimai
route::resource('atsiliepimai', CommentsController::class);

// Kontaktai
Route::get('/kontaktai', [ContactController::class, 'index'])->name('contact.index');
Route::post('/kontaktai', [ContactController::class, 'store'])->name('contact.store');

Auth::routes();
Route::get('/profilis', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/atsijungti', function() {
    Auth::logout();
    Session::flush();
    return redirect('login');
});