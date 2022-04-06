<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class DetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $product  = Products::with(['Gallaries', 'User'])->where('slug', $slug)->firstorfail();
        return view('frontend.homepage.details', compact('product'));
    }
}
