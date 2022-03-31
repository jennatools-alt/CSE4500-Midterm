<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;


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

Route::get('/', [ProjectController::class, 'index'])->name('home');


Route::get('/add_product', [ProjectController::class, 'add_product'])->name('add_product');


Route::get('/edit_product/{id}', [ProjectController::class, 'edit_product'])->name('edit_product');


Route::get('/edit_product_image', [ProjectController::class, 'edit_product_image'])->name('edit_product_image');





Route::post('/update_product',[ProjectController::class, 'update_product'])->name('update_product');