<?php

use App\Http\Controllers\CreationalPattern;
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

Route::controller(CreationalPattern::class)->group(function () 
{
    
    Route::get('singleton', 'singleton');
    Route::get('factory', 'factory');

});

Route::prefix(['structural'], function()
{



});

Route::prefix(['behavioral'], function()
{



});