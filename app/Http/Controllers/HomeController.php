<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\categori_provinsi;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $categori_provinsi = categori_provinsi::all();
        $products = Products::with(['Gallaries']);

        return view('frontend.homepage.index', [
            'categori_provinsi' => $categori_provinsi
        ]);
    }

    public function aboutUs(){
        return view('frontend.homepage.about-us');
    }

}
