@extends('backend.layout.dashboard-admin')

@section('title')
    Product Gallery Page
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Product Gallery</h2>
        <p class="dashboard-subtitle"> List of Product Gallery </p>
      </div>
      <div class="dashboard-content">
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                    <div class="card-body">
                        <a href="{{ route('product-gallery.create') }}" class="btn btn-primary mb-3">
                            + Tambah Gallery Baru
                        </a>

                        <div class="table-responsive">
                            <table class="table table-hover scroll-horizontal-vertical w-100" id="myTable">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>Product</th>
                                        <th>Photo</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                          
                                        @foreach ($query as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->product->name }}</td>
                                            <td><img src="{{ Storage::url($item->photos) }}" style="max-height:40px"></td>
                                            <td>
                                                <div class="btn-group">
                                                    <div class="dropdown">
                                                        <button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
                                                            Aksi
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="{{ route('product.edit', $item->id ) }}"> Edit </a>
                                                            <form action="{{ route('product.destroy', $item->id) }}" method="POST" >
                                                                @method('delete')
                                                                @csrf
                                                                <button type="submit" class="dropdown-item text-danger">
                                                                    Hapus
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </td> 
                                        </tr>
                                      @endforeach
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
              </div>
          </div>
      </div>
    </div>
</div>
@endsection
