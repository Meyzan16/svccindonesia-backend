<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CategoryBrandController;
use App\Http\Controllers\CategoryProvinsiController;
use App\Http\Controllers\Admin\CategoryAdminController;
use App\Http\Controllers\Admin\ProductAdminController;
use App\Http\Controllers\Admin\ProductGalleryAdminController;
use App\Http\Controllers\Admin\DashboardAdminController;

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

Route::group(['prefix' => '/'], function () {
    Route::get('/', [HomeController::Class, 'index'])->name('homepage');
    Route::get('/about-us', [HomeController::Class, 'aboutUs'])->name('about-us-page');
//    testroutelogin
//    Route::get('/login', function () {
//        return view('frontend.homepage.about-us');
//    });
});

Route::group(['prefix' => 'brand/'], function () {
    Route::get('/', [CategoryBrandController::Class, 'index'])->name('category-brand');
    Route::get('/{slug}', [CategoryBrandController::Class, 'show'])->name('category-brand-detail');
});

Route::group(['prefix' => 'destinasi/'], function () {
    Route::get('/', [CategoryProvinsiController::Class, 'index'])->name('category-provinsi');
    Route::get('/{slug}', [CategoryProvinsiController::Class, 'show'])->name('category-provinsi-detail');
});

Route::get('/detail/{slug}', [DetailController::Class, 'index'])->name('detail');

//fungsi prefix untuk memanggil satu kesatuan // ADMIN
Route::prefix('admin')->namespace('')->group(function () {
    Route::get('/', [DashboardAdminController::Class, 'index'])->name('dashboard-admin');
    Route::resource('category', CategoryAdminController::class);
    Route::resource('product', ProductAdminController::class);
    Route::resource('product-gallery', ProductGalleryAdminController::class);
});
