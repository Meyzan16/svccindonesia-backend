@extends('frontend.main.app')

@section('title')
    Indonesia 360 Tour | Home
@endsection

@section('content')
    <section style="padding-top: 6.5rem">
        <!--/.bg-holder-->
        <div class="bg-holder"
             style="background-image: url(assets/img/background/with_art/ungu_gelap.png)">
        </div>
        <!--close of /.bg-holder-->
        <div class="container mt-6" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end">
                    <img class="pt-0 pt-md-0 pt-lg-0 hero-img"
                         src="assets/img/hero/hero-img.png"
                         alt="Hero VR Boy"
                    />
                </div>
                <div class="col-md-7 col-lg-6 text-md-start colorder-0 text-md-start text-center py-6">
                    <h4 class="fw-bold text-warning mb-3">Truly Indonesia</h4>
                    <h1 class="hero-title">Indonesia
                        <span class="hero-animated"
                              onload="animateHeroTitle()"> 360&deg;
                        </span> Tour
                    </h1>
                    <p class="mb-4 fw-medium text-kuning">
                        Nikmati pengalaman baru nan seru<br class="d-none d-xl-block"/>
                        dalam menjelajahi Indonesia.
                        <br class="d-none d-xl-block"/>
                    </p>
                    <div class="text-center text-md-start">
                        <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow"
                           href="#aboutus ">
                            Cari tahu yuk!
                        </a>

                        <div class="w-100 d-block d-md-none"></div>

                        {{--modal--}}
                        <a type="button"
                           class="fw-medium text-white"
                           data-bs-toggle="modal"
                           data-bs-target="#popupVideo">
                            <span class="btn btn-merah round-btn-lg rounded-circle me-3 danger-btn-shadow">
                                <img src="assets/img/hero/play.svg" width="15" alt="Play Video"/>
                            </span> Play Video
                        </a>

                        <div class="modal fade"
                             id="popupVideo"
                             tabindex="-1"
                             role="dialog"
                             aria-labelledby="popupVideo"
                             aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id=""></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            <span aria-hidden="true" class=""></span>
                                        </button>
                                    </div>

                                    <div class="modal-body bg-transparent">
                                        <iframe
                                            class="rounded"
                                            style=""
                                            width="100%"
                                            height="300 px"
                                            src="https://drive.google.com/file/d/14Vpwng5mEL3yELjaVAnFxWii3mNaBTno/preview"
                                            title="YouTube video player"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen="allowfullscreen">
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--end modal--}}
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
                            Apa itu <span class="text-kuning">Id 360 Tour</span>?
                        </h3>
                    </div>

                    <div class="d-flex align-items-start mb-5">
                        <div class="flex-1">
                            <h5 class="text-secondary fw-bold fs-0"></h5>
                            <p>Indonesia 360 Tour merupakan sebuah platform visual animasi wisata di Indonesia
                                yang disajikan ke dalam bentuk 3D animasi 360&deg; untuk memberikan <i>experience</i>
                                baru dalam menjelajahi Indonesia dan membantu pelaku UMKM hanya
                                pada satu layar saja.
                                <a href="{{route('about-us-page')}}" class="text-biru"> Selengkapnya.</a>
                                <br class="d-none d-sm-block"/>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-start">
                    <div class="card position-relative shadow" style="max-width: 370px">
                        <div class="position-absolute z-index--1 me-10 me-xxl-0" style="right: -160px; top: -210px">
                            <img src="assets/img/steps/bg.png" style="max-width: 550px" alt="shape"/>
                        </div>
                        <div class="card-body p-3">
                            <img class="mb-4 mt-2 rounded-2 w-100"
                                 src="assets/img/destination/jakarta/wisata-kota-tua.png" alt="wisata"/>
                            <div>
                                <h5 class="fw-medium">Kota Tua, Jakarta</h5>
                                <p class="fs--1 mb-3 fw-medium">foto oleh <span class="text-ungu">99.co</span></p>
                                <div class="icon-group mb-4">
                                    <a class="btn icon-item" href="">
                                        <img src="assets/img/steps/leaf.svg"
                                             alt="blog"/>
                                    </a>
                                    <a class="btn icon-item" href="">
                                        <img src="assets/img/steps/map.svg"
                                             alt="map"/>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center mt-n1">
                                        <img
                                            class="me-3"
                                            src="assets/img/steps/building.svg"
                                            width="18"
                                            alt="building"
                                        /><span class="fs--1 fw-medium">99 orang pernah kesini</span>
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
                <div class="col-lg-6 order-0 order-md-1">
                    <div class="mb-4 text-start">
                        <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                            Apa yang bisa dilakukan di <span class="text-kuning">Id 360 Tour</span>?
                        </h3>
                    </div>
                    <a href="">
                        <div class="d-flex align-items-start mb-5">
                            <div class="bg-primary me-sm-4 me-3 p-3"
                                 style="border-radius: 13px">
                                <img src="assets/img/icons/360-icon.png"
                                     width="25"
                                     height="25"
                                     alt="virtual 360"
                                />
                            </div>
                            <div class="flex-1">
                                <h5 class="text-secondary fw-bold fs-0">
                                    <a href="https://indonesiantour.github.io/virtualtour/">Virtual Tour 360&deg;</a>
                                </h5>
                                <p>Dengan teknologi 3D view 360&deg; memungkinkan
                                    <br class="d-none d-sm-block"/>
                                    untuk menjelajahi wisata pilihan di Indonesia tanpa harus berpindah tempat.
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="d-flex align-items-start mb-5">
                            <div class="bg-danger me-sm-4 me-3 p-3" style="border-radius: 13px">
                                <img src="assets/img/icons/bag.png"
                                     width="25"
                                     height="25"
                                     alt="marketplace"
                                />
                            </div>
                            <div class="flex-1">
                                <h5 class="text-secondary fw-bold fs-0">
                                    <a href="{{route('category-brand')}}">Marketplace</a>
                                </h5>
                                <p><i>Marketplace</i> yang menyediakan berbagai produk/souvenir UMKM dari daerah destinasi pilihan.
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="d-flex align-items-start mb-5">
                            <div class="bg-info me-sm-4 me-3 p-3"
                                 style="border-radius: 13px">
                                <img src="assets/img/icons/learn-icon.png"
                                     width="25"
                                     height="25"
                                     alt="digital learning"
                                />
                            </div>
                            <div class="flex-1">
                                <h5 class="text-secondary fw-bold fs-0">
                                    <a href="#services" disabled>Digital Learning</a>
                                </h5>
                                <p>Indonesia 360 Tour juga menyediakan layanan pembelajaran secara digital tentang
                                    wisata pilihan yang tersedia.
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 colorder-0 text-md-start d-flex justify-content-center align-items-start">
                    <div class="card position-relative shadow"
                         style="max-width: 370px">
                        <div class="position-absolute z-index--1 me-10 me-xxl-0"
                             style="right: -160px; top: -210px">
                            <img
                                src="assets/img/steps/bg.png"
                                style="max-width: 550px"
                                alt="shape"
                            />
                        </div>
                        <div class="card-body p-3">
                            <img class="mb-4 mt-2 rounded-2 w-100"
                                 src="assets/img/destination/jakarta/bundaran-hi.jpg"
                                 alt="booking"
                            />
                            <div>
                                <h5 class="fw-medium">Bundaran HI, Jakarta</h5>
                                <p class="fs--1 mb-3 fw-medium">foto oleh <span
                                        class="text-ungu">free4kwallpapers</span></p>
                                <div class="icon-group mb-4">
                                    <a class="btn icon-item" href="#">
                                        <img src="assets/img/steps/leaf.svg"
                                             alt="blog"/>
                                    </a>
                                    <a class="btn icon-item" href="#">
                                        <img src="assets/img/steps/map.svg"
                                             alt="map"/>
                                    </a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center mt-n1">
                                        <img class="me-3"
                                             src="assets/img/steps/building.svg"
                                             width="18"
                                             alt="building"
                                        /><span class="fs--1 fw-medium">87 orang pernah kesini</span>
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

    <section id="destination">
        <div class="container" data-aos="fade-down">
            <div class="position-absolute z-index--1 end-0 d-none d-lg-block">
                <img src="assets/img/icons/category/shape.svg"
                     style="max-width: 200px"
                     alt="service"
                />
            </div>
            <div class="mb-7 text-center">
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                    Destinasi
                </h3>
                <h5 class="text-secondary">
                    Kunjungi destinasi pilihan terbaik yang dapat dikunjungi berdasarkan kategori wisata.
                </h5>
            </div>

            <div class="row d-flex justify-content-center">
                @foreach ($categori_provinsi as $item)
                    <div class="col-lg-2 col-sm-6 mb-6">
                        <a href="{{ route('category-provinsi-detail', $item->slug) }}">
                            <div
                                class="card service-card shadow-hover rounded-2 text-center align-items-center w-100 h-100">
                                <div class="card-body p-xxl-5 p-4">
                                    <img src="{{ Storage::url($item->photo) }}"
                                         width="145"
                                         height="145"
                                         alt="{{ $item->name }}"
                                    />
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

    <section id="prototype" class="bg-soft-info">
        <div class="container" data-aos="fade-up">
            <div class="mb-7 text-center">
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                    Prototipe
                </h3>
                <h5>Protoipe awal<span class="text-kuning"> Indonesia 360 Tour</span></h5>
                <h6>Tekan tombol<span class="text-kuning"> i </span>untuk tutorial prototipe.</h6>
                <div class="d-flex justify-content-center">
                    <iframe width="640"
                            height="360"
                            src="https://www.artsteps.com/embed/62489e716b52fc7b54fa087e/640/360" frameborder="0"
                            allowfullscreen>
                    </iframe>
                </div>

            </div>
        </div>
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
                                <img
                                    class="img-fluid"
                                    src="assets/img/logo/partners/itb.png"
                                    alt="Institut Teknologi Bandung"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-hover mb-4" style="border-radius: 10px">
                            <div class="card-body text-center">
                                <img
                                    class="img-fluid"
                                    src="assets/img/logo/partners/fina2021.png"
                                    alt="Fina2021"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-hover mb-4" style="border-radius: 10px">
                            <div class="card-body text-center">
                                <img
                                    class="img-fluid"
                                    src="assets/img/logo/partners/ITDRIfest.png"
                                    alt="ITDRI Fest"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-hover mb-4" style="border-radius: 10px">
                            <div class="card-body text-center">
                                <img
                                    class="img-fluid"
                                    src="assets/img/logo/partners/telkomathon.png"
                                    alt="Telkom Athon"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card shadow-hover mb-4" style="border-radius: 10px">
                            <div class="card-body text-center">
                                <img
                                    class="img-fluid"
                                    src="assets/img/logo/partners/bankBRI.png"
                                    alt="Bank Rakyat Indonesia"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="subscribe" class="pt-6">
        <div class="container">
            <div class="py-8 px-5 position-relative text-center"
                 style="
            background-color: rgba(223, 215, 249, 0.199);
            border-radius: 129px 20px 20px 20px;
            ">
                <div class="position-absolute start-100 top-0 translate-middle ms-md-n3 ms-n4 mt-3">
                    <img src="assets/img/icons/feedback-icon.png"
                         style="max-width: 70px"
                         alt="feedback icon"
                    />
                </div>
                <div class="position-absolute end-0 top-0 z-index--1">
                    <img src="assets/img/cta/shape-bg2.png"
                         width="264"
                         alt="cta shape"
                    />
                </div>
                <div class="position-absolute start-0 bottom-0 ms-3 z-index--1 d-none d-sm-block">
                    <img src="assets/img/cta/shape-bg1.png"
                         style="max-width: 340px"
                         alt="cta shape"
                    />
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <h2 class="text-secondary lh-1-7 mb-7">
                            Indonesia 360 Tour masih terus dikembangkan, oleh karena itu <i>feedback</i> dari kamu sangat dibutuhkan!
                        </h2>
                        <div class="container g-3 align-items-center mx-auto">
                            <div class="col-sm-auto">
                                <a href="https://docs.google.com/forms/d/e/1FAIpQLSe9v7wxHUNCbtjL-ezdWYNSkVqg9uRkDwQAxSYbnc2aF0YTDQ/viewform?usp=sf_link"
                                   class="btn btn-danger orange-gradient-btn fs--1">
                                    Beri Feedback
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of .container-->
    </section>

@endsection
