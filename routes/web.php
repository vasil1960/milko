<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\JournalController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('news', [NewsController::class, 'index'])->name('news');
Route::get('journal', [JournalController::class, 'index'])->name('journal');
Route::get('journal/{journal}/article', [ArticleController::class, 'index'])->name('journal.article');
Route::get('journal/{journal}/download', [JournalController::class, 'downloadJournal'])->name('journal.download');
Route::get('article/{article}/download', [ArticleController::class, 'downloadArticle'])->name('article.download');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
