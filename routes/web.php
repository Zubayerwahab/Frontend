<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;


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

//Route::get('/', function () {
//   return view('welcome');
//});
Route::get('/',[FrontController::class,'home'])->name('home');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

//    category
    Route::get('/add-category',[CategoryController::class,'addCategory'])->name('add-category');
    Route::post('/new-category',[CategoryController::class,'newCategory'])->name('new-category');
    Route::get('/manage-category',[CategoryController::class,'manageCategory'])->name('manage-category');
    Route::get('/edit-category/{id}',[CategoryController::class,'editCategory'])->name('edit-category');
    Route::post('/update-category/{id}',[CategoryController::class,'updateCategory'])->name('update-category');
    Route::get('/delete-category/{id}',[CategoryController::class,'deleteCategory'])->name('delete-category');

//    Product
    Route::get('/add-product',[ProductController::class, 'addProduct'])->name('add-product');
    Route::post('/new-product',[ProductController::class,'newProduct'])->name('new-product');
    Route::get('/manage-product',[ProductController::class,'manageProduct'])->name('manage-product');
    Route::get('/delete-product/{id}',[ProductController::class,'deleteProduct'])->name('delete-product');
    Route::get('/edit-product/{id}',[ProductController::class,'editProduct'])->name('edit-product');
    Route::post('/update-product/{id}',[ProductController::class,'updateProduct'])->name('update-product');
});
