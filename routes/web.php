<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\StudentController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/' , [StudentController::class , 'index'])->name('index');
Route::post('/' , [StudentController::class , 'create']);

