<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PqrsController;
use App\Models\Pqrs;
use App\Http\Controllers\ContactController;
use App\Models\Contacto;


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

Route::get('/admin', function () {

    $pqrs = Pqrs::orderBy('id', 'asc')->get();
    $contactos = Contacto::orderBy('id', 'asc')->get();

    return view('adminpqrs', compact('pqrs','contactos'));

})->name('admin');


Route::delete('/admin/pqrs/{id}', function ($id) {
    $pqrs = Pqrs::findOrFail($id);
    $pqrs->delete();

    return redirect()->route('admin');
})->name('pqrs.delete');

Route::delete('/admin/contacto/{id}', function ($id) {
    $contacto = Contacto::findOrFail($id);
    $contacto->delete();

    return redirect()->route('admin');
})->name('contacto.delete');

Route::post('/pqrs', [PqrsController::class, 'store'])->name('pqrs.store');
Route::post('/contacto', [ContactController::class, 'store'])->name('contacto.store');
