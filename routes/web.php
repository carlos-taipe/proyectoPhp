<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

Route::get('/', HomeController::class)->name('home');

Route::resource('productos', ProductoController::class);

Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('contactanos', function () {

    $correo = new ContactanosMailable;
    Mail::to('ctaipecasas@gmail.com')->send($correo);

    return 'mensaje enviado';
});