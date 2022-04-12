<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;
use App\Models\Products;
use App\Models\Categories;
use App\Models\Categori_provinsi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductAdminController extends Controller
{
   
    public function index()
    {
        $query = Products::all();

        return view('backend.admin.product.index', compact('query'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        $users = User::all();
        $kategori_provinsi = Categori_provinsi::all();
        return view('backend.admin.product.create', compact('categories', 'users' , 'kategori_provinsi'));
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
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ];

        $messages = [
            'name.required' => 'form input name wajib di isi',
            'price.required' => 'form input harga wajib di isi',
            'description.required' => 'form input deskripsi wajib di isi',
        ];

        $validator = Validator::make($request->all(), $rules , $messages);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        $data['name'] = $request->name;
        $data['users_id'] = $request->users_id;
        $data['categories_id'] = $request->categories_id;
        $data['categori_provinsi_id'] = $request->categori_provinsi_id;
        $data['price'] = $request->price;
        $data['description'] = $request->description;
        $data['slug'] = Str::slug($request->name);

        Products::create($data);
        return redirect()->route('product.index')->with('success', 'Data Berhasil Ditambahkan');

    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $item = Products::FindorFail($id);
        $categories = Categories::all();
        $users = User::all();
        $kategori_provinsi = Categori_provinsi::all();

        return view('backend.admin.product.edit', compact('item','categories', 'users' , 'kategori_provinsi'));
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
        $data = $request->all();

        Products::FindorFail($id)->update($data);
        return redirect()->route('product.index')->with('success', 'Data berhasil di perbarui');
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
