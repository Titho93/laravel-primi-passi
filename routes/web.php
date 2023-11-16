<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $name = 'Anakin';
    $lastname = 'Skywalker';
    return view('home', compact('name', 'lastname'));
});

Route::get('/contact', function () {
    $telephone_number = '0000505050000';
    $address = 'via la morte nera 2';
    return view('contact', compact('telephone_number', 'address'));
});
