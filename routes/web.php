<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;

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

Route::get('/',[PublicController::class,'welcome']) -> name ('welcome');
Route::get('form',[PublicController::class,'Form']) -> name ('form');
Route::get('Cant',[PublicController::class,'Cant']) -> name ('Cant');
Route::post('form/iscriviti',[PublicController::class,'iscriviti']) -> name ('form.iscriviti');
Route::get('/article/create',[ArticleController::class,'create']) -> name ('article.create');
Route::post('/article/store',[ArticleController::class,'store']) -> name ('article.store');
Route::get('/article/detail/{article}',[ArticleController::class,'detail']) -> name ('article.detail');
Route::get('/article/update/{article}',[ArticleController::class,'update']) -> name ('article.update');
Route::put('/article/edit/{article}',[ArticleController::class,'edit']) -> name ('article.edit');
Route::delete('/article/delete/{article}',[ArticleController::class,'delete']) -> name ('article.delete');
Route::get ('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post ('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get ('/user/product/{user}', [ProductController::class, 'getProductByUser'])->name('user.product');
Route::get ('product/show/{product}', [ProductController::class, 'show'])->name('product.show');
Route::get('/products', [ProductController::class, 'index'])->name('product.index');
