<?php

use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProductosController::class,'index'])->name('productos.index');
Route::get('/productos/create',[ProductosController::class,'create'])->name('productos.create');
// enviar datos a la bd
Route::post('/productos/register',[ProductosController::class,'register'])->name('productos.register');
// update
Route::get('/productos/viewupdate/{idproducto}',[ProductosController::class,'viewupdate'])->name('productos.viewupdate');
Route::put('/productos/update/{id}',[ProductosController::class,'update'])->name('productos.update');
// visualizar todos los datos de nota
Route::get('/productos/viewshow/{id}',[ProductosController::class,'viewshow'])->name('producto.viewshow');
// delete
Route::delete('productos/delete/{idproducto}',[ProductosController::class,'delete'])->name('productos.delete');