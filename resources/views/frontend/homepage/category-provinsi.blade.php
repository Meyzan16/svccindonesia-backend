@extends('frontend.main.app')

@section('title')
    Destinasi {{ Request::segment(2) }}
@endsection

@push('prepend-style')
    <link href="/style/main.css" rel="stylesheet"/>
@endpush

@section('content')
    <div class="page-content page-home">
        <!-- About destinasi -->
        <section class="store-trend-categories">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-uppercase mb-3" data-aos="fade-up">
                        <h1>Tentang Wisata {{ Request::segment(2) }}</h1>
                    </div>
                    <div class="col-6 text-left">
                        <p>Jakarta, secara resmi bernama Daerah Khusus Ibukota Jakarta atau DKI Jakarta) adalah ibu kota
                            negara
                            dan kota terbesar di Indonesia. Jakarta merupakan satu-satunya kota di Indonesia yang
                            memiliki status setingkat provinsi.
                            Jakarta terletak di pesisir bagian barat laut Pulau Jawa. Dahulu pernah dikenal dengan
                            beberapa nama di antaranya Sunda Kelapa, Jayakarta, dan Batavia.
                            Di dunia internasional Jakarta juga mempunyai julukan J-Town, atau lebih populer lagi The
                            Big Durian karena dianggap kota yang sebanding New York City
                            (Big Apple) di Indonesia. Nah, bagaimana sejarah kota Jakarta sesungguhnya yuk id360tour
                            siap menemani kalian berkeliling
                            menjelajahi sejarah ibu kota kita.
                        </p>
                    </div>
                    <div class="col-6 justify-content-center d-flex">
                        <img src="/assets/img/destination/jakarta/jakarta-2.jpg"
                             alt="images"
                             class="w-75 h-75 bg-secondary rounded-2">
                    </div>
                </div>
            </div>
        </section>

        <!-- product -->
        <section class="store-new-products">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h2>Belajar Tempat Bersejarah</h2>
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
                            <a href="{{ route('detail',$product->slug) }}" class="component-products d-block">
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
                                {{--<div class="products-price">${{ $product->price  }}</div>--}}
                            </a>
                        </div>
                    @empty
                        <div class="col-12 text-center py-5" data-aos="fade-up" data-aos-delay="100">
                            No items found.
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

        <!-- categories -->
        <section class="store-trend-categories">
            <div class="container">
                <div class="row">
                    <div class="col-12" data-aos="fade-up">
                        <h5>Kategori Wisata Lainnya</h5>
                    </div>
                </div>

                <div class="row">
                    {{-- membuat angka dinamis untuk data ous delay --}}
                    @php
                        $incrementCategory = 0
                    @endphp

                    @forelse ($categori_provinsi as $category)
                        <div
                            class="col-6 col-md-3 col-lg-2"
                            data-aos="fade-up"
                            data-aos-delay="{{ $incrementCategory += 100 }}"
                        >
                            <a href="{{ route('category-provinsi-detail', $category->slug) }}"
                               class="component-categories d-block">
                                <div class="categories-image">
                                    <img src="{{ Storage::url($category->photo) }}" alt="" class="w-100"/>
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
    </div>
@endsection
