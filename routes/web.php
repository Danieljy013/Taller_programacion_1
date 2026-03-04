<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PqrsController;
use App\Models\Pqrs;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/admin/pqrs', function () {
    $pqrs = Pqrs::orderBy('created_at', 'desc')->get();
    return view('adminpqrs', compact('pqrs'));
})->name('admin.pqrs');

Route::post('/pqrs', [PqrsController::class, 'store'])->name('pqrs.store');