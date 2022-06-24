@extends('backend.layout.dashboard-admin')

@section('title')
   Dashboard
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Selamat Datang</h2>
        <p class="dashboard-subtitle"> Dashboard</p>
      </div>
      <div class="dashboard-content">
          <div class="row">
              <div class="col-md-12">
                  <div class="card">
                    <div class="card-body">

                        {{-- <div class="table-responsive">
                            <table class="table table-hover scroll-horizontal-vertical w-100" id="myTable">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>Nama</th>
                                        <th>Photo</th>
                                        <th>Slug</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div> --}}
                    </div>
                </div>
              </div>
          </div>
      </div>
    </div>
</div>
@endsection