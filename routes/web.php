<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoyageControlleur;

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

Route::get('/', [VoyageControlleur::class, 'afficherAll'])->name('voyage.afficherAll');
Route::get('/voyage/{id}',[VoyageControlleur::class, 'afficher'])->name('voyage.afficher');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
