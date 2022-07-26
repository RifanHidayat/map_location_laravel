<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::prefix('/location')->group(function () {
//     Route::get('/', [LocationController::class, 'index']);
//     Route::post('/tes', [LocationController::class, 'store']);
// });
Route::get('location', [LocationController::class, 'index'])->name('location');
Route::post('location', [LocationController::class, 'store'])->name('location.store');