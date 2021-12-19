<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\StudentController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' , [StudentController::class , 'index'])->name('index');
Route::post('/' , [StudentController::class , 'create']);

Route::get('/editform/{id}' , [StudentController::class , 'edit'])->name('edit');
Route::POST('/editform/{id}' , [StudentController::class , 'update'])->name('update');

Route::get('/delete/{id}' , [StudentController::class , 'destroy'])->name('delete');

