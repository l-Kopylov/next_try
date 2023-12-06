<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BbsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Policies\BbPolicy;

Route::get('/', [BbsController::class, 'index'])->name('index');


Auth::routes();


Route::get('/home/add', [HomeController::class, 'showAddBbForm'])->name('bb.add');

Route::get('/home/{bb}/edit', [HomeController::class, 'showEditBbForm'])->name('bb.edit')->middleware('can:update,bb');
Route::patch('/home/{bb}', [HomeController::class, 'updateBb'])->name('bb.update')->middleware('can:update,bb');
Route::get('/home/{bb}/delete', [HomeController::class, 'showDeleteBbForm'])->name('bb.delete')->middleware('can:destroy,bb');
Route::delete('/home/{bb}', [HomeController::class, 'destroyBb'])->name('bb.destroy')->middleware('can:destroy,bb');
Route::post('/home', [HomeController::class, 'storeBb'])->name('bb.store');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/{bb}', [BbsController::class, 'detail'])->name('detail');