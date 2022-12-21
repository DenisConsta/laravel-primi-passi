<?php

use Illuminate\Support\Facades\Route;

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

    $hello = "Ciao";
    $name = "Laravel";
    return view('home', compact('hello', 'name'));
});


Route::get('/contact', function () {

    $title = "Contattaci";
    $emails = [
        'test@gmail.com',
        'contactus@contact.com',
        'blabla@bla.com'
    ];

    return view('contact', compact('title', 'emails'));
});
