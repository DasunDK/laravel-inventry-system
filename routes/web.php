<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('login', function () {
    return view('login');
})->name('login');



Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
// Route::get('/product/edit/{id}', ProductEdit::class)->name('product.edit');


Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
