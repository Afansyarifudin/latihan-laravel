<?php

use App\Http\Controllers\DosenController;
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
//     return view('dosen.index');
// });

// Route::get('/login', function () {
//     return view('welcome');
// });

Route::get('/', [DosenController::class, 'index']);
Route::get('create', [DosenController::class, 'create']);
Route::post('store', [DosenController::class, 'store']);
Route::put('dosen/{id}', [DosenController::class, 'update']);
Route::get('dosen/{id}/edit', [DosenController::class, 'edit']);

Route::delete('dosen/{id}', [DosenController::class, 'destroy']);

