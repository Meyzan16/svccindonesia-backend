<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Products_galleries;
use App\Models\Products;
use Illuminate\Support\Facades\Validator;

class ProductGalleryAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = Products_galleries::all();

        return view('backend.admin.product_gallery.index', compact('query'));

    }

 
    public function create()
    {
        $products = Products::all();
        return view('backend.admin.product_gallery.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $rules = [
            'products_id' => 'required',
            'photos' => 'required|max:2048'
        ];

        $message = [
            'products_id.required' => 'Nama produk tidak boleh kosong',
            'photos.required' => 'Poto produk tidak boleh kosong',
            'photos.max' => 'Ukuran poto maksimal 2 MB'
        ];

        $validator = Validator::make($data, $rules, $message);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($data);
        }

        $data['photos'] = $request->file('photos')->store('assets/product', 'public');
        $data['products_id'] = $request->products_id;
        Products_galleries::create($data);

        return redirect()->route('product-gallery.index')->with('success', 'data berhasil ditambahkan');
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
