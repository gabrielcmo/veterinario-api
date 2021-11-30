<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\TreatmentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/dog/{id}', [DogController::class, 'getDog'])->name('getDog');
Route::get('/dog/{id}/owner', [DogController::class, 'getDogOwner'])->name('getDogOwner');
Route::get('/dog/{id}/treatments', [DogController::class, 'getDogTreatments'])->name('getDogTreatment');

Route::get('/doctor/{id}', [DoctorController::class, 'getDoctor'])->name('getDoctor');