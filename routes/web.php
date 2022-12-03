<?php

use App\Http\Controllers\controllernwind;
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

Route::get('/page1', [controllernwind::class, 'viewall']);

Route::get('/page1/{CategoryID}', [controllernwind::class, 'viewproducts']);

Route::get('/page3/{ProductID}', [controllernwind::class, 'viewdetailproducts']);