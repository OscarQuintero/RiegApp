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
    return view('main');
});

Route::get('/acerca', function () {
    return view('acerca');
});

Route::get('/campesinos', function () {
    return view('campesinos');
});

Route::get('/cultivos', function () {
    return view('cultivos');
});

Route::get("/cultivosdecampesino{id_campesino}", function ($id_campesino = null) {
    return view('cultivos', compact('id_campesino'));
});

Route::get("/cultivodetalle{id_cultivo}", function ($id_cultivo = null) {
    return view('cultivodetalle', compact('id_cultivo'));
});

Route::get('/planesderiego', function () {
    return view('planesderiego');
});

Route::get('/planesderiegodelcultivo{id_cultivo}', function ($id_cultivo = null) {
    return view('planesderiego', compact('id_cultivo'));
});

Route::get('/agregarplanderiego{id_cultivo}', function ($id_cultivo = null) {
    return view('agregarplanderiego', compact('id_cultivo'));
});

Route::get('/algoritmoplanderiego' , function () {
    return view('algoritmoplanderiego');
});
// 


// 

