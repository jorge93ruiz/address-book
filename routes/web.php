<?php

use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::delete('/contacts/{contact}', [ContactsController::class, 'destroy'])->name('contacts.destroy');

Route::get('/add_contact', [ContactsController::class, 'add_form'])->name('add_contact');
Route::post('/add_contact', [ContactsController::class, 'store']);
