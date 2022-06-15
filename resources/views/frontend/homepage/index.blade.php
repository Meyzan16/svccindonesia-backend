@extends('frontend.main.app')

@section('title')
Indonesia 360 Tour | Home
@endsection

@section('content')
<section style="padding-top: 6.5rem">
    <!--/.bg-holder-->
    <div class="bg-holder" style="background-image: url(/images/background.jpg)">
    </div>
    <!--close of /.bg-holder-->
    <div class="container mt-6" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 order-1 order-md-1 text-end">
                <img class="pt-7 pt-md-0 hero-img" src="https://holosbase.com/img/slide2/VR.png" alt="hero-header-VR-boy" />
            </div>
            <div class="col-md-7 col-lg-6 order-0 text-md-start text-center py-6">
                <h4 class="fw-bold text-warning mb-3">Truly Indonesia</h4>
                <h1 class="hero-title">Indonesia 360 Tour</h1>
                <p class="mb-4 fw-medium text-kuning">
                    Nikmati pengalaman baru nan seru<br class="d-none d-xl-block" />
                    dalam menjelajahi Indonesia.
                    <br class="d-none d-xl-block" />
                </p>
                <div class="text-center text-md-start">
                    <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow" href="#aboutus ">Cari tahu yuk!
                    </a>
                    <div class="w-100 d-block d-md-none"></div>
                    <!-- <a href="#!"
                           role="button"
                           data-bs-toggle="modal"
                           data-bs-target="#popupVideo">
                            <span class="btn btn-merah round-btn-lg rounded-circle me-3 danger-btn-shadow">
                                <img src="assets/img/hero/play.svg"
                                     width="15"
                                     alt="paly"/>
                            </span>
                        </a> 

                   <span class="fw-medium text-white">Play Video</span> -->

                    <a class="btn btn-merah btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow" href="#aboutus ">Daftar UMKM
                    </a>

                    <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <iframe class="rounded" style="width: 100%; max-height: 500px" height="500px" src="https://www.youtube.com/embed/_dlBUHhDOQU" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="aboutus">
    <div class="container" data-aos="fade-up">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="mb-4 text-start">
                    <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                        About Us
                    </h3>
                </div>

                <div class="d-flex align-items-start mb-5">
                    <div class="flex-1">
                        <h5 class="text-secondary fw-bold fs-0"></h5>
                        <p>Indonesian 360 Tour adalah platform penyedia jasa tampilan
                            visual di bidang wisata dan culture Indonesia yang disajikan
                            dalam 360 derajat untuk memberikan experience baru dalam
                            menikmati indahnya Indonesia dan membantu pelaku UMKM hanya
                            pada satu layar saja.
                            <br class="d-none d-sm-block" />
                            Indonesian 360 Tour akan hadir memudahkan pengunjung untuk
                            mengakses spot destinasi unggulan Indonesia yang dilengkapi
                            dengan fasilitas digital learning dan mempermudah wisatawan dalam membeli
                            produk UMKM. <a href="/about-us" class="text-biru">Selengkapnya</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-flex justify-content-center align-items-start">
                <div class="card position-relative shadow" style="max-width: 370px">
                    <div class="position-absolute z-index--1 me-10 me-xxl-0" style="right: -160px; top: -210px">
                        <img src="assets/img/steps/bg.png" style="max-width: 550px" alt="shape" />
                    </div>
                    <div class="card-body p-3">
                        <img class="mb-4 mt-2 rounded-2 w-100" src="images/jakarta/wisata-kota-tua.png" alt="wisata" />
                        <div>
                            <h5 class="fw-medium">Kota Tua, Jakarta</h5>
                            <p class="fs--1 mb-3 fw-medium">foto oleh <span class="text-ungu">99.co</span></p>
                            <div class="icon-group mb-4">
                                <span class="btn icon-item">
                                    <img src="assets/img/steps/leaf.svg" alt="" />
                                </span>
                                <span class="btn icon-item">
                                    <img src="assets/img/steps/map.svg" alt="" />
                                </span>
                                <span class="btn icon-item">
                                    <img src="assets/img/steps/send.svg" alt="" />
                                </span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center mt-n1">
                                    <img class="me-3" src="assets/img/steps/building.svg" width="18" alt="building" /><span class="fs--1 fw-medium">99 orang pernah kesini</span>
                                </div>
                                <div class="show-onhover position-relative">
                                    <div class="card hideEl shadow position-absolute end-0 start-xl-50 bottom-100 translate-xl-middle-x ms-3" style="width: 260px; border-radius: 18px">
                                        <div class="card-body py-3">
                                            <div class="d-flex">
                                                <div style="margin-right: 10px">
                                                    <img class="rounded-circle" src="assets/img/steps/favorite-placeholder.png" width="50" alt="favorite" />
                                                </div>
                                                <div>
                                                    <p class="fs--1 mb-1 fw-medium">Sedang berlangsung</p>
                                                    <h5 class="fw-medium mb-3">Wisata Kota Tua</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn">
                                        <img src="assets/img/steps/heart.svg" width="20" alt="step" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of .container-->
