<?php

use App\Http\Controllers\API\CarController;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/car", [CarController::class, 'index']);
Route::get("/car/{id}", [CarController::class, 'show']);
Route::post("/car", [CarController::class, 'store']);

    

