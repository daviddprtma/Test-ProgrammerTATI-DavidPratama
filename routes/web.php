<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::middleware(
    ['auth']
)->group(function () {
    Route::get('/', [App\Http\Controllers\LogHarianController::class, 'index'])->name('log.index');
    Route::get('/log-create', [App\Http\Controllers\LogHarianController::class, 'create'])->name('log.create');
    Route::post('/log-create-post', [App\Http\Controllers\LogHarianController::class, 'store'])->name('log.store');
    Route::get('/log-edit/{id}', [App\Http\Controllers\LogHarianController::class, 'edit'])->name('log.edit');
    Route::put('/log-update/{id}', [App\Http\Controllers\LogHarianController::class, 'update'])->name('log.update');
    Route::delete('/log-delete/{id}', [App\Http\Controllers\LogHarianController::class, 'destroy'])->name('log.destroy');

    Route::post('/log-verify/{id}', [App\Http\Controllers\LogHarianController::class, 'verify'])->name('log.verify');
});



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
