<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/dashboard', [dashboardController::class, 'backendindex']);
Route::get('/', [dashboardController::class, 'frontendindex']);
Route::prefix('/dashboard/category')->group(function () {
    Route::get('/', [CategoryController::class, 'index']);
    Route::get('/create', [CategoryController::class, 'create']);
    Route::post('/', [CategoryController::class, 'store']);
    Route::get('/edit/{id}', [CategoryController::class, 'edit']);
    Route::get('/show/{id}', [CategoryController::class, 'show']);
    Route::post('/update/{id}', [CategoryController::class, 'update']);
    Route::get('/{id}', [CategoryController::class, 'delete']);
});
