<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;

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