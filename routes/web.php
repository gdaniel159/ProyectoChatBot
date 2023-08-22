<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;


Route::middleware(['auth:usuarios'])->group(function () {
    
    // Mostrar la pagina del blog
    Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
    // Cerrar Sesion
    Route::post('/logout', [UsuarioController::class, 'logout'])->name('logout');


});

Route::view('/','index')->name('home');
Route::view('/nosotros','nosotros')->name('nosotros');
Route::view('/terminos_condiciones','terminos_condiciones')->name('terminos_condiciones');
Route::view('/galeria','galeria')->name('galeria');
Route::view('/contacto','contacto')->name('contacto');
// Register
Route::get('/register_form', [UsuarioController::class, 'register_form'])->name('register_form');
Route::post('/register', [UsuarioController::class, 'user_register'])->name('register');
// Login
Route::get('/login_form',[UsuarioController::class, 'iniciar_sesion'])->name('login_form');
Route::post('/login',[UsuarioController::class,'login'])->name('login');
