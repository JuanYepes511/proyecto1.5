<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return "HOME PAGE";
});

Route::get('productos', [ProductController::class, 'listProducts' ]);
Route::get('detalle', [ProductController::class, 'detalle' ]);
/* Route::get('productos/create', function () {
    return "AQUI VA A ESTAR EL FORMULARIO DE LA CREACION DE PRODUCTOS";
});
Route::get('productos/{id}', function ($id) {
    return "EL NOMBRE DEL PRODUCTO ES $id";
});
Route::get('productos/{id}/{categoria}', function ($id,$categoria) {
    return "El nombre del productos es $id con la categoria $categoria";
}); */