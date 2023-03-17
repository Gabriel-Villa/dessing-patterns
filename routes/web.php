<?php

use App\Http\Controllers\BehavioralPattern;
use App\Http\Controllers\CreationalPattern;
use App\Http\Controllers\StructuralPattern;
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
    Route::get('abstractFactory', 'abstractFactory');
    Route::get('prototype', 'prototype');
    Route::get('builder', 'builder');
});

Route::controller(StructuralPattern::class)->group(function () 
{
    Route::get('adapter', 'adapter');
    Route::get('decorator', 'decorator');
    Route::get('facade', 'facade');
});

Route::controller(BehavioralPattern::class)->group(function () 
{
    Route::get('strategy', 'strategy');
    Route::get('memento', 'memento');
});