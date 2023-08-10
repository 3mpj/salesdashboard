<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatatablesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [DatatablesController::class, 'getIndex']);

Route::get('/get_data', [DatatablesController::class, 'getData'])->name('datatables.data');
Route::get('/get_stats', [DatatablesController::class, 'getStats']);
Route::get('/chart', [DatatablesController::class, 'getChart']);
Route::get('/download_csv', [DatatablesController::class, 'downloadCSV']);