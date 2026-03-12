<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VerboseController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('prefix')->group(function () {

    Route::get('/200', function () {
        return response()->json(['message' => 'OK'], 200);
    });

    Route::get('/400', function () {
        return response()->json(['message' => 'Bad Request'], 400);
    });

    Route::get('/500', function () {
        return response()->json(['message' => 'Internal Server Error'], 500);
    });

    Route::get('/201', function () {
        return response()->json(['message' => 'Created'], 201);
    });

    Route::get('/204', function () {
        return response()->json(null, 204);
    });

    Route::get('/202', function(){
        return response()->json(['message' => 'Accepted'], 202);
    });

    Route::get('/403', function(){
        return response()->json(['message' => 'Forbidden'], 403);
    });

    Route::get('/401', function(){
        return response()->json(['message' => 'Unauthorized'], 401);
    });

    Route::get('/404', function(){
        return response()->json(['message' => 'Not Found'], 404);
    });

    Route::get('/405', function(){
        return response()->json(['message' => 'Method Not Allowed'], 405);
    });

});


Route::get('/test', [VerboseController::class, 'getTest']);
Route::post('/test', [VerboseController::class, 'postTest']);
Route::put('/test', [VerboseController::class, 'putTest']);
Route::delete('/test', [VerboseController::class, 'deleteTest']);
Route::patch('/test', [VerboseController::class, 'patchTest']);
Route::options('/test', [VerboseController::class, 'optionsTest']);
Route::post('/store', [VerboseController::class, 'storeTest']);