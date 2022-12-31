<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RokokController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\CompanyCRUDController;
use App\Http\Controllers\BolaCRUDController;
use App\Http\Controllers\RestoCRUDController;

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

Route::get('/dashboard', [RokokController::class, 'show'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('crud-rokok', [RokokController::class, 'index']);
    Route::post('store-rokok', [RokokController::class, 'store']);
    Route::get('crud-kendaraan', [KendaraanController::class, 'index']);
    Route::post('store-form', [KendaraanController::class, 'store']);
    Route::get('edit-rokok/{nim}',[RokokController::class,'edit']);
    Route::resource('stocks', 'StockController');
    Route::resource('companies', CompanyCRUDController::class);
    Route::resource('bolas', BolaCRUDController::class);
    Route::resource('restos', RestoCRUDController::class);
});

 

require __DIR__.'/auth.php';