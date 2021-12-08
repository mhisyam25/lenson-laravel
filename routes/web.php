<?php

use App\Http\Controllers\AddItemController;
use App\Http\Controllers\FindController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ViewDataController;
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

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/product', [ProductController::class, 'index'])->name('product');

Route::get('/order', [OrderController::class, 'index'])->name('order');
Route::post('/order', [OrderController::class, 'store']);

Route::get('/add', [AddItemController::class, 'index'])->name('addItem');
Route::post('/add', [AddItemController::class, 'store']);

Route::get('/view', [ViewDataController::class, 'index'])->name('view');
Route::delete('/view/{id}', [ViewDataController::class, 'destroy']);

Route::get('/edit/{id}', [ViewDataController::class, 'edit'])->name('edit');
Route::patch('/edit/{id}', [ViewDataController::class, 'editProsess']);
