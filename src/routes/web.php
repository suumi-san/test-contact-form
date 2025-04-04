<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

Route::get('/', [ContactController::class, 'index']);
Route::get('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
