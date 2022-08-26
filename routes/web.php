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

Route::get('/', [\App\Http\Controllers\ControlPanelController::class, 'index']);
Route::post('/ticker-lines/update', [\App\Http\Controllers\ControlPanelController::class, 'updateTickerLines'])->name('update-ticker-lines');
Route::get('/toggle-bars', [\App\Http\Controllers\ControlPanelController::class, 'toggleBars'])->name('toggle-bars');
Route::post('/{grouping}/update/', [\App\Http\Controllers\ControlPanelController::class, 'updateGrouping'])->name('update-grouping');
