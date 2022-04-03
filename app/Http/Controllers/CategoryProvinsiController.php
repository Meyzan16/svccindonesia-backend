<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categori_provinsi;
use App\Models\Products;

class CategoryProvinsiController extends Controller
{
    public function index(Request $request)
    {
        $categori_provinsi = categori_provinsi::all();
        $products = Products::with(['Gallaries'])->paginate(16);

        return view('frontend.homepage.category-provinsi', [
            'categori_provinsi' => $categori_provinsi,
            'products'=> $products
        ]); 
    }

    public function show(Request $request, $slug)
    {

         $categori_provinsi = categori_provinsi::all();
         $category = categori_provinsi::where('slug', $slug)->firstOrFail();
         $products = Products::with(['Gallaries'])->where('categori_provinsi_id', $category->id)->paginate(16);
 
         return view('frontend.homepage.category-provinsi', [
             'categori_provinsi' => $categori_provinsi,
             'products'=> $products
         ]); 
    }
}
