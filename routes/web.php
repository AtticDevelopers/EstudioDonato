<?php

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
    return view('inicio');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/especialistas', function () {
    return view('especialistas');
});

Route::get('/historia', function () {
    return view('historia');
});

Route::get('/historia/inicio', function () {
    return view('historia-extendida-inicio');
});

Route::get('/historia/evolucion', function () {
    return view('historia-extendida-evolucion');
});

Route::get('/historia/actualidad', function () {
    return view('historia-extendida-hoy');
});