</section>

<section id="services" data-aos="zoom-in">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 d-flex justify-content-center align-items-start">
                <div class="card position-relative shadow" style="max-width: 370px">
                    <div class="position-absolute z-index--1 me-10 me-xxl-0" style="right: -160px; top: -210px">
                        <img src="assets/img/steps/bg.png" style="max-width: 550px" alt="shape" />
                    </div>
                    <div class="card-body p-3">
                        <img class="mb-4 mt-2 rounded-2 w-100" src="images/jakarta/bundaran-hi.jpg" alt="booking" />
                        <div>
                            <h5 class="fw-medium">Bundaran HI, Jakarta</h5>
                            <p class="fs--1 mb-3 fw-medium">foto oleh <span class="text-ungu">free4kwallpapers</span></p>
                            <div class="icon-group mb-4">
                                <span class="btn icon-item">
                                    <img src="assets/img/steps/leaf.svg" alt="" />
                                </span>
                                <span class="btn icon-item">
                                    <img src="assets/img/steps/map.svg" alt="" />
                                </span>
                                <span class="btn icon-item">
                                    <img src="assets/img/steps/send.svg" alt="" />
                                </span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center mt-n1">
                                    <img class="me-3" src="assets/img/steps/building.svg" width="18" alt="building" /><span class="fs--1 fw-medium">99 orang pernah kesini</span>
                                </div>
                                <div class="show-onhover position-relative">
                                    <div class="card hideEl shadow position-absolute end-0 start-xl-50 bottom-100 translate-xl-middle-x ms-3" style="width: 260px; border-radius: 18px">
                                        <div class="card-body py-3">
                                            <div class="d-flex">
                                                <div style="margin-right: 10px">
                                                    <img class="rounded-circle" src="assets/img/steps/favorite-placeholder.png" width="50" alt="favorite" />
                                                </div>
                                                <div>
                                                    <p class="fs--1 mb-1 fw-medium">Sedang berlangsung</p>
                                                    <h5 class="fw-medium mb-3">Wisata Bundaran HI</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn">
                                        <img src="assets/img/steps/heart.svg" width="20" alt="step" />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-4 text-start">
                    <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                        Our Services
                    </h3>
                    <h5 class="text-secondary">
                        Tidak hanya berwisata secara virtual360,<br />
                        pengunjung dapat merasakan berbagai pengalaman menarik lainnya
                        dengan berbagai macam layanan yang tersedia.
                    </h5>
                </div>
                <a href="">
                    <div class="d-flex align-items-start mb-5">
                        <div class="bg-primary me-sm-4 me-3 p-3" style="border-radius: 13px">
                            <img src="assets/img/steps/selection.svg" width="22" alt="steps" />
                        </div>
                        <div class="flex-1">
                            <h5 class="text-secondary fw-bold fs-0">
                                <a href="#prototype">Virtual Tour 360</a>
                            </h5>
                            <p>Dengan teknologi 3D view 360 di mana memungkinkan
                                <br class="d-none d-sm-block" />
                                untuk mengelilingi Indonesia tanpa harus berpindah tempat.
                            </p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="d-flex align-items-start mb-5">
                        <div class="bg-danger me-sm-4 me-3 p-3" style="border-radius: 13px">
                            <img src="assets/img/steps/water-sport.svg" width="22" alt="steps" />
                        </div>
                        <div class="flex-1">
                            <h5 class="text-secondary fw-bold fs-0">
                                <a href="/brand">Marketplace</a>
                            </h5>
                            <p>Marketplace yang menyediakan berbagai produk UMKM dari daerah destinasi pilihan.
                            </p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="d-flex align-items-start mb-5">
                        <div class="bg-info me-sm-4 me-3 p-3" style="border-radius: 13px">
                            <img src="assets/img/steps/taxi.svg" width="22" alt="steps" />
                        </div>
                        <div class="flex-1">
                            <h5 class="text-secondary fw-bold fs-0">
                                <a href="#">Digital Learning</a>
                            </h5>
                            <p>Indonesia 360 Tour juga menyediakan layanan pembelajaran secara digital tentang kebudayaan
                                dan alam yang ada di Indonesia.
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- end of .container-->
</section>

