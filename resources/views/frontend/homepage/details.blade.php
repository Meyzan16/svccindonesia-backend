@extends('frontend.main.app')

@section('title')
    Detail Product
@endsection

@push('prepend-style')
<link href="/style/main.css" rel="stylesheet" />
@endpush

@section('content')
<div class="page-content page-details">
    <!-- breadcrumbs -->
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="/index.html"> Home </a>
                </li>
                <li class="breadcrumb-item active">
                  Product Details
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <!-- detail gambar -->
    <section class="store-gallery mb-3" id="gallery">
      <div class="container">
        <div class="row">

          <div class="col-lg-8" data-aos="zoom-in">
            <transition name="slide-fade" mode="out-in">
              <!-- sebuah elemen membutuhkan key -->
              <img :src="photos[activePhoto].url" :key="photos[activePhoto].id"   
              class="w-100 main-image" alt="">
            </transition>

          </div>
          <div class="col-lg-2">
            <div class="row">
              <!-- fungsi v-for untuk looping dari data yang ada di vue js -->
              <div class="col-3 col-lg-12 mt-2 mt-lg-0" v-for="(photo, index) in photos"
               :key="index.id" data-aos="zoom-in" data-aos-delay="100"> 
              <a href="#" @click="changeActive(index)">
                <img v-bind:src="photo.url" class="w-100 thumbnail-image" :class="{active:index == activePhoto}">
              </a>
              </div>
            </div>
          </div> 

        </div>
      </div>
    </section>

   
    <div class="store-details-container" data-aos="fade-up">
       <!-- Heading -->
      <section class="store-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <h1> {{ $product->name }}</h1>
              <div class="owner">{{ $product->user->store_name }}</div>
              <div class="price">${{ number_format($product->price) }}</div>
            </div>
            <div class="col-lg-2" data-aos="zoom-in">
            {{-- @auth --}}
            <form action="#" method="POST" enctype="multipart/form-data">
              @csrf
                <button
                  type="submit" class="btn btn-success px-4 text-white btn-block mb-3">
                  Add to Card
                </button>
            </form>
            {{-- @else
            <a
                href="#" class="btn btn-success px-4 text-white btn-block mb-3">
                  Sign in to add
            </a> --}}
            {{-- @endauth --}}
            </div>
          </div>
        </div>
      </section>
      <!-- deskripsi -->
      <section class="store-description">
         <div class="container">
           <div class="row">
             <div class="col-12 col-lg-8">
               {!! $product->description !!}
               </p>
             </div>
           </div>
         </div>
      </section>

      <section class="store-review">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-8 mt-3 mb-3">
              <h5>Costomer Review(3 )</h5>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-8">
              <ul class="list-unstyled">
                <li class="media">
                  <img src="/images/review-product/1.png" class="mr-3 rounded-circle" alt="">
                  <div class="media-body">
                    <h5 class="mt-2 mb-1">Hazza Risky</h5>
                    I thought it was not good for living room. I really happy
                    to decided buy this product last week now feels like homey.
                  </div>
                </li>

                <li class="media">
                  <img src="/images/review-product/2.png" class="mr-3 rounded-circle" alt="">
                  <div class="media-body">
                    <h5 class="mt-2 mb-1">Hazza Risky</h5>
                    I thought it was not good for living room. I really happy
                    to decided buy this product last week now feels like homey.
                  </div>
                </li>

                <li class="media">
                  <img src="/images/review-product/3.png" class="mr-3 rounded-circle" alt="">
                  <div class="media-body">
                    <h5 class="mt-2 mb-1">Hazza Risky</h5>
                    I thought it was not good for living room. I really happy
                    to decided buy this product last week now feels like homey.
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </div>

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
            id:"{{ $gallery->id }}",
            url: "{{ Storage::url($gallery->photos) }}",
          },
        @endforeach     
      ],
    },
    //methode menyimpan fungsi2 di vue
    methods:{
      changeActive(id) {
        this.activePhoto = id; 
      },
    },
  });
</script>
@endpush