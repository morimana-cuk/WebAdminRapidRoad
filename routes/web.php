<?php

use App\Http\Controllers\GetAllReport;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// })->name('index');
Route::get('/',[GetAllReport::class,'getallreport'])->name('index');
Route::get('/form-edit', [GetAllReport::class,'formedit'])->name('form-edit');

