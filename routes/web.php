<?php

use App\Http\Controllers\UiController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [UiController::class,'index']);

Route::get('/edit/{id}', [UiController::class,'edit']);

Route::put('/edit/{id}', [UiController::class,'saveEdit']);

Route::post('/add_new', [UiController::class,'addNewUi']);

Route::delete('/delete_ui/{id}', [UiController::class,'deleteExistingUi']);


