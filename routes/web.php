<?php

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



Route::get('/',[\App\Http\Controllers\SiteController::class, 'home']);
Route::get('/lang/{lang}',[\App\Http\Controllers\SiteController::class, 'switchLang'])->name('lang.switch');
Route::get('/home',[\App\Http\Controllers\SiteController::class, 'home']);
Route::get('/hikayemiz', [\App\Http\Controllers\SiteController::class, 'hikayemiz'])->name('hikayemiz');
Route::get('/vizyonumuz', [\App\Http\Controllers\SiteController::class, 'vizyonumuz'])->name('vizyonumuz');
Route::get('/misyonumuz', [\App\Http\Controllers\SiteController::class, 'misyonumuz'])->name('misyonumuz');
Route::get('/yayinlarimiz', [\App\Http\Controllers\SiteController::class, 'yayinlarimiz'])->name('yayinlarimiz');
Route::get('/kitap/{id}', [\App\Http\Controllers\SiteController::class, 'kitap'])->name('kitap');
Route::post('/siparis-gonder', [\App\Http\Controllers\SiteController::class, 'siparisGonder'])->name('siparisGonder');

Route::get('/yazarlarımız', [\App\Http\Controllers\SiteController::class, 'yazarlarımız'])->name('yazarlarımız');
Route::get('/iletisim', [\App\Http\Controllers\SiteController::class, 'iletisim'])->name('iletisim');
