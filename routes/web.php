<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/testing',[TestController::class,'index']);
Route::get('/home',[EmployeeController::class,'index'])->name('home');
Route::post('/store/employee',[EmployeeController::class,'storeEmployee'])->name('store-employee');
