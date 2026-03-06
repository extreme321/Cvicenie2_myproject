<?php

use App\Http\Controllers\BookApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookRpcController;
use App\Http\Controllers\BookSacController;
use App\Http\Controllers\TimeRestController;
use App\Http\Controllers\TimeRpcController;

Route::get('/time/rest', [TimeRestController::class, 'getTime']);
Route::get('/time/rpc', [TimeRpcController::class, 'getTime']);
Route::prefix('restapi')->group(function () {
    Route::apiresource('books', BookApiController::class);
});
Route::get('/sac/books/{id}', BookSacController::class);
Route::post('/rpc/books/{id}/borrow', [BookRpcController::class, 'borrowBook']);
Route::post('/rpc/books/{id}/return', [BookRpcController::class, 'returnBook']);
