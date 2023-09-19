<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PesertadidiR;
use App\Http\Controllers\GuruR;
use App\Http\Controllers\PesertadidikPDF;
use App\Http\Controllers\UserC;

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
Route::get('pesertadidik/pdf', [PesertadidikPDF::class, 'pdf'])->middleware('auth');
Route::resource('pesertadidik', PesertadidiR::class)->middleware('auth');
Route::resource('guru', GuruR::class);

Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('register', [UserC::class, 'register'])->name('register');
Route::post('register', [UserC::class, 'register_action'])->name('register.action');

Route::get('login', [UserC::class, 'login'])->name('login');
Route::post('login', [UserC::class, 'login_action'])->name('login.action');

Route::get('logout', [UserC::class, 'logout'])->name('logout');
//Route::get('pdf', [PesertadidikPDF::class, 'pdf']);