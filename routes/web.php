<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

use App\Models\Todo;

Route::get('/',[TodosController::class,'index'])->name('todo.index');
Route::get('/create',[TodosController::class,'create'])->name('todo.create');
Route::get('/edit/{id}',[TodosController::class,'edit'])->name('todo.edit');
Route::put('/update/{id}',[TodosController::class,'update'])->name('todo.update');
Route::post('/store',[TodosController::class,'store'])->name('todo.store');
Route::delete('/delete/{id}',[TodosController::class,'destroy'])->name('todo.delete');


