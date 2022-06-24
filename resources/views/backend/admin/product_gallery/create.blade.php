@extends('backend.layout.dashboard-admin')

@section('title')
    Product Gallery Create Page
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Product Gallery</h2>
        <p class="dashboard-subtitle"> Create New Product Gallery Create </p>
      </div>
      <div class="dashboard-content">
         <div class="row">
             <div class="col-md-12">
            

                 <div class="card">
                     <div class="card-body">
                        <form action="{{ route('product-gallery.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama Product</label>
                                           <select name="products_id" class="form-control @error('products_id')is-invalid @enderror">
                                               <option value="">pilih data</option>
                                               @foreach ($products as $product)
                                                <option value="{{ $product->id }}" > {{ $product->name }}</option>
                                               @endforeach
                                           </select>
                                           @error('products_id') 
                                           <div class="invalid-feedback">
                                               {{ $message }}
                                           </div>
                                           @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Photo Product</label>
                                            <input type="file" name="photos" class="form-control @error('photos')is-invalid @enderror" >
                                            @error('photos') 
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
