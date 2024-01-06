<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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
Route::get('excel',[Controller::class,"excel"])->name("excel");
Route::post('excel-worker',[Controller::class,"excel_worker"])->name("excel-worker");
Route::get('download-excel',[Controller::class,"download_excel"])->name("download-excel");
