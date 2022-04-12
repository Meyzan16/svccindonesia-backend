@extends('backend.layout.dashboard-admin')

@section('title')
    Product Create Page
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Product Create</h2>
        <p class="dashboard-subtitle"> Create New Product </p>
      </div>
      <div class="dashboard-content">
         <div class="row">
             <div class="col-md-12">
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}

                 <div class="card">
                     <div class="card-body">
                        <form action="{{ route('product.store') }}" method="POST" >
                            @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama Product</label>
                                            <input type="text" value="{{ old('name') }}" name="name" class="form-control @error('name')is-invalid @enderror">
                                            @error('name') 
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Pemilik Product</label>
                                           <select name="users_id" class="form-control">
                                               @foreach ($users as $user)
                                                <option value="{{ $user->id }}"> {{ $user->name }}</option>
                                               @endforeach
                                           </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Kategori Product</label>
                                           <select name="categories_id" class="form-control">
                                               @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"> {{ $category->name }}</option>
                                               @endforeach
                                           </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Provinsi</label>
                                           <select name="categori_provinsi_id" class="form-control">
                                               @foreach ($kategori_provinsi as $kategori_provinsi)
                                                <option value="{{ $kategori_provinsi->id }}"> {{ $kategori_provinsi->name }}</option>
                                               @endforeach
                                           </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Harga Product</label>
                                            <input type="number" value="{{ old('price') }}" name="price" class="form-control @error('price')is-invalid @enderror">
                                            @error('price') 
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Deskripsi Product</label>
                                            <textarea class="form-control @error('description')is-invalid @enderror" name="description" id="editor" ></textarea>
                                            @error('description') 
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="col text-right">
                                        <button type="submit" class="btn btn-success px-5">
                                            Save 
                                        </button>
                                    </div>
                                </div>
                        </form>
                     </div>
                 </div>
             </div>
         </div>
      </div>
    </div>
</div>
@endsection

@push('addon-script')
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

<script>
  CKEDITOR.replace( 'editor' );
</script>
    
@endpush

