<?php

use App\Http\Controllers\BehavioralPattern;
use App\Http\Controllers\CreationalPattern;
use App\Http\Controllers\StructuralPattern;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::controller(CreationalPattern::class)->group(function ()
{
    Route::get('singleton', 'singleton')->name('singleton');
    Route::get('factory', 'factory')->name('factory');
    Route::get('abstractFactory', 'abstractFactory')->name('abstractFactory');
    Route::get('prototype', 'prototype')->name('prototype');
    Route::get('builder', 'builder')->name('builder');
});

Route::controller(StructuralPattern::class)->group(function ()
{
    Route::get('adapter', 'adapter')->name('adapter');
    Route::get('decorator', 'decorator')->name('decorator');
    Route::get('facade', 'facade')->name('facade');
    Route::get('bridge', 'bridge')->name('bridge');
});

Route::controller(BehavioralPattern::class)->group(function ()
{
    Route::get('strategy', 'strategy')->name('strategy');
    Route::get('memento', 'memento')->name('memento');
    Route::get('observer', 'observer')->name('observer');
    Route::get('state', 'state')->name('state');
});

Route::fallback(function () {
    return redirect()->route('home');
});
