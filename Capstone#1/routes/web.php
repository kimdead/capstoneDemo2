<?php

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

Route::view("/","index");
Route::view("/about", "aboutUs");
Route::view("/contact", "contactUs");
Route::view("/signup", "signUp");
Route::view("/boarding", "boarding");
Route::view("/grooming", "grooming");
Route::view("/training", "training");
Route::view("/daycare", "daycare");
Route::view("/petwalking", "petwalking");
Route::view("/sitting", "sitting");
