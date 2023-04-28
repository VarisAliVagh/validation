<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});


// login/register with form request

// Route::post('login', [AuthController::class, 'loginWithFormRequest']);
// Route::post('register', [AuthController::class, 'registerWithFormRequest']);

// login/register with validate
// Route::post('login', [AuthController::class, 'loginWithValidate']);
// Route::post('register', [AuthController::class, 'registerWithValidate']);

// login/register with validator
Route::post('login', [AuthController::class, 'loginWithValidator']);
Route::post('register', [AuthController::class, 'registerWithValidator']);
