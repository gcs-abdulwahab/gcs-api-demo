<?php

use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PatientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Public routes of authentication
Route::controller(LoginRegisterController::class)->group(function () {
    Route::post('/register', 'register');
    Route::post('/login', 'login');
});


// Route::apiResource('employees', EmployeeController::class);
Route::apiResource('patients', PatientController::class);
Route::middleware('auth:sanctum')->group(function () {

    Route::post('/logout', [LoginRegisterController::class, 'logout']);

    Route::controller(PatientController::class)->group(function () {
        // Route::get('/patients', 'index');
        Route::post('/patients', 'store');
        Route::put('/patients/{id}', 'update');
        Route::delete('/patients/{id}', 'destroy');
    });
});
