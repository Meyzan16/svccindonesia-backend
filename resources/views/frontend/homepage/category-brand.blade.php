@extends('frontend.main.app')

@section('title')
    Category Brand
@endsection

@push('prepend-style')
<link href="/style/main.css" rel="stylesheet" />
@endpush

@section('content')
<div class="page-content page-home">
    <!-- categories -->
    <section class="store-trend-categories">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <h1>Browse souvenir by their category.</h1>
                    <h5>Kategori</h5>
          </div>
        </div>

        <div class="row">
          {{-- membuat angka dinamis untuk data ous delay --}}
          @php
              $incrementCategory = 0
          @endphp

          @forelse ($categories as $category)
            <div
              class="col-6 col-md-3 col-lg-2"
              data-aos="fade-up"
              data-aos-delay="{{ $incrementCategory += 100 }}"
                >
              <a href="{{ route('category-brand-detail', $category->slug) }}" class="component-categories d-block">
                <div class="categories-image">
                  <img src="{{ Storage::url($category->photo) }}" alt="" class="w-100" />
                </div>
                <p class="categories-text">{{ $category->name }}</p>
              </a>
            </div>
          @empty
              <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                No Categories Found
              </div>
          @endforelse

        </div>
      </div>
    </section>

    <!-- product -->
    <section class="store-new-products">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
              <h1>Browse all available products.</h1>
            <h5>Produk {{ Request::segment(2) }} </h5>
          </div>
        </div>

        <div class="row">
          @php
              $incrementProduct= 0
          @endphp

          @forelse ($products as $product)
            <div
              class="col-6 col-md-4 col-lg-3"
              data-aos="fade-up"
              data-aos-delay="{{ $incrementProduct+= 100 }}"
                >
              <a href="#" class="component-products d-block">
                <div class="products-thumbnail">
                  <div
                    class="products-image"

                    style="

                      @if($product->gallaries)
                        background-image: url('{{ Storage::url($product->gallaries->first()->photos) }}')
                      @else
                        background-color: #eee
                      @endif
                    "
                  ></div>
                </div>
                <div class="products-text">{{ $product->name }}</div>
                <div class="products-price">${{ $product->price  }}</div>
              </a>
            </div>
          @empty
          <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
            No Product Found
          </div>
          @endforelse

        </div>

          <div class="row">
            <div class="col-12 mt-4">
              {{ $products->links() }}
            </div>
          </div>
      </div>
    </section>
</div>
@endsection
