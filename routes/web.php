<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/form_add', [HomeController::class, 'form_add']);
Route::post('/store', [HomeController::class, 'store']);
Route::get('/form_edit/{id}', [HomeController::class, 'form_edit']);
Route::post('/update', [HomeController::class, 'update']);
Route::get('/destroy/{id}', [HomeController::class, 'destroy']);