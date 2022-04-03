
@extends('frontend.main.app')

@section('title')
    Home
@endsection



@section('content')
    <section style="padding-top: 7rem">
        <!--/.bg-holder-->
        <div
        class="bg-holder"
        style="background-image: url(/images/comingsoon.png)"
        ></div>
        <!--close of /.bg-holder-->

        <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end">
            <!-- <img
                class="pt-7 pt-md-0 hero-img"
                src="assets/img/hero/hero-img.png"
                alt="hero-header"
            /> -->
            </div>
            <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
            <h4 class="fw-bold text-warning mb-3">Truly Indonesia</h4>
            <h1 class="hero-title">Indonesia 360 Tour</h1>
            <p class="mb-4 fw-medium text-danger">
                Nikmati pengalaman baru dan seru<br class="d-none d-xl-block" />
                dalam menjelajahi Indonesia.
                <br class="d-none d-xl-block" />
            </p>
            <div class="text-center text-md-start">
                <a
                class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow"
                href="#aboutus "
                >Cari tahu yuk!</a
                >
                <div class="w-100 d-block d-md-none"></div>
                <a
                href="#!"
                role="button"
                data-bs-toggle="modal"
                data-bs-target="#popupVideo"
                ><span
                    class="btn btn-danger round-btn-lg rounded-circle me-3 danger-btn-shadow"
                >
                    <img
                    src="assets/img/hero/play.svg"
                    width="15"
                    alt="paly" /></span></a
                ><span class="fw-medium">Play Video</span>
                <div
                class="modal fade"
                id="popupVideo"
                tabindex="-1"
                aria-labelledby="popupVideo"
                aria-hidden="true"
                >
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                    <iframe
                        class="rounded"
                        style="width: 100%; max-height: 500px"
                        height="500px"
                        src="https://www.youtube.com/embed/KyvAh4Gtyjk"
                        src="https://drive.google.com/file/d/14Vpwng5mEL3yELjaVAnFxWii3mNaBTno/preview"
                        title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen="allowfullscreen"
                    ></iframe>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>

    <!-- <section> begin ============================-->
    <section id="aboutus">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
            <div class="mb-4 text-start">
                <h3
                class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize"
                >
                About Us
                </h3>
            </div>

            <div class="d-flex align-items-start mb-5">
                <div class="flex-1">
                <h5 class="text-secondary fw-bold fs-0"></h5>
                <p>
                    Indonesian 360 Tour adalah platform penyedia jasa tampilan
                    visual di bidang wisata dan culture Indonesia yang disajikan
                    dalam 360 derajat untuk memberikan experience baru dalam
                    menikmati indahnya Indonesia dan membantu pelaku UMKM hanya
                    pada satu layar saja.
                    <br class="d-none d-sm-block" />
                    Indonesian 360 Tour akan hadir memudahkan pengunjung untuk
                    mengakses spot destinasi unggulan Indonesia yang dilengkapi
                    dengan fasilitas digital learning dan mysooltan sebagai
                    marketplace sehingga mempermudah wisatawan dalam membeli
                    produk UMKM dengan cara pengunjung dapat mengakses link
                    produk pada display platform.
                </p>
                </div>
            </div>
            </div>
            <div
            class="col-lg-6 d-flex justify-content-center align-items-start"
            >
            <div
                class="card position-relative shadow"
                style="max-width: 370px"
            >
                <div
                class="position-absolute z-index--1 me-10 me-xxl-0"
                style="right: -160px; top: -210px"
                >
                <img
                    src="assets/img/steps/bg.png"
                    style="max-width: 550px"
                    alt="shape"
                />
                </div>
                <div class="card-body p-3">
                <img
                    class="mb-4 mt-2 rounded-2 w-100"
                    src="images/papua/2.jpg"
                    alt="booking"
                />
                <div>
                    <h5 class="fw-medium">Trip Raja empat</h5>
                    <p class="fs--1 mb-3 fw-medium">
                    14-29 June | by Robbin joseph
                    </p>
                    <div class="icon-group mb-4">
                    <span class="btn icon-item">
                        <img
                        src="assets/img/steps/leaf.svg"
                        alt="" /></span
                    ><span class="btn icon-item">
                        <img
                        src="assets/img/steps/map.svg"
                        alt="" /></span
                    ><span class="btn icon-item">
                        <img src="assets/img/steps/send.svg" alt=""
                    /></span>
                    </div>
                    <div
                    class="d-flex align-items-center justify-content-between"
                    >
                    <div class="d-flex align-items-center mt-n1">
                        <img
                        class="me-3"
                        src="assets/img/steps/building.svg"
                        width="18"
                        alt="building"
                        /><span class="fs--1 fw-medium">24 people going</span>
                    </div>
                    <div class="show-onhover position-relative">
                        <div
                        class="card hideEl shadow position-absolute end-0 start-xl-50 bottom-100 translate-xl-middle-x ms-3"
                        style="width: 260px; border-radius: 18px"
                        >
                        <div class="card-body py-3">
                            <div class="d-flex">
                            <div style="margin-right: 10px">
                                <img
                                class="rounded-circle"
                                src="assets/img/steps/favorite-placeholder.png"
                                width="50"
                                alt="favorite"
                                />
                            </div>
                            <div>
                                <p class="fs--1 mb-1 fw-medium">Ongoing</p>
                                <h5 class="fw-medium mb-3">Trip to rome</h5>
                                <h6 class="fs--1 fw-medium mb-2">
                                <span>40%</span> completed
                                </h6>
                                <div class="progress" style="height: 6px">
                                <div
                                    class="progress-bar"
                                    role="progressbar"
                                    style="width: 40%"
                                    aria-valuenow="25"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                ></div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <button class="btn">
                        <img
                            src="assets/img/steps/heart.svg"
                            width="20"
                            alt="step"
                        />
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
    <!-- <section> close ============================-->

    

    <!-- <section> begin ============================-->
    <section class="pt-5 pt-md-9" id="destination">
        <div class="container">
        <div class="position-absolute z-index--1 end-0 d-none d-lg-block">
            <img
            src="assets/img/category/shape.svg"
            style="max-width: 200px"
            alt="service"
            />
        </div>
        <div class="mb-7 text-center">
            <h3
            class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize"
            >
            Destination
            </h3>
            <h5 class="text-secondary">
            Berbagai macam destinasi terbaik yang dapat dikunjungi secara
            virtual360 di sini.
            </h5>
        </div>
        <div class="row">
            <div class="col-lg-2 col-sm-6 mb-6">
            <a href="kategori.html">
                <div
                class="card service-card shadow-hover rounded-3 text-center align-items-center"
                >
                <div class="card-body p-xxl-5 p-4">
                    <img
                    src="assets/img/category/icon2.png"
                    width="75"
                    alt="Service"
                    />
                    <h4 class="mb-3">Sumatera Utara</h4>
                </div>
                </div>
            </a>
            </div>
            <div class="col-lg-2 col-sm-6 mb-6">
            <a href="kategori.html">
                <div
                class="card service-card shadow-hover rounded-3 text-center align-items-center"
                >
                <div class="card-body p-xxl-5 p-4">
                    <img
                    src="assets/img/category/icon2.png"
                    width="75"
                    alt="Service"
                    />
                    <h4 class="mb-3">Jawa Tengah</h4>
                </div>
                </div>
            </a>
            </div>
            <div class="col-lg-2 col-sm-6 mb-6">
            <a href="kategori.html">
                <div
                class="card service-card shadow-hover rounded-3 text-center align-items-center"
                >
                <div class="card-body p-xxl-5 p-4">
                    <img
                    src="assets/img/category/icon2.png"
                    width="75"
                    alt="Service"
                    />
                    <h4 class="mb-3">Sulawesi Selatan</h4>
                </div>
                </div>
            </a>
            </div>
            <div class="col-lg-2 col-sm-6 mb-6">
            <a href="kategori.html">
                <div
                class="card service-card shadow-hover rounded-3 text-center align-items-center"
                >
                <div class="card-body p-xxl-5 p-4">
                    <img
                    src="assets/img/category/icon2.png"
                    width="75"
                    alt="Service"
                    />
                    <h4 class="mb-3">Kalimantan Tengah</h4>
                </div>
                </div>
            </a>
            </div>
            <div class="col-lg-2 col-sm-6 mb-6">
            <a href="kategori.html">
                <div
                class="card service-card shadow-hover rounded-3 text-center align-items-center"
                >
                <div class="card-body p-xxl-5 p-4">
                    <img
                    src="assets/img/category/icon2.png"
                    width="75"
                    alt="Service"
                    />
                    <h4 class="mb-3">NTB</h4>
                </div>
                </div>
            </a>
            </div>
            <div class="col-lg-2 col-sm-6 mb-6">
            <a href="kategori.html">
                <div
                class="card service-card shadow-hover rounded-3 text-center align-items-center"
                >
                <div class="card-body p-xxl-5 p-4">
                    <img
                    src="assets/img/category/icon2.png"
                    width="75"
                    alt="Service"
                    />
                    <h4 class="mb-3">Papua</h4>
                </div>
                </div>
            </a>
            </div>
        </div>
        </div>
        <!-- end of .container-->
    </section>
    <!-- <section> close ============================-->

    <!-- <section> begin ============================-->

    <section class="pt-5" id="destination">
        <div class="container">
        <div
            class="position-absolute start-100 bottom-0 translate-middle-x d-none d-xl-block ms-xl-n4"
        >
            <img src="assets/img/dest/shape.svg" alt="destination" />
        </div>
        <div class="mb-7 text-center">
            <h5 class="text-secondary">Top Selling</h5>
            <h3
            class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize"
            >
            Top Destinations
            </h3>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
            <div class="card overflow-hidden shadow">
                <img
                class="card-img-top"
                src="images/sumut/1.jpg"
                alt="Rome, Italty"
                />
                <div class="card-body py-4 px-3">
                <div
                    class="d-flex flex-column flex-lg-row justify-content-between mb-3"
                >
                    <h4 class="text-secondary fw-medium">
                    <a
                        class="link-900 text-decoration-none stretched-link"
                        href="details.html"
                        >Datau Toba, Sumatera Utara</a
                    >
                    </h4>
                    <span class="fs-1 fw-medium">10,42k</span>
                </div>
                <div class="d-flex align-items-center">
                    <img
                    src="assets/img/dest/navigation.svg"
                    style="margin-right: 14px"
                    width="20"
                    alt="navigation"
                    /><span class="fs-0 fw-medium">10 Days Trip</span>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-4 mb-4">
            <div class="card overflow-hidden shadow">
                <img
                class="card-img-top"
                src="images/sulasel/3.jpg"
                alt="London, UK"
                />
                <div class="card-body py-4 px-3">
                <div
                    class="d-flex flex-column flex-lg-row justify-content-between mb-3"
                >
                    <h4 class="text-secondary fw-medium">
                    <a
                        class="link-900 text-decoration-none stretched-link"
                        href="details.html"
                        >Pantai Tanjung, Sulawesi Selatan</a
                    >
                    </h4>
                    <span class="fs-1 fw-medium">14.2k</span>
                </div>
                <div class="d-flex align-items-center">
                    <img
                    src="assets/img/dest/navigation.svg"
                    style="margin-right: 14px"
                    width="20"
                    alt="navigation"
                    /><span class="fs-0 fw-medium">12 Days Trip</span>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-4 mb-4">
            <div class="card overflow-hidden shadow">
                <img
                class="card-img-top"
                src="images/papua/1.jpg"
                alt="Full Europe"
                />
                <div class="card-body py-4 px-3">
                <div
                    class="d-flex flex-column flex-lg-row justify-content-between mb-3"
                >
                    <h4 class="text-secondary fw-medium">
                    <a
                        class="link-900 text-decoration-none stretched-link"
                        href="details.html"
                        >Raja Ampat</a
                    >
                    </h4>
                    <span class="fs-1 fw-medium">15.49k</span>
                </div>
                <div class="d-flex align-items-center">
                    <img
                    src="assets/img/dest/navigation.svg"
                    style="margin-right: 14px"
                    width="20"
                    alt="navigation"
                    /><span class="fs-0 fw-medium">28 Days Trip</span>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- end of .container-->
    </section>

    <section id="services">
        <div class="container">
        <div class="row align-items-center">
            <div
            class="col-lg-6 d-flex justify-content-center align-items-start"
            >
            <div
                class="card position-relative shadow"
                style="max-width: 370px"
            >
                <div
                class="position-absolute z-index--1 me-10 me-xxl-0"
                style="right: -160px; top: -210px"
                >
                <img
                    src="assets/img/steps/bg.png"
                    style="max-width: 550px"
                    alt="shape"
                />
                </div>
                <div class="card-body p-3">
                <img
                    class="mb-4 mt-2 rounded-2 w-100"
                    src="images/papua/2.jpg"
                    alt="booking"
                />
                <div>
                    <h5 class="fw-medium">Trip Raja empat</h5>
                    <p class="fs--1 mb-3 fw-medium">
                    14-29 June | by Robbin joseph
                    </p>
                    <div class="icon-group mb-4">
                    <span class="btn icon-item">
                        <img
                        src="assets/img/steps/leaf.svg"
                        alt="" /></span
                    ><span class="btn icon-item">
                        <img
                        src="assets/img/steps/map.svg"
                        alt="" /></span
                    ><span class="btn icon-item">
                        <img src="assets/img/steps/send.svg" alt=""
                    /></span>
                    </div>
                    <div
                    class="d-flex align-items-center justify-content-between"
                    >
                    <div class="d-flex align-items-center mt-n1">
                        <img
                        class="me-3"
                        src="assets/img/steps/building.svg"
                        width="18"
                        alt="building"
                        /><span class="fs--1 fw-medium">24 people going</span>
                    </div>
                    <div class="show-onhover position-relative">
                        <div
                        class="card hideEl shadow position-absolute end-0 start-xl-50 bottom-100 translate-xl-middle-x ms-3"
                        style="width: 260px; border-radius: 18px"
                        >
                        <div class="card-body py-3">
                            <div class="d-flex">
                            <div style="margin-right: 10px">
                                <img
                                class="rounded-circle"
                                src="assets/img/steps/favorite-placeholder.png"
                                width="50"
                                alt="favorite"
                                />
                            </div>
                            <div>
                                <p class="fs--1 mb-1 fw-medium">Ongoing</p>
                                <h5 class="fw-medium mb-3">Trip to rome</h5>
                                <h6 class="fs--1 fw-medium mb-2">
                                <span>40%</span> completed
                                </h6>
                                <div class="progress" style="height: 6px">
                                <div
                                    class="progress-bar"
                                    role="progressbar"
                                    style="width: 40%"
                                    aria-valuenow="25"
                                    aria-valuemin="0"
                                    aria-valuemax="100"
                                ></div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                        <button class="btn">
                        <img
                            src="assets/img/steps/heart.svg"
                            width="20"
                            alt="step"
                        />
                        </button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-6">
            <div class="mb-4 text-start">
                <h3
                class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize"
                >
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
                <div
                    class="bg-primary me-sm-4 me-3 p-3"
                    style="border-radius: 13px"
                >
                    <img
                    src="assets/img/steps/selection.svg"
                    width="22"
                    alt="steps"
                    />
                </div>
                <div class="flex-1">
                    <h5 class="text-secondary fw-bold fs-0">
                    <a href="#">Virtual Tour 360</a>
                    </h5>
                    <p>
                    Dengan teknologi 3D view 360 di mana memungkinkan
                    <br class="d-none d-sm-block" />
                    untuk mengelilingi Indonesia tanpa harus berpindah tempat.
                    </p>
                </div>
                </div>
            </a>
            <a href="">
                <div class="d-flex align-items-start mb-5">
                <div
                    class="bg-danger me-sm-4 me-3 p-3"
                    style="border-radius: 13px"
                >
                    <img
                    src="assets/img/steps/water-sport.svg"
                    width="22"
                    alt="steps"
                    />
                </div>
                <div class="flex-1">
                    <h5 class="text-secondary fw-bold fs-0">
                    <a href="#">Pembelian Produk UMKM</a>
                    </h5>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Aperiam at itaque nobis perspiciatis saepe! Architecto,
                    blanditiis commodi consectetur consequatur consequuntur
                    distinctio hic inventore labore omnis, quisquam recusandae
                    soluta vitae voluptas?
                    </p>
                </div>
                </div>
            </a>
            <a href="">
                <div class="d-flex align-items-start mb-5">
                <div
                    class="bg-info me-sm-4 me-3 p-3"
                    style="border-radius: 13px"
                >
                    <img
                    src="assets/img/steps/taxi.svg"
                    width="22"
                    alt="steps"
                    />
                </div>
                <div class="flex-1">
                    <h5 class="text-secondary fw-bold fs-0">
                    <a href="#">Digital Learning Kebudayaan Indonesia</a>
                    </h5>
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Aperiam at itaque nobis perspiciatis saepe! Architecto,
                    blanditiis commodi consectetur consequatur consequuntur
                    distinctio hic inventore labore omnis, quisquam recusandae
                    soluta vitae voluptas?
                    </p>
                </div>
                </div>
            </a>
            </div>
        </div>
        </div>
        <!-- end of .container-->
    </section>
    <!-- <section> close ============================-->

    <section id="testimonial">
        <div class="position-relative pt-9 pt-lg-8 pb-6 pb-lg-8">

            <div class="container">
            <div class="row">
                <div class="col-lg-5">
                <div class="mb-8 text-start">
                    <h5 class="text-secondary">Testimonials</h5>
                    <h3
                    class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize"
                    >
                    Apa yang orang katakan tentang kita.
                    </h3>
                </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6">
                <div class="pe-7 ps-5 ps-lg-0">
                    <div
                    class="carousel slide carousel-fade position-static"
                    id="testimonialIndicator"
                    data-bs-ride="carousel"
                    >
                    <div class="carousel-indicators">
                        <button
                        class="active"
                        type="button"
                        data-bs-target="#testimonialIndicator"
                        data-bs-slide-to="0"
                        aria-current="true"
                        aria-label="Testimonial 0"
                        ></button>
                        <button
                        class="false"
                        type="button"
                        data-bs-target="#testimonialIndicator"
                        data-bs-slide-to="1"
                        aria-current="true"
                        aria-label="Testimonial 1"
                        ></button>
                        <button
                        class="false"
                        type="button"
                        data-bs-target="#testimonialIndicator"
                        data-bs-slide-to="2"
                        aria-current="true"
                        aria-label="Testimonial 2"
                        ></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active">
                        <div class="card shadow" style="border-radius: 10px">
                            <div
                            class="position-absolute start-0 top-0 translate-middle"
                            >
                            <img
                                class="rounded-circle fit-cover"
                                src="images/sandiaga.png"
                                height="65"
                                width="65"
                                alt=""
                            />
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
                        <div
                            class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                            style="
                            border-radius: 10px;
                            transform: translate(25px, 25px);
                            "
                        ></div>
                        </div>
                        <div class="carousel-item position-relative">
                        <div class="card shadow" style="border-radius: 10px">
                            <div
                            class="position-absolute start-0 top-0 translate-middle"
                            >
                            <img
                                class="rounded-circle fit-cover"
                                src="assets/img/testimonial/author2.png"
                                height="65"
                                width="65"
                                alt=""
                            />
                            </div>
                            <div class="card-body p-4">
                            <p class="fw-medium mb-4">
                                &quot;Jadoo is recognized as one of the finest
                                travel agency in the world. When it came to planning
                                a trip, I found them to be dependable.&quot;
                            </p>
                            <h5 class="text-secondary">Thomas Wagon</h5>
                            <p class="fw-medium fs--1 mb-0">CEO of Red Button</p>
                            </div>
                        </div>
                        <div
                            class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                            style="
                            border-radius: 10px;
                            transform: translate(25px, 25px);
                            "
                        ></div>
                        </div>
                        <div class="carousel-item position-relative">
                        <div class="card shadow" style="border-radius: 10px">
                            <div
                            class="position-absolute start-0 top-0 translate-middle"
                            >
                            <img
                                class="rounded-circle fit-cover"
                                src="assets/img/testimonial/author3.png"
                                height="65"
                                width="65"
                                alt=""
                            />
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
                        <div
                            class="card shadow-sm position-absolute top-0 z-index--1 mb-3 w-100 h-100"
                            style="
                            border-radius: 10px;
                            transform: translate(25px, 25px);
                            "
                        ></div>
                        </div>
                    </div>
                    <div
                        class="carousel-navigation d-flex flex-column flex-between-center position-absolute end-0 top-lg-50 bottom-0 translate-middle-y z-index-1 me-3 me-lg-0"
                        style="height: 60px; width: 20px"
                    >
                        <button
                        class="carousel-control-prev position-static"
                        type="button"
                        data-bs-target="#testimonialIndicator"
                        data-bs-slide="prev"
                        >
                        <img
                            src="assets/img/icons/up.svg"
                            width="16"
                            alt="icon"
                        />
                        </button>
                        <button
                        class="carousel-control-next position-static"
                        type="button"
                        data-bs-target="#testimonialIndicator"
                        data-bs-slide="next"
                        >
                        <img
                            src="assets/img/icons/down.svg"
                            width="16"
                            alt="icon"
                        />
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

    <!-- <section> begin ============================-->
    <section id="partners">
        <div class="position-relative pt-9 pt-lg-8 pb-6 pb-lg-8">
        <div class="container">
            <div class="text-center">
            <h3
                class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize"
            >
                Our Partners
            </h3>
            <h5 class="text-secondary">
                Beberapa partner yang ikut bekerja sama.
            </h5>
            </div>
            <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2 flex-center">
            <div class="col">
                <div class="card shadow-hover mb-4" style="border-radius: 10px">
                <div class="card-body text-center">
                    <img
                    class="img-fluid"
                    src="images/partners/itb.png"
                    alt=""
                    />
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-hover mb-4" style="border-radius: 10px">
                <div class="card-body text-center">
                    <img
                    class="img-fluid"
                    src="images/partners/fina2021.png"
                    alt=""
                    />
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-hover mb-4" style="border-radius: 10px">
                <div class="card-body text-center">
                    <img
                    class="img-fluid"
                    src="images/partners/itdrifest.png"
                    alt=""
                    />
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-hover mb-4" style="border-radius: 10px">
                <div class="card-body text-center">
                    <img
                    class="img-fluid"
                    src="images/partners/telkomathon.png"
                    alt=""
                    />
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-hover mb-4" style="border-radius: 10px">
                <div class="card-body text-center">
                    <img
                    class="img-fluid"
                    src="images/partners/bankBRI.png"
                    alt=""
                    />
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    <!-- <section> close ============================-->

    <!-- <section> begin ============================-->
    <section class="pt-6">
        <div class="container">
        <div
            class="py-8 px-5 position-relative text-center"
            style="
            background-color: rgba(223, 215, 249, 0.199);
            border-radius: 129px 20px 20px 20px;
            "
        >
            <div
            class="position-absolute start-100 top-0 translate-middle ms-md-n3 ms-n4 mt-3"
            >
            <img
                src="assets/img/cta/send.png"
                style="max-width: 70px"
                alt="send icon"
            />
            </div>
            <div class="position-absolute end-0 top-0 z-index--1">
            <img
                src="assets/img/cta/shape-bg2.png"
                width="264"
                alt="cta shape"
            />
            </div>
            <div
            class="position-absolute start-0 bottom-0 ms-3 z-index--1 d-none d-sm-block"
            >
            <img
                src="assets/img/cta/shape-bg1.png"
                style="max-width: 340px"
                alt="cta shape"
            />
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
                    <input
                        class="form-control form-little-squirrel-control"
                        type="email"
                        placeholder="Masukkan email kamu"
                        aria-label="email"
                    /><img
                        class="input-box-icon"
                        src="assets/img/cta/mail.svg"
                        width="17"
                        alt="mail"
                    />
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