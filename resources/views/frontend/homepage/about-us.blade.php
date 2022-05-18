@extends('frontend.main.app')

@section('title')
    About Indonesia 360 Tour
@endsection

@push('prepend-style')
    <link href="/style/main.css" rel="stylesheet"/>
@endpush

@section('content')

    <section id="aboutus" class="pb-4" style="padding-top: 7rem">
        <hr>
        <!--/.bg-holder-->
        <div class="bg-white"></div>
        <!--close of /.bg-holder-->
        <div class="container mt-6 align-items-center text-start"
             data-aos="zoom-in">
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

    <section id="logo" class="py-4">
        <div class="container position-relative pb-1 pb-lg-1">
            <div class="row align-items-center">

                <div class="col-lg-6 d-flex justify-content-center align-items-start mb-sm-5">
                    <div class="card position-relative shadow"
                         style="max-width: 370px"
                         data-aos="zoom-in">
                        <div class="position-absolute z-index--1 me-10 me-xxl-0" style="right: -160px; top: -210px">
                            <img
                                src="assets/img/steps/bg.png"
                                style="max-width: 550px"
                                alt="shape"
                            />
                        </div>
                        <div class="card-body p-3 mb-4">
                            <img
                                class="mb-4 mt-2 rounded-2 w-100"
                                src="images/logo.jpeg"
                                alt="booking"
                            />
                            <h5 class="fw-medium justify-content-center d-flex">Indonesian 360 Tour Logo</h5>
                            <h6 class="fw-medium justify-content-center d-flex">by SVCC 2</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mt-4 mb-4 text-start">
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
        <div class="container" data-aos="zoom-in">
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
                            src="https://www.youtube.com/embed/_dlBUHhDOQU"
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

    {{--<section id="our-team" class="bg-light py-4">
        <div class="container pt-3 pt-lg-2 pb-6 pb-lg-8 position-relative" data-aos="fade-up">

            <div class="text-center">
                <h3 class="fs-xl-10 fs-lg-8 fs-7 fw-bold font-cursive text-capitalize">
                    Our Team Member
                </h3>
                <h5 class="text-secondary">
                    Beberapa anggota yang ikut andil dalam membangun Indonesian 360 Tour.
                </h5>
            </div>

            <div class="row text-center justify-content-center align-content-center d-flex">
                <div class="col-lg-12 mt-4 carousel slide carousel-fade position-static"
                     id="ourTeamIndicator"
                     data-bs-ride="carousel">
                    --}}{{--isi dari section/carousel--}}{{--
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active">
                            <h1 data-aos="zoom-out" class="text-kuning">Web Developer</h1>
                            <div class="row justify-content-center align-content-center">
                                <div class="col-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 col-sm-6 mt-4">
                                    <div class="card" style="width: 15.75rem;">
                                        <img alt="Member of id360tour"
                                             class="card-img-top"
                                             src="images/team-member/aqshalmarta.jpg"
                                             style="max-height: 300px;height: 300px">
                                        <div class="card-body"
                                             style="height: 200px">
                                            <div class="fw-bold text-black p-1 card-title">Aqshal Marta Yudha</div>
                                            <p class="card-text">Web Developer</p>
                                            <div class="mt-5"></div>
                                            <a href="https://instagram.com/aqshalmarta" class="btn btn-merah">
                                                <span class="fab fa-instagram"></span>
                                            </a>
                                            <a href="https://linkedin.com/in/aqshalmarta" class="btn btn-biru">
                                                <span class="fab fa-linkedin"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 col-sm-6 mt-4">
                                    <div class="card" style="width: 15.75rem;">
                                        <img class="card-img-top"
                                             src="images/team-member/meyzan.jpg"
                                             alt="Member of id360tour"
                                             style="max-height: 300px;height: 300px">
                                        <div class="card-body"
                                             style="height: 200px">
                                            <div class="fw-bold text-black p-1 card-title">Meyzan Al Yutra</div>
                                            <p class="card-text">Web Developer</p>
                                            <div class="mt-5"></div>
                                            <a href="https://instagram.com/adzanmagrib.e" class="btn btn-merah">
                                                <span class="fab fa-instagram"></span>
                                            </a>
                                            <a href="https://linkedin.com/in/" class="btn btn-biru">
                                                <span class="fab fa-linkedin"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 col-sm-6 mt-4">
                                    <div class="card" style="width: 15.75rem;">
                                        <img class="card-img-top"
                                             src="images/team-member/ginal.jpeg"
                                             alt="Member of id360tour"
                                             style="max-height: 300px;height: 300px">
                                        <div class="card-body"
                                             style="height: 200px">
                                            <div class="fw-bold text-black p-1 card-title">Ginal Fikri Al Hakim</div>
                                            <p class="card-text">Web Developer</p>
                                            <div class="mt-5"></div>
                                            <a href="https://instagram.com/ginalhakim_" class="btn btn-merah">
                                                <span class="fab fa-instagram"></span>
                                            </a>
                                            <a href="https://linkedin.com/in/" class="btn btn-biru">
                                                <span class="fab fa-linkedin"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 col-sm-6 mt-4">
                                    <div class="card" style="width: 15.75rem;">
                                        <img class="card-img-top"
                                             src="images/team-member/team_profile.png"
                                             alt="Member of id360tour"
                                             style="max-height: 300px;height: 300px">
                                        <div class="card-body"
                                             style="height: 200px">
                                            <div class="fw-bold text-black p-1 card-title">Saddam</div>
                                            <p class="card-text">Web Developer</p>
                                            <div class="mt-5"></div>
                                            <a href="https://instagram.com/" class="btn btn-merah">
                                                <span class="fab fa-instagram"></span>
                                            </a>
                                            <a href="https://linkedin.com/in/" class="btn btn-biru">
                                                <span class="fab fa-linkedin"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative">
                            <h1 data-aos="zoom-out" class="text-kuning">Digital Marketing</h1>
                            <div class="row justify-content-center align-content-center">
                                <div class="col-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 col-sm-6 mt-4">
                                    <div class="card" style="width: 15.75rem;">
                                        <img class="card-img-top"
                                             src="images/team-member/tasha.jpg"
                                             alt="Member of id360tour"
                                             style="max-height: 300px;height: 300px">
                                        <div class="card-body"
                                             style="height: 200px">
                                            <div class="fw-bold text-black p-1 card-title">Tasha Mutiara P.Sonjaya</div>
                                            <p class="card-text">Digital Marketing</p>
                                            <div class="mt-5"></div>
                                            <a href="https://instagram.com/tshmutiara" class="btn btn-merah">
                                                <span class="fab fa-instagram"></span>
                                            </a>
                                            <a href="https://linkedin.com/in/" class="btn btn-biru">
                                                <span class="fab fa-linkedin"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 col-sm-6 mt-4">
                                    <div class="card" style="width: 15.75rem;">
                                        <img class="card-img-top"
                                             src="images/team-member/adamarga.jpg"
                                             alt="Member of id360tour"
                                             style="max-height: 300px;height: 300px">
                                        <div class="card-body"
                                             style="height: 200px">
                                            <div class="fw-bold text-black p-1 card-title">Adam Arga</div>
                                            <p class="card-text">Digital Marketing</p>
                                            <div class="mt-5"></div>
                                            <a href="https://instagram.com/adam_arga" class="btn btn-merah">
                                                <span class="fab fa-instagram"></span>
                                            </a>
                                            <a href="https://linkedin.com/in/" class="btn btn-biru">
                                                <span class="fab fa-linkedin"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 col-sm-6 mt-4">
                                    <div class="card" style="width: 15.75rem;">
                                        <img class="card-img-top"
                                             src="images/team-member/reyna.heic"
                                             alt="Member of id360tour"
                                             style="max-height: 300px;height: 300px">
                                        <div class="card-body"
                                             style="height: 200px">
                                            <div class="fw-bold text-black p-1 card-title">Reyna Oktavriana</div>
                                            <p class="card-text">Digital Marketing</p>
                                            <div class="mt-5"></div>
                                            <a href="https://instagram.com/reynaoktav" class="btn btn-merah">
                                                <span class="fab fa-instagram"></span>
                                            </a>
                                            <a href="https://linkedin.com/in/" class="btn btn-biru">
                                                <span class="fab fa-linkedin"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 col-sm-6 mt-4">
                                    <div class="card" style="width: 15.75rem;">
                                        <img class="card-img-top"
                                             src="images/team-member/dhifie.jpg"
                                             alt="Member of id360tour"
                                             style="max-height: 300px;height: 300px">
                                        <div class="card-body"
                                             style="height: 200px">
                                            <div class="fw-bold text-black p-1 card-title">Dhifie Naufalindhia</div>
                                            <p class="card-text">Digital Marketing</p>
                                            <div class="mt-5"></div>
                                            <a href="https://instagram.com/dhifienaufalin" class="btn btn-merah">
                                                <span class="fab fa-instagram"></span>
                                            </a>
                                            <a href="https://linkedin.com/in/" class="btn btn-biru">
                                                <span class="fab fa-linkedin"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative">
                            <h1 data-aos="zoom-out" class="text-kuning">Business Development</h1>
                            <div class="row justify-content-center align-content-center">
                                <div class="col-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 col-sm-6 mt-4">
                                    <div class="card" style="width: 15.75rem;">
                                        <img class="card-img-top"
                                             src="images/team-member/abiwisnu.jpg"
                                             alt="Member of id360tour"
                                             style="max-height: 300px;height: 300px">
                                        <div class="card-body"
                                             style="height: 200px">
                                            <div class="fw-bold text-black p-1 card-title">Abi Wisnu</div>
                                            <p class="card-text">Business Development</p>
                                            <div class="mt-5"></div>
                                            <a href="https://instagram.com/abiswisnu_" class="btn btn-merah">
                                                <span class="fab fa-instagram"></span>
                                            </a>
                                            <a href="https://linkedin.com/in/" class="btn btn-biru">
                                                <span class="fab fa-linkedin"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 col-sm-6 mt-4">
                                    <div class="card" style="width: 15.75rem;">
                                        <img class="card-img-top"
                                             src="images/team-member/ami.jpg"
                                             alt="Member of id360tour"
                                             style="max-height: 300px;height: 300px">
                                        <div class="card-body"
                                             style="height: 200px">
                                            <div class="fw-bold text-black p-1 card-title">Salsabilah Nur Rahmi</div>
                                            <p class="card-text">Business Development</p>
                                            <div class="mt-5"></div>
                                            <a href="https://instagram.com/salsabilah_ami" class="btn btn-merah">
                                                <span class="fab fa-instagram"></span>
                                            </a>
                                            <a href="https://linkedin.com/in/" class="btn btn-biru">
                                                <span class="fab fa-linkedin"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 col-sm-6 mt-4">
                                    <div class="card" style="width: 15.75rem;">
                                        <img class="card-img-top"
                                             src="images/team-member/zara.jpg"
                                             alt="Member of id360tour"
                                             style="max-height: 300px;height: 300px">
                                        <div class="card-body"
                                             style="height: 200px">
                                            <div class="fw-bold text-black p-1 card-title">Azzara Putri Elvaza</div>
                                            <p class="card-text">Business Development</p>
                                            <div class="mt-5"></div>
                                            <a href="https://instagram.com/azzaraelvaza" class="btn btn-merah">
                                                <span class="fab fa-instagram"></span>
                                            </a>
                                            <a href="https://linkedin.com/in/" class="btn btn-biru">
                                                <span class="fab fa-linkedin"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 col-sm-6 mt-4">
                                    <div class="card" style="width: 15.75rem;">
                                        <img class="card-img-top"
                                             src="images/team-member/team_profile.png"
                                             alt="Member of id360tour"
                                             style="max-height: 300px;height: 300px">
                                        <div class="card-body"
                                             style="height: 200px">
                                            <div class="fw-bold text-black p-1 card-title">Alif Ghifari Putra</div>
                                            <p class="card-text">Business Development</p>
                                            <div class="mt-5"></div>
                                            <a href="https://instagram.com/" class="btn btn-merah">
                                                <span class="fab fa-instagram"></span>
                                            </a>
                                            <a href="https://linkedin.com/in/" class="btn btn-biru">
                                                <span class="fab fa-linkedin"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item position-relative">
                            <h1 data-aos="zoom-out" class="text-kuning">3D Content Creator</h1>
                            <div class="row justify-content-center align-content-center">
                                <div class="col-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 col-sm-6 mt-4">
                                    <div class="card" style="width: 15.75rem;">
                                        <img class="card-img-top"
                                             src="images/team-member/agustiyani.jpeg"
                                             alt="Member of id360tour"
                                             style="max-height: 300px;height: 300px">
                                        <div class="card-body"
                                             style="height: 200px">
                                            <div class="fw-bold text-black p-1 card-title">Agus Gustiyani</div>
                                            <p class="card-text">3D Content Creator</p>
                                            <div class="mt-5"></div>
                                            <a href="https://instagram.com/agustiyanii_" class="btn btn-merah">
                                                <span class="fab fa-instagram"></span>
                                            </a>
                                            <a href="https://linkedin.com/in/" class="btn btn-biru">
                                                <span class="fab fa-linkedin"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 col-sm-6 mt-4">
                                    <div class="card" style="width: 15.75rem;">
                                        <img class="card-img-top"
                                             src="images/team-member/team_profile.png"
                                             alt="Member of id360tour"
                                             style="max-height: 300px;height: 300px">
                                        <div class="card-body"
                                             style="height: 200px">
                                            <div class="fw-bold text-black p-1 card-title">Maulana Ibrahim</div>
                                            <p class="card-text">3D Content Creator</p>
                                            <div class="mt-5"></div>
                                            <a href="https://instagram.com/salsabilah_ami" class="btn btn-merah">
                                                <span class="fab fa-instagram"></span>
                                            </a>
                                            <a href="https://linkedin.com/in/" class="btn btn-biru">
                                                <span class="fab fa-linkedin"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 col-sm-6 mt-4">
                                    <div class="card" style="width: 15.75rem;">
                                        <img class="card-img-top"
                                             src="images/team-member/rafli.jpg"
                                             alt="Member of id360tour"
                                             style="max-height: 300px;height: 300px">
                                        <div class="card-body"
                                             style="height: 200px">
                                            <div class="fw-bold text-black p-1 card-title">Rafli Naufal Suhandani</div>
                                            <p class="card-text">3D Content Creator</p>
                                            <div class="mt-5"></div>
                                            <a href="https://instagram.com/" class="btn btn-merah">
                                                <span class="fab fa-instagram"></span>
                                            </a>
                                            <a href="https://linkedin.com/in/" class="btn btn-biru">
                                                <span class="fab fa-linkedin"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-xl-3 col-xxl-3 col-lg-4 col-md-6 col-sm-6 mt-4">
                                    <div class="card" style="width: 15.75rem;">
                                        <img class="card-img-top"
                                             src="images/team-member/team_profile.png"
                                             alt="Member of id360tour"
                                             style="max-height: 300px;height: 300px">
                                        <div class="card-body"
                                             style="height: 200px">
                                            <div class="fw-bold text-black p-1 card-title">Apriyanita Egi Hardiyanti
                                            </div>
                                            <p class="card-text">3D Content Creator</p>
                                            <div class="mt-5"></div>
                                            <a href="https://instagram.com/" class="btn btn-merah">
                                                <span class="fab fa-instagram"></span>
                                            </a>
                                            <a href="https://linkedin.com/in/" class="btn btn-biru">
                                                <span class="fab fa-linkedin"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    --}}{{--navigasi titik--}}{{--

                    <div class="carousel-indicators">
                        <button
                            class="active"
                            type="button"
                            data-bs-target="#ourTeamIndicator"
                            data-bs-slide-to="0"
                            aria-current="true"
                            aria-label="Our Team 0"
                        ></button>
                        <button
                            class="false"
                            type="button"
                            data-bs-target="#ourTeamIndicator"
                            data-bs-slide-to="1"
                            aria-current="true"
                            aria-label="Our Team 1"
                        ></button>
                        <button
                            class="false"
                            type="button"
                            data-bs-target="#ourTeamIndicator"
                            data-bs-slide-to="2"
                            aria-current="true"
                            aria-label="Our Team 2"
                        ></button>
                        <button
                            class="false"
                            type="button"
                            data-bs-target="#ourTeamIndicator"
                            data-bs-slide-to="3"
                            aria-current="true"
                            aria-label="Our Team 3"
                        ></button>
                    </div>
                </div>
            </div>

        </div>
    </section>--}}

@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
@endpush
