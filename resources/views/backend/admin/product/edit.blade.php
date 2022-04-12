@extends('backend.layout.dashboard-admin')

@section('title')
    Product Edit Page
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Product Edit</h2>
        <p class="dashboard-subtitle"> Edit Product </p>
      </div>
      <div class="dashboard-content">
         <div class="row">
             <div class="col-md-12">
             

                 <div class="card">
                     <div class="card-body">
                        <form action="{{ route('product.update' , $item->id) }}" method="POST" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Product</label>
                                        <input type="text"  value="{{ $item->name }}" name="name" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Pemilik Product</label>
                                      
                                       <select name="users_id" class="form-control">
                                            @foreach ($users as $user)
                                                    @if(old('users_id', $item->users_id) == $user->id )
                                                    <option value="{{ $user->id }}" selected>{{ $user->name }}</option>      
                                                    @else
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>    
                                                    @endif
                                            @endforeach
                                       </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Categories</label>
                                        <select name="categories_id" class="form-control">
                                            
                                            @foreach ($categories as $category)
                                            @if(old('categories_id', $item->categories_id) == $category->id )
                                               <option value="{{ $category->id }}" selected>{{ $category->name }}</option>      
                                            @else
                                               <option value="{{ $category->id }}">{{ $category->name }}</option>    
                                            @endif
                                           @endforeach
                                       </select>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Provinsi</label>
                                       <select name="categori_provinsi_id" class="form-control">
                                            @foreach ($kategori_provinsi as $provinsi)
                                                @if(old('categori_provinsi_id', $item->categori_provinsi_id) == $provinsi->id )
                                                <option value="{{ $provinsi->id }}" selected>{{ $provinsi->name }}</option>      
                                                @else
                                                <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>    
                                                @endif
                                            @endforeach
                                       </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Harga Product</label>
                                        <input type="number"  value="{{ $item->price }}" name="price" class="form-control @error('price')is-invalid @enderror" required>
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
                                        <textarea class="form-control" name="description" id="editor" > {!! $item->description !!} </textarea>
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
  CKEDITOR.replace('editor');
</script>
@endpush

