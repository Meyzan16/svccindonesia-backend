<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryBrandController;
use App\Http\Controllers\CategoryProvinsiController;

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
    return view('frontend.homepage.index');
});

Route::get('/about-us', function () {
    return view('frontend.homepage.about-us');
});
        Route::group(['prefix'  => 'brand/'],function(){
            Route::get('/', [CategoryBrandController::Class, 'index'])->name('category-brand');
            Route::get('/{slug}', [CategoryBrandController::Class, 'show'])->name('category-brand-detail');
        });

        Route::group(['prefix'  => 'provinsi/'],function(){
            Route::get('/', [CategoryProvinsiController::Class, 'index'])->name('category-provinsi');
            Route::get('/{slug}', [CategoryProvinsiController::Class, 'show'])->name('category-provinsi-detail');
        });


