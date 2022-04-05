@extends('frontend.main.app')

@section('title')
    Indonesian 360 Tour - Home
@endsection

@section('content')

    <section  id="aboutus" class="pb-4" style="padding-top: 7rem">
        <hr>
        <!--/.bg-holder-->
        <div class="bg-white"></div>
        <!--close of /.bg-holder-->
        <div class="container mt-6 align-items-center text-start">
            <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                About Us
            </h3>
            <div class=" align-items-start mb-5">
                <h5 class="text-secondary fw-bold fs-0"></h5>
                <p>
                    Indonesian 360 Tour adalah platform penyedia jasa tampilan
                    visual di bidang wisata dan culture Indonesia yang disajikan
                    dalam 360 derajat untuk memberikan experience baru dalam
                    menikmati indahnya Indonesia dan membantu pelaku UMKM hanya
                    pada satu layar saja.
                    <br class="d-none d-sm-block"/>
                </p>
                <p>
                    Indonesian 360 Tour akan hadir memudahkan pengunjung untuk
                    mengakses spot destinasi unggulan Indonesia yang dilengkapi
                    dengan fasilitas digital learning dan mysooltan sebagai
                    marketplace sehingga mempermudah wisatawan dalam membeli
                    produk UMKM dengan cara pengunjung dapat mengakses link
                    produk pada display platform.
                </p>
            </div>
        </div>
    </section>

    <section id="logo" class="py-4" >
        <div class="container position-relative pb-1 pb-lg-1">
            <div class="row align-items-center">

                <div class="col-lg-6 d-flex justify-content-center align-items-start mb-sm-5">
                    <div class="card position-relative shadow" style="max-width: 370px">
                        <div class="position-absolute z-index--1 me-10 me-xxl-0" style="right: -160px; top: -210px">
                            <img
                                src="assets/img/steps/bg.png"
                                style="max-width: 550px"
                                alt="shape"
                            />
                        </div>
                        <div class="card-body p-3">
                            <img
                                class="mb-4 mt-2 rounded-2 w-100"
                                src="images/logo.jpeg"
                                alt="booking"
                            />
                            <h4 class="fw-medium justify-content-center d-flex">Indonesian 360 Tour Logo</h4>
                            <h6 class="fw-medium justify-content-center d-flex">by SVCC 2</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-4 text-start">
                        <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                            Our Logo
                        </h3>
                        <h5 class="text-secondary">Filosofi logo Indonesian 360 Tour</h5>
                    </div>

                    <div class="d-flex align-items-start mb-8">
                        <div class="flex-1">
                            <h5 class="text-secondary fw-bold fs-0"></h5>
                            <p>
                                Peta Indonesia yang dikelilingi oleh lingkaran 360⁰ dengan lambang jaringan memiliki
                                makna suatu
                                koneksi yang menyatukan seluruh wilayah Indonesia menjadi satu visual teknologi.
                                <br class="d-none d-sm-block"/>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end of .container-->
    </section>

    <section id="video" class="py-4">
        <div class="container">
            <div class="align-items-center">
                <div class="mb-4 text-center">
                    <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                        Video
                    </h3>
                    <h5 class="text-secondary">Simak video tentang Indonesian 360 Tour berikut.</h5>
                </div>

                <div class="d-flex align-items-start mb-5">
                    <div class="container flex-1">
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
        <!-- end of .container-->
    </section>

    <section id="our-team" class="bg-light py-4">
        <div class="position-relative pt-3 pt-lg-2 pb-6 pb-lg-8">
            <div class="container">
                <div class="text-center">
                    <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                        Our Team Member
                    </h3>
                    <h5 class="text-secondary">
                        Beberapa anggota yang ikut andil dalam membangun Indonesian 360 Tour.
                    </h5>
                </div>
                <div class="row row-cols-lg-5 row-cols-md-3 row-cols-2 flex-center mt-5">
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
                                    src="images/partners/ITDRIfest.png"
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

@endsection
