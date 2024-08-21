<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AuthController;
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


// 
Route::get('/', [AuthController::class,'loginView'])->name('login');
Route::get('welcome', [AccueilController::class,'index'])->name('welcome');
// Route::get('patient', [AccueilController::class,'indexPatient'])->name('patient');

Route::get('/registre', [AuthController::class, 'registreView'])->name('registre');
Route::get('/logout-user', [AuthController::class, 'logoutUser'])->name('logoutUser');

// traitement d'enregistrement
Route::post('/registre_save', [AuthController::class, 'registre'])->name('registre_save');
Route::post('/login_save', [AuthController::class, 'login'])->name('login_save');

