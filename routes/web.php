<?php

use App\Http\Controllers\ModelsController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\OwnerController;
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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/create', [OwnerController::class,'create'])->name('owner.create');
Route::post('/store', [OwnerController::class,'store'])->name('owner.store');

Route::get('/', [OwnerController::class,'index'])->name('owner.index');

Route::get('/update/{id}',[OwnerController::class,'update'])->name('owner.update');
Route::post('/save/{id}',[OwnerController::class,'save'])->name('owner.save');

Route::get('/delete/{id}',[OwnerController::class,'delete'])->name('owner.delete');

Route::post('/owner/filter', [OwnerController::class,'filter'])->name('owner.filter');

Route::get('/Cars/create', [CarsController::class,'create'])->name('Cars.create');
Route::post('/Cars/store', [CarsController::class,'store'])->name('Cars.store');

Route::get('/Models/create', [ModelsController::class,'create'])->name('Models.create');
Route::post('/Models/store',[ModelsController::class,'store'])->name('Models.store');

Route::get('/models', [ModelsController::class,'index'])->name('models');
Route::get('/cars', [CarsController::class,'index'])->name('cars');

Route::get('/setLocale/{lang}', [LanguageController::class,'setLocale'])->name('setLocale');

