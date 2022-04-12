@extends('backend.layout.dashboard-admin')

@section('title')
    Create Category page
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Category Create</h2>
        <p class="dashboard-subtitle"> Create New Category </p>
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
                        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Nama Kategori</label>
                                            <input type="text" value="{{ old('name') }}" name="name" class="form-control @error('name')is-invalid @enderror" required>
                                            @error('name') 
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <input type="file" name="photo" class="form-control @error('photo')is-invalid @enderror" required>
                                            @error('photo') 
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

