<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\UserController;
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

//  Route::get('/about', function () {
//     return view ('about');
//  });

// Route::get('/', function () {
//     return view ('servis');
//  });

Route::get('/voter', [VoterController::class, 'viewVoter']);

Route::get('/Ss', [SubjectController::class, 'studentsubject']);
Route::get('/Ts', [SubjectController::class, 'teachersubject']);
Route::get('/As', [SubjectController::class, 'adminsubject']);

Route::get('/Su', [UserController::class, 'studentuser']);
Route::get('/Tu', [UserController::class, 'teacheruser']);
Route::get('/Au', [UserController::class, 'adminuser']);