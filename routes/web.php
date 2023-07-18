<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MapelController;

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
    return view('admin/index');
});

Route::controller(MapelController::class)->group(function () {
    Route::get('/mapel', 'index');
    Route::get('/mapel-add', 'add');
    Route::post('/mapel-create', 'create');
    Route::get('/mapel-edit/{id}', 'edit');
    Route::put('/mapel-save/{id}', 'save');
});
