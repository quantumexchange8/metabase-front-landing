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

Route::get('locale/{lang}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('company', function () {
    return view('company');
})->name('company');

Route::get('partnership', function () {
    return view('partnership');
})->name('partnership');

Route::get('trading', function () {
    return view('trading');
})->name('trading');

Route::get('support', function () {
    return view('support');
})->name('support');

Route::get('privacy-policy', function() {
    return view('privacy_policy');
})->name('privacy_policy ');