<section id="destination" class="bg-soft-info">
    <div class="container" data-aos="fade-down">
        <div class="position-absolute z-index--1 end-0 d-none d-lg-block">
            <img src="assets/img/category/shape.svg" style="max-width: 200px" alt="service" />
        </div>
        <div class="mb-7 text-center">
            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                Destination
            </h3>
            <h5 class="text-secondary">
                Destinasi terbaik pilihan yang dapat dikunjungi secara
                virtual 360.
            </h5>
        </div>

        <div class="row d-flex justify-content-center">
            @foreach ($categori_provinsi as $item)
            <div class="col-lg-2 col-sm-6 mb-6">
                <a href="{{ route('category-provinsi-detail', $item->slug) }}">
                    <div class="card service-card shadow-hover rounded-2 text-center align-items-center w-100 h-100">
                        <div class="card-body p-xxl-5 p-4">
                            <img src="{{ Storage::url($item->photo) }}" width="145" height="145" alt="{{ $item->name }}" />
                            <h4 class="mt-4 mb-2">{{ $item->name }}</h4>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    <!-- end of .container-->
</section>

<section id="prototype">
    <div class="container" data-aos="fade-up">
        <div class="mb-7 text-center">
            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                Prototype
            </h3>
            {{--<h5 class="text-secondary">
                    Rasakan pengalaman jelajah Indonesia secara virtual melalui prototype di bawah ini.
                    <br>
                    Klik tombol <i class="fa fa-info text-kuning"></i> di bawah untuk tutorial penggunaan.
                </h5>--}}
        </div>
        <div class="d-flex justify-content-center">
            {{--<iframe width="100%"
                        height="720"
                        src="https://www.artsteps.com/embed/62489e716b52fc7b54fa087e/1280/720" frameborder="0"
                        allowfullscreen>
                </iframe>--}}
            <img src="images/sand-clock.png" alt="" height="85" width="85" class="mb-7">
        </div>
        <h4 class="text-secondary text-center">Soon, please wait...</h4>
    </div>
    <!-- end of .container-->
</section>

<section id="testimonial" class="bg-soft-success">
    <div class="position-relative pt-3 pt-lg-2 pb-1 pb-lg-2" data-aos="fade-up">

        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="mb-8 text-start">
                        <h2 class="text-secondary">Testimonials</h2>
                        <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                            Apa yang orang katakan tentang Indonesia 360 Tour.
                        </h3>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                    <div class="pe-7 ps-5 ps-lg-0">
                        <div class="carousel slide carousel-fade position-static" id="testimonialIndicator" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button class="active" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="0" aria-current="true" aria-label="Testimonial 0"></button>
                                <button class="false" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="1" aria-current="true" aria-label="Testimonial 1"></button>
                                <button class="false" type="button" data-bs-target="#testimonialIndicator" data-bs-slide-to="2" aria-current="true" aria-label="Testimonial 2"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item position-relative active">
                                    <div class="card shadow" style="border-radius: 10px">
                                        <div class="position-absolute start-0 top-0 translate-middle">
                                            <img class="rounded-circle fit-cover" src="images/sandiaga.png" height="65" width="65" alt="" />
                                        </div>
                                        <div class="card-body p-4">
                                            <p class="fw-medium mb-4">
                                                &quot; Batu loncatan dari telkom yang mengembangkan
                                                mahasiswa dalam membangkitkan nilai pariwisata
                                                sangat kreatif dan pembaruan yang luar biasa .&quot;
                                            </p>
                                            <h5 class="text-secondary">Sandiaga Uno</h5>
                                            <p class="fw-medium fs--1 mb-0">
                                                Mentri, Kemenparekraf
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100" style="
                            border-radius: 10px;
                            transform: translate(25px, 25px);
                            "></div>
                                </div>
                                <div class="carousel-item position-relative">
                                    <div class="card shadow" style="border-radius: 10px">
                                        <div class="position-absolute start-0 top-0 translate-middle">
                                            <img class="rounded-circle fit-cover" src="assets/img/testimonial/author2.png" height="65" width="65" alt="" />
                                        </div>
                                        <div class="card-body p-4">
                                            <p class="fw-medium mb-4">
                                                &quot;id360Tour is recognized as one of the finest
                                                travel agency in the world. When it came to planning
                                                a trip, I found them to be dependable.&quot;
                                            </p>
                                            <h5 class="text-secondary">Thomas Wagon</h5>
                                            <p class="fw-medium fs--1 mb-0">CEO of Red Button</p>
                                        </div>
                                    </div>
                                    <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100" style="
                            border-radius: 10px;
                            transform: translate(25px, 25px);
                            "></div>
                                </div>
                                <div class="carousel-item position-relative">
                                    <div class="card shadow" style="border-radius: 10px">
                                        <div class="position-absolute start-0 top-0 translate-middle">
                                            <img class="rounded-circle fit-cover" src="assets/img/testimonial/author3.png" height="65" width="65" alt="" />
                                        </div>
                                        <div class="card-body p-4">
                                            <p class="fw-medium mb-4">
                                                &quot;On the Windows talking painted pasture yet its
                                                express parties use. Sure last upon he same as knew
                                                next. Of believed or diverted no.&quot;
                                            </p>
                                            <h5 class="text-secondary">Kelly Willium</h5>
                                            <p class="fw-medium fs--1 mb-0">Khulna, Bangladesh</p>
                                        </div>
                                    </div>
                                    <div class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100" style="
                            border-radius: 10px;
                            transform: translate(25px, 25px);
                            "></div>
                                </div>
                            </div>
                            <div class="carousel-navigation d-flex flex-column flex-between-center position-absolute end-0 top-lg-50 bottom-0 translate-middle-y z-index-1 me-3 me-lg-0" style="height: 60px; width: 20px">
                                <button class="carousel-control-prev position-static" type="button" data-bs-target="#testimonialIndicator" data-bs-slide="prev">
                                    <img src="assets/img/icons/up.svg" width="16" alt="icon" />
                                </button>
                                <button class="carousel-control-next position-static" type="button" data-bs-target="#testimonialIndicator" data-bs-slide="next">
                                    <img src="assets/img/icons/down.svg" width="16" alt="icon" />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of .container-->
