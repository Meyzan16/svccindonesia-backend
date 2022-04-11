<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Categories;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Elequent\SoftDeletes;

use Illuminate\Support\Str;

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

    public function store(CategoryAdminRequest $request)
    {
        //sebelum di ambil request di jalankan dulu rules nya di categoryAdminrequst
        $data = $request->all();

        $rand_slug = Str::slug(rand(5,100).'_'.$request->name);
        $data['slug'] = $rand_slug; //name itu yang kolom di database
        $data['photo'] = $request->file('photo')->store('assets/category', 'public');

        Category::create($data);

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //findorfail jika data tidak ada, kembalikan 404
        $item = Category::findorfail($id);

        return \view('backend.admin.category.edit',[
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryAdminRequest $request, $id)
    {
        $data = $request->all();

        $rand_slug = Str::slug(rand(5,100).'_'.$request->name);
        $data['slug'] = $rand_slug; //name itu yang kolom di database
        $data['photo'] = $request->file('photo')->store('assets/category', 'public');

        //diambil dulu
        $item = Category::findorfail($id);
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
        $item = Category::findorfail($id);
        $item->delete($item);

        return redirect()->route('category.index');
    }
}
