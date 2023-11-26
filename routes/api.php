<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CredentialController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/orders', function () {
//     return response()->json(
//         // $data, 200, $headers
//         [
//             "message"=>"GET Method Success"
//         ], 200
//     );
// });

// Route::post('/order', function () {
//     return response()->json(["message"=>"POST Method Success"], 201);
// });

// Route::put('/order/{id}', function ($id) {
//     return response()->json(
//         [
//         "message"=>"PUT Method Success " . $id
//         ], 200
//     );
// });

// Route::delete('/order/{id}', function ($id) {
//     return response()->json(
//         [
//         "message"=>"DELETE Method Success " . $id
//         ], 200
//     );
// });

Route::apiResource('order', OrderController::class);
Route::post('login', [CredentialController::class, 'login']);