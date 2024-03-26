<?php


namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::apiResource('patients' , PatientController::class);

