<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;

class CategoryBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //latest product terakhir atau sort_bydate
        $categories = Categories::all();
        $products = Products::with(['Gallaries'])->paginate(16);

        return view('frontend.homepage.category-brand', [
            'categories' => $categories,
            'products'=> $products
        ]); 
    }

    public function show(Request $request, $slug)
    {
         //latest product terakhir atau sort_bydate
         $categories = Categories::all();
         $category = Categories::where('slug', $slug)->firstOrFail();
         $products = Products::with(['Gallaries'])->where('categories_id', $category->id)->paginate(16);
 
         return view('frontend.homepage.category-brand', [
             'categories' => $categories,
             'products'=> $products
         ]); 
    }

}
