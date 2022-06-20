@extends('frontend.main.app')

@section('title')
    Detail Product
@endsection

@push('prepend-style')
    <link href="/style/main.css" rel="stylesheet"/>
@endpush

@section('content')
    <div class="page-content page-details">

        <section class="store-gallery" id="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-12 justify-content-start mb-4">
                        <h1 class="text-uppercase">{{ $product->name }}</h1>
                        <div class="owner">Terletak di <span class="text-kuning"> {{ $product->user->store_name }}</span></div>
                        {{--<h4 class="text-kuning mt-2">IDR {{ number_format($product->price) }}</h4>--}}
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-8" data-aos="zoom-in">
                        <transition name="slide-fade" mode="out-in">
                            <!-- sebuah elemen membutuhkan key -->
                            <img :src="photos[activePhoto].url"
                                 :key="photos[activePhoto].id"
                                 style="background-size: cover; max-width: 90%; max-height: 550px; min-width: 90%;min-height: 100%;"
                                 alt=" {{ $product->name }}">
                        </transition>
                    </div>
                    <div class="col-2">
                        <div class="row">
                            <!-- fungsi v-for untuk looping dari data yang ada di vue js -->
                            <div class="col-3 col-lg-12 mt-2 mt-lg-0" v-for="(photo, index) in photos"
                                 :key="index.id" data-aos="zoom-in" data-aos-delay="100">
                                <a href="#" @click="changeActive(index)">
                                    <img v-bind:src="photo.url"
                                         class="w-100 h-100 thumbnail-image"
                                         style="min-height: 150px"
                                         :class="{active:index == activePhoto}">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container px-6" data-aos="fade-up">
            <hr style="padding: 1pt">
            <!-- Heading -->
            <div class="store-heading">
                <div class="row">
                    <div class="col-8">
                        <h1 class="text-uppercase fw-bold"> {{ $product->name }}</h1>
                        <div class="owner">Terletak di <span class="text-kuning"> {{ $product->user->store_name }}</span></div>
                        {{--<p class="price">IDR {{ number_format($product->price) }}</p>--}}
                        {{--<p class="">stock <span class="text-kuning">10</span></p>--}}
                    </div>
                    <div class="col-4 justify-content-center d-flex">
                        {{-- @auth --}}
                        {{--<form action="#" method="POST" enctype="multipart/form-data">
                            @csrf
                            <button type="submit" class="btn btn-success rounded-1 px-4 text-white btn-block mb-3">
                                Masukkan <br> Keranjang
                            </button>
                        </form>--}}
                        {{-- @else
                        <a
                            href="#" class="btn btn-success px-4 text-white btn-block mb-3">
                              Sign in to add
                        </a> --}}
                        {{-- @endauth --}}
                    </div>
                </div>

            </div>
            <!-- deskripsi -->
            <div class="store-description">
                <h5 class="mt-4 fw-bold">Deskripsi</h5>
                <p>{!! $product->description !!}</p>
            </div>

        </div>

        <{{--section id="customer-review">
            <div class="store-review">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-8 mb-3">
                            <h5>Customer Review (3)</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <ul class="list-unstyled">
                                <li class="media">
                                    <img src="/images/review-product/1.png" class="mr-3 rounded-circle" alt="">
                                    <div class="media-body">
                                        <h5 class="mt-2 mb-1">Hazza Risky</h5>
                                        Keren! Keren! Keren!
                                    </div>
                                </li>

                                <li class="media">
                                    <img src="/images/review-product/2.png" class="mr-3 rounded-circle" alt="">
                                    <div class="media-body">
                                        <h5 class="mt-2 mb-1">Hazza Risky</h5>
                                        Keren! Keren! Keren!
                                    </div>
                                </li>

                                <li class="media">
                                    <img src="/images/review-product/3.png" class="mr-3 rounded-circle" alt="">
                                    <div class="media-body">
                                        <h5 class="mt-2 mb-1">Hazza Risky</h5>
                                        Keren! Keren! Keren!
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>--}}

    </div>
@endsection

@push('addon-script')
    <script src="/vendor/vue/vue.js"></script>
    <script>
        var gallery = new Vue({
            el: "#gallery", //membuat elemen dengan id gallery yang mana di hande oleh vue js
            mounted() { //
                AOS.init();
            },
            //vueJs berjalan di client server
            data: {
                activePhoto: 0, //array ke barapa photo nya aktif, photo simpan ke dalam array
                photos: [
                        @foreach($product->Gallaries as $gallery)
                    {
                        id: "{{ $gallery->id }}",
                        url: "{{ Storage::url($gallery->photos) }}",
                    },
                    @endforeach
                ],
            },
            //methode menyimpan fungsi2 di vue
            methods: {
                changeActive(id) {
                    this.activePhoto = id;
                },
            },
        });
    </script>
@endpush
