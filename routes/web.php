<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert', [EmployeeController::class, 'create']);

Route::get('/select',[EmployeeController::class,'index']);
Route::post('/select',[EmployeeController::class,'insertData'])->name('insertData');