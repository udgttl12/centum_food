<?php

use App\Http\Controllers\CalenDarController;
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

Route::view('/list','list');
Route::view('/full','full');

Route::prefix('/calendar')->name('calendar.')->group(function (){
    Route::get('', [CalenDarController::class, 'index'])->name('index');
    Route::get('/create', [CalenDarController::class, 'create'])->name('create');
    Route::post('/store', [CalenDarController::class, 'store'])->name('store');
    Route::get('/{foodCalendar}/show', [CalenDarController::class, 'show'])->name('show');
    Route::get('/{foodCalendar}/edit', [CalenDarController::class, 'edit'])->name('edit');
    Route::put('/{foodCalendar}/update', [CalenDarController::class, 'update'])->name('update');
});
