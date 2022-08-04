<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController as authLogin;

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


Route::get('/login', [authLogin::class, 'login'])->name('login');
Route::post('/login', [authLogin::class, 'authenticate']);
Route::view('/', 'welcome')->name('home')->middleware('auth');
Route::post('/logout', [authLogin::class, 'logout'])->name('logout');
