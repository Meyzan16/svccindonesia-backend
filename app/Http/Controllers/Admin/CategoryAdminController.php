<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Categories;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Elequent\SoftDeletes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File; 


use App\Http\Requests\Admin\CategoryAdminRequest;


class CategoryAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            
            $query = Categories::all();
            return \view('backend.admin.category.index', compact('query'));
    }

    public function create()
    {
      return \view('backend.admin.category.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $rules = [
            'name'=>'required|string',
            'photo' => 'required|image|file|max:1024'
        ];

        $message = [
            'name.string' => 'Nama kategori bersifat huruf',
            'photo.image' => 'Yang anda upload bukan extension image',
            'photo.max' => 'Ukuran poto maksimal 2 MB'

        ];
        
        $validator = Validator::make($request->all(), $rules, $message);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        //sebelum di ambil request di jalankan dulu rules nya di 

        $rand_slug = Str::slug($request->name);
        $data['slug'] = $rand_slug; //name itu yang kolom di database
        $data['photo'] = $request->file('photo')->store('assets/category', 'public');

        Categories::create($data);

        return \redirect()->route('category.index');
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

   
    public function edit($id)
    {
        //findorfail jika data tidak ada, kembalikan 404
        $item = Categories::findorfail($id);

        return \view('backend.admin.category.edit', compact('item'));
    }

   
    public function update(Request $request, $id)
    {
        $data = $request->all();

        if($request->file('photo'))
        {
            if($request->input('oldImage')){
                unlink('storage/'.$request->oldImage);
            }
            $data['photo'] = $request->file('photo')->store('assets/category', 'public');
        }

        $rand_slug = Str::slug($request->name);
        $data['slug'] = $rand_slug; //name itu yang kolom di database

        //diambil dulu
        $item = Categories::findorfail($id);
        $item->update($data);

        return \redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Categories::findorfail($id);
        unlink('storage/'.$item->photo);
        $item->delete($item);

        return redirect()->route('category.index');
    }


}
