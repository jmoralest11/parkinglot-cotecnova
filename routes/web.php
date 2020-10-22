<?php

use App\Http\Controllers\InfrastructureController;
use App\Http\Controllers\InputOutputController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function () {
        return view('welcome');
    });

    Route::resource('/persons', PersonController::class);

    Route::resource('/infrastructure', InfrastructureController::class);

    Route::resource('/vehicles', VehicleController::class);

    Route::resource('/inputs_outputs', InputOutputController::class);
});
