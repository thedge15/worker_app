<?php

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

Route::prefix('/workers')->group(function () {
    Route::get('/', [App\Http\Controllers\WorkerController::class, 'index'])->name('worker.index');
    Route::get('/create', [App\Http\Controllers\WorkerController::class, 'create'])->name('worker.create');
//    Route::post('/', [App\Http\Controllers\WorkerController::class, 'store'])->name('worker.store');
    Route::get('/{worker}', [App\Http\Controllers\WorkerController::class, 'show'])->name('worker.show');
//    Route::post('/update', [App\Http\Controllers\WorkerController::class, 'update'])->name('worker.update');
//    Route::delete('/delete', [App\Http\Controllers\WorkerController::class, 'delete'])->name('worker.delete');
});
