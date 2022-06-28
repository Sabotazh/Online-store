<?php

use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    $viewData = [];
//    $viewData["title"] = "Home Page - Online Store";
//    return view('home.index')->with("viewData", $viewData);
//});

Route::get('/', [HomeController::class, 'index'])->name("home.index");
Route::get('/about', [HomeController::class, 'about'])->name("home.about");

Route::get('/products', [ProductController::class, 'index'])->name("product.index");
Route::get('/products/{id}', [ProductController::class, 'show'])->name("product.show");
