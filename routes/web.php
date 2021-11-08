<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

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
    return view('creating-an-order');
})->name('creating');
//Route::post('/get-products', 'productController@select')-> name('get-produkts');
Route::get('/get-products', [\App\Http\Controllers\productController::class,'celect'])->name('get-p');

