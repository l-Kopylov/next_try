<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BbsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [BbsController::class, 'index'])->name('index');


Auth::routes();


Route::get('/home/add', [HomeController::class, 'showAddBbForm'])->name('bb.add');

Route::get('/home/{bb}/edit', [HomeController::class, 'showEditBbForm'])->name('bb.edit');
Route::patch('/home/{bb}', [HomeController::class, 'updateBb'])->name('bb.update');
Route::get('/home/{bb}/delete', [HomeController::class, 'showDeleteBbForm'])->name('bb.delete');
Route::delete('/home/{bb}', [HomeController::class, 'destroyBb'])->name('bb.destroy');
Route::post('/home', [HomeController::class, 'storeBb'])->name('bb.store');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/{bb}', [BbsController::class, 'detail'])->name('detail');