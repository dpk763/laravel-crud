<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
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
    return view('welcome');
});

Route::get('/register',[StudentsController::class,'register']);
Route::post('/register',[StudentsController::class,'registerform']);

Route::get('/students',[StudentsController::class,'students']);
Route::get('/students/delete/{id}',[StudentsController::class,'delete']);

Route::get('/students/update/{id}',[StudentsController::class,'edit']);
Route::post('/students/update/{id}',[StudentsController::class,'update']);


