<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('api/equipment', [App\Http\Controllers\EquipmentController::class, 'getEquipments']);

