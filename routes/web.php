<?php

use App\Http\Controllers\ArticleController;
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
    return view('template');
});

Route::get('/home',[ArticleController::class, 'index'])->name('article_index_view');
Route::get('/add',[ArticleController::class, 'addForm'])->name('articles_add_form_view');
Route::post('/add',[ArticleController::class, 'addLogic'])->name('articles_add_logic');
