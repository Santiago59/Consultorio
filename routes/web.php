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


Route::resource('/paciente', 'App\Http\Controllers\PacienteController');
Route::resource('/doctor', 'App\Http\Controllers\DoctorController');
Route::resource('/agenda', 'App\Http\Controllers\AgendaController');
