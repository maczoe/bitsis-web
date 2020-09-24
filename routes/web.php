<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
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

Route::middleware('cache.headers:private;max_age=3600')->get('/', [WelcomeController::class, 'index'])->name('index');
Route::get('acerca', [AboutController::class, 'index'])->name('about');
Route::get('productos', [ProductController::class, 'index'])->name('products');
Route::get('contacto', [ContactController::class, 'index'])->name('contact');

