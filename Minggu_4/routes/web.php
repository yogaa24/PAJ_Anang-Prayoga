<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\TaskController; 

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/voters', [VoterController::class, 'viewVoter']);

Route::get('/task', [TaskController::class, 'index']);

Route::get('/task/create', [TaskController::class, 'create']);

Route::post('/task/store', [TaskController::class, 'store']);

Route::get('/task/{task}', [TaskController::class, 'show']);

Route::get('/task/{id}/edit', [TaskController::class, 'edit']);

Route::put('/task/{task}', [TaskController::class, 'update']);