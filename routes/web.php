<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExampleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::redirect('/', '/profile/create');

/*
|--------------------------------------------------------------------------
| PROFILE (pôvodná úloha)
|--------------------------------------------------------------------------
*/

Route::prefix('profile')->group(function () {
    Route::get('/create', [ProfileController::class, 'showForm']);
    Route::post('/result', [ProfileController::class, 'processForm']);
});

/*
|--------------------------------------------------------------------------
| EXAMPLE – CONTROLLER VERSION
|--------------------------------------------------------------------------
*/

Route::prefix('example')->group(function () {
    Route::get('/create', [ExampleController::class, 'create']);
    Route::post('/result', [ExampleController::class, 'result']);
});

/*
|--------------------------------------------------------------------------
| EXAMPLE – CLOSURE VERSION
|--------------------------------------------------------------------------
*/

Route::prefix('closure')->group(function () {

    Route::get('/create', function () {
        return view('closure.create');
    });

    Route::post('/result', function (Request $request) {

        $request->validate([
            'n' => 'required|integer|min:1'
        ]);

        $n = $request->input('n');

        $sequence = [];

        for ($i = 1; $i <= 10; $i++) {
            $sequence[] = $n * $i;
        }

        return view('closure.result', compact('n', 'sequence'));
    });
});
