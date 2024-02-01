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

// Ruta para la página de inicio con el nombre 'inicio'
Route::get('/', function () {
    // Devuelve un mensaje indicando que es la página de inicio
    return view('inicio');
})->name('inicio'); // Asigna el nombre 'inicio' a esta ruta

// Ruta para el listado de posts
Route::get('/posts', function () {
    // Cuando se accede a '/posts', esta ruta devuelve la vista llamada 'posts.listado'
    return view('posts.listado');
})->name('posts_listado'); // Se le asigna el nombre 'posts_listado' a esta ruta

// Ruta para la ficha de un post
Route::get('/posts/{id}', function ($id) {
    // Cuando se accede a '/posts/{id}', esta ruta devuelve la vista llamada 'posts.ficha'
    // Se pasa el parámetro 'id' a la vista para que pueda ser utilizado en la vista
    return view('posts.ficha', ['id' => $id]);
})->where('id', '[0-9]+')->name('posts_ficha');
// Se especifica una restricción en el parámetro 'id' para que solo acepte valores numéricos
// Se le asigna el nombre 'posts_ficha' a esta ruta
