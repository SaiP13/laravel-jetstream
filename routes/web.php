<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/** USED CONTROLLERS */
use App\Http\Controllers\HomeController;

/**END CONTROLLERS */



// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'home']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
