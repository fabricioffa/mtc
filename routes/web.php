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
    return view('homepage');
})->name('homepage');

Route::name('sms-marketing.')->group(function() {
    Route::get('em-massa', function () {
        return view('em-massa');
    })->name('em-massa');

    Route::get('para-empresa', function () {
        return view('para-empresa');
    })->name('para-empresa');

    Route::get('rotas-sim', function () {
        return view('rotas-sim');
    })->name('rotas-sim');

    Route::get('sem-restricoes', function () {
        return view('sem-restricoes');
    })->name('sem-restricoes');
});

Route::get('apis', function () {
    return view('apis');
})->name('apis');

Route::get('precos', function () {
    return view('precos');
})->name('precos');

Route::get('registo', function () {
    return view('registo');
})->name('registo');

Route::get('registo/mail', function () {
    return view('mails.registo');
});




