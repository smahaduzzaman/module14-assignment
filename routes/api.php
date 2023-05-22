<?php

use App\Http\Controllers\AssignmentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Question 1: Get Input value from form
Route::post('/submit-form/{name}', [AssignmentController::class, 'submitForm']);
Route::post('/submit-form2', [AssignmentController::class, 'submitForm2']);

// Question 2: Get User Agent from header
Route::get('/user-agent', [AssignmentController::class, 'userAgent']);

// Question 3: Get Query String from URL
Route::get('/query/{page}', [AssignmentController::class, 'getQuery']);

// Question 4: Get JSON response
Route::get('/json', [AssignmentController::class, 'jsonResponse']);

// Question 5: Upload file
Route::post('/upload', [AssignmentController::class, 'uploadAvatar']);

// Question 6: Get Cookie
Route::post('/cookie', [AssignmentController::class, 'getCookie']);


// Question 7: Get Session
Route::post('/submit', function (Request $request) {
    $email = $request->input('email');

    return response()->json([
        "success" => true,
        "message" => "Form submitted successfully.",
        "data" => [
            "email" => $email,
        ],
    ]);
});



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