</section>

<section id="partners">
    <div class="position-relative pt-3 pt-lg-2 pb-1 pb-lg-2" data-aos="fade-up">
        <div class="container">
            <div class="text-center">
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                    SVCC Indonesia Partners
                </h3>
                <h5 class="text-secondary">
                    Beberapa partner yang ikut bekerja sama dengan SVCC Indonesia.
                </h5>
            </div>
            <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2 flex-center">
                <div class="col">
                    <div class="card shadow-hover mb-4" style="border-radius: 10px">
                        <div class="card-body text-center">
                            <img class="img-fluid" src="images/partners/itb.png" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-hover mb-4" style="border-radius: 10px">
                        <div class="card-body text-center">
                            <img class="img-fluid" src="images/partners/fina2021.png" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-hover mb-4" style="border-radius: 10px">
                        <div class="card-body text-center">
                            <img class="img-fluid" src="images/partners/ITDRIfest.png" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-hover mb-4" style="border-radius: 10px">
                        <div class="card-body text-center">
                            <img class="img-fluid" src="images/partners/telkomathon.png" alt="" />
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-hover mb-4" style="border-radius: 10px">
                        <div class="card-body text-center">
                            <img class="img-fluid" src="images/partners/bankBRI.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="subscribe" class="pt-6">
    <div class="container">
        <div class="py-8 px-5 position-relative text-center" style="
            background-color: rgba(223, 215, 249, 0.199);
            border-radius: 129px 20px 20px 20px;
            ">
            <div class="position-absolute start-100 top-0 translate-middle ms-md-n3 ms-n4 mt-3">
                <img src="assets/img/cta/send-mail.png" style="max-width: 70px" alt="send icon" />
            </div>
            <div class="position-absolute end-0 top-0 z-index--1">
                <img src="assets/img/cta/shape-bg2.png" width="264" alt="cta shape" />
            </div>
            <div class="position-absolute start-0 bottom-0 ms-3 z-index--1 d-none d-sm-block">
                <img src="assets/img/cta/shape-bg1.png" style="max-width: 340px" alt="cta shape" />
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <h2 class="text-secondary lh-1-7 mb-7">
                        Dapatkan update terbaru dari Indonesia 360 Tour dan berita
                        terkait lainnya.
                    </h2>
                    <form class="row g-3 align-items-center w-lg-75 mx-auto">
                        <div class="col-sm">
                            <div class="input-group-icon">
                                <input class="form-control form-little-squirrel-control" type="email" placeholder="Masukkan email kamu" aria-label="email" />
                                <img class="input-box-icon" src="assets/img/cta/mail.svg" width="17" alt="mail" />
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <button class="btn btn-danger orange-gradient-btn fs--1">
                                Notify Me!
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end of .container-->
</section>

@endsection