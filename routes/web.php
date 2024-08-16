<?php

use App\Livewire\ProductEdit;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;
use Psy\CodeCleaner\ReturnTypePass;
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

Route::get('user-register', function () {
    return view('user-register');
})->name('user-register');

Route::get('login', function () {
    return view('login');
})->name('login');


Route::middleware('auth')->group(function () {
    Route::get('/villager-view', function () {
        return view('villager-view');
    })->name('villager-view');

    Route::get('/grama-niladari-view', function () {
        return view('grama-niladari-view');
    })->name('grama-niladari-view');
});

Auth::routes();
//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');
// Route::get('/product/edit/{id}', ProductEdit::class)->name('product.edit');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
