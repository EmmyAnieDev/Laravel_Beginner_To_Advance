<?php

use App\Http\Controllers\Api\v1\SchoolController;
use App\Http\Controllers\Api\v1\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



// Group routes with the prefix 'v1' to enable API versioning.
// This helps in maintaining backward compatibility when newer versions of the API are introduced.
Route::group(['prefix' => 'v1'], function () {
    Route::get('/students/search', [StudentController::class, 'search']);

    Route::get('/students', [StudentController::class, 'index']);
    Route::post('/students', [StudentController::class, 'store']);
    Route::put('/students/{student}', [StudentController::class, 'update']);
    Route::get('/students/{student}', [StudentController::class, 'show']);
    Route::delete('/students/{student}', [StudentController::class, 'destroy']);
});


// A Resource API controller for handling CRUD operations on the 'schools' resource
Route::group(['prefix' => 'v1'], function () {
    Route::resource('schools', SchoolController::class);
});

