<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/product', [ProductController::class, 'store']);

//? Artinya Route /product itu mengakses controller ProductController methode / function index
Route::get('/product', [ProductController::class, 'index']);
Route::put('/product/{product}', [ProductController::class, 'update']);
Route::delete('/product/{product}', [ProductController::class, 'destroy']);

//? Artinya {product} itu mengambil parameter di belakangnya misal /product/12 yang termabil adalah 12
Route::get('/product/{product}', [ProductController::class, 'edit']);


//? Artinya Route /product/add_product itu mengakses controller ProductController methode / function create
Route::get('/product/add_product', [ProductController::class, 'create']);
