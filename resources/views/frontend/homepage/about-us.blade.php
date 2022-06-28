@extends('frontend.main.app')

@section('title')
About Indonesia 360 Tour
@endsection

@push('prepend-style')
<link href="/style/main.css" rel="stylesheet" />
@endpush

@section('content')

<section id="aboutus" class="bg-white">
    <hr style="margin-top: 4rem">
    <div class="container mt-8 align-items-center text-start" data-aos="zoom-in">
        <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
            Tentang<span class="text-kuning"> Indonesia 360 Tour</span>
        </h3>
        <div class=" align-items-start mb-2">
            <h5 class="text-secondary fw-bold fs-0"></h5>
            <p>
                Indonesia 360 Tour merupakan sebuah platform visual animasi wisata di Indonesia
                yang disajikan ke dalam bentuk 3D animasi 360&deg; untuk memberikan <i>experience</i>
                baru dalam menjelajahi Indonesia dan membantu pelaku UMKM hanya
                pada satu layar saja.
                <br class="d-none d-sm-block" />
            </p>
            <p>
                Indonesia 360 Tour akan hadir memudahkan pengunjung untuk
                mengakses spot destinasi unggulan dan pilihan di Indonesia yang dilengkapi
                dengan fasilitas <i>digital learning</i> dan <i>marketplace</i> mempermudah wisatawan dalam membeli
                produk UMKM.
                <br class="d-none d-sm-block" />
            </p>
            <p>
                <i>Project</i> Indonesia 360 Tour dikembangkan oleh tim SVCC 2 Indonesia
                dalam masa kegiatan magang bersama yang diadakan oleh POM Telkom Indonesia <i>project</i> SVCC Indonesia.
                <br class="d-none d-sm-block" />
            </p>
        </div>
    </div>
</section>

<section id="aboutsvcc" class="bg-white">
    <div class="container align-items-center text-center" data-aos="zoom-in">
        <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
            Tentang <a href="https://svcc.io" target="_blank" class="text-biru">SVCC Indonesia</a>
        </h3>
        <div class=" align-items-start mb-2">
            <h5 class="text-secondary fw-bold fs-0"></h5>
            <p>
                SVCC atau Smarteye Virtual Convention Center merupakan sebuah platform virtual event yang melibatkan
                pengguna untuk membuat event virtual & hybrid. SVCC dapat membuat Anda menikmati pengalaman baru dengan menggunakan
                teknologi imersif.
                <br class="d-none d-sm-block" />
            </p>
            <p>
                SVCC Indonesia melayani pembuatan event secara virtual mulai dari conference, webinar, hingga pameran virtual.
                Melalui kolaborasi, SVCC ingin menjadi jembatan bagi para perusahaan
                hingga institusi untuk membuat acara virtual lebih cerdas dan efisien.
                <br class="d-none d-sm-block" />
            </p>
        </div>
    </div>
</section>

<section id="logo" class="py-4">
    <div class="container position-relative pb-1 pb-lg-1">
        <div class="row align-items-center">

            <div class="col-lg-6 d-flex justify-content-center align-items-start mb-sm-5">
                <div class="card position-relative shadow" style="max-width: 370px" data-aos="zoom-in">
                    <div class="position-absolute z-index--1 me-10 me-xxl-0" style="right: -160px; top: -210px">
                        <img src="assets/img/steps/bg.png" style="max-width: 550px" alt="shape" />
                    </div>
                    <div class="card-body p-3 mb-4">
                        <img class="mb-4 mt-2 rounded-2 w-100" src="assets/img/logo/logo.jpeg" alt="booking" />
                        <h5 class="fw-medium justify-content-center d-flex">Indonesia 360 Tour Logo</h5>
                        <h6 class="fw-medium justify-content-center d-flex">oleh SVCC 2 Indonesia</h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="mt-4 mb-4 text-start">
                    <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                        Logo
                    </h3>
                    <h5 class="text-secondary">Filosofi logo Indonesia 360 Tour</h5>
                </div>

                <div class="d-flex align-items-start mb-8">
                    <div class="flex-1">
                        <h5 class="text-secondary fw-bold fs-0"></h5>
                        <p>
                            Peta Indonesia yang dikelilingi oleh lingkaran 360⁰ dengan lambang jaringan memiliki
                            makna suatu koneksi yang menyatukan seluruh wilayah Indonesia menjadi satu visual teknologi.
                            <br class="d-none d-sm-block" />
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end of .container-->
</section>

<section id="video" class="py-4">
    <div class="container" data-aos="zoom-in">
        <div class="align-items-center">
            <div class="mb-4 text-center">
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                    Video
                </h3>
                <h5 class="text-secondary">Simak video tentang Indonesia 360 Tour berikut.</h5>
            </div>

            <div class="d-flex align-items-start mb-5">
                <div class="container flex-1">
                    <iframe class="rounded" style="width: 100%; max-height: 500px" height="500px" src="https://www.youtube.com/embed/_dlBUHhDOQU" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe>
                </div>
            </div>

        </div>
    </div>
    <!-- end of .container-->
</section>

@endsection

@push('addon-script')
<script src="/vendor/vue/vue.js"></script>
@endpush
