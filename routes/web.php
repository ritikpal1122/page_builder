<?php

use App\Http\Controllers\DesignController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'index']);
Route::get('/preview/{id}', [PageController::class, 'show']);
Route::resource('/pages',PageController::class);
// routes/web.php
Route::post('/save-design', [DesignController::class, 'saveDesign'])->name('design.save');

Route::get('/page-builder', function () {
    return view('page-builder.index');
});