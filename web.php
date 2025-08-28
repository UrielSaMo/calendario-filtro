<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Inventario;

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
Route::get('/inventarios', [Inventario::class, 'index'])->name('inventarios.index');
Route::get('/inventarios/data', [Inventario::class, 'getDataPorPrograma'])->name('inventarios.data');

