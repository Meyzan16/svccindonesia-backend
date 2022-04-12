@extends('backend.layout.dashboard-admin')

@section('title')
    Product Page
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Product</h2>
        <p class="dashboard-subtitle"> List of Products </p>
      </div>

      <div class="row">
          <div class="col-md-8">
            @if(session()->has('success'))
            <div class="autohide">
                <div class="alert alert-success autohide" role="alert">
                 {{ session('success') }}
                </div>    
            </div>
            @endif
          </div>
      </div>

      <div class="dashboard-content">
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                    <div class="card-body">
                        <a href="{{ route('product.create') }}" class="btn btn-primary mb-3">
                            + Tambah Product Baru
                        </a>

                        <div class="table-responsive">
                            <table class="table table-hover scroll-horizontal-vertical w-100" id="myTable">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>Nama Product</th>
                                        <th>Pemilik</th>
                                        <th>Kategori</th>
                                        <th>Provinsi</th>
                                        <th>Harga</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($query as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->categories->name }}</td>
                                        <td>{{ $item->category_provinsi->name }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <div class="dropdown">
                                                    <button class="btn btn-primary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
                                                        Aksi
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="{{ route('category.edit', $item->id ) }}"> Edit </a>
                                                        <form action="{{ route('category.destroy', $item->id) }}" method="POST" >
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

