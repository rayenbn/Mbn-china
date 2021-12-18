@extends('layouts.theme')
@section('content')

<div class="page-content">
    <main class="main-content">
        @include('partials.slider', $sliders)
        
        <section class="section-featured-icons">
            <div class="container">
                <h2 class="screen-reader-text">Our features</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="icon-box icon-box-left icon-box-circle justify-content-sm-center">
                            <div class="icon-box__icon"><i class="flaticon flaticon-delivery-truck"></i></div>
                            <div class="icon-box__title">Delivery to all regions</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box icon-box-left icon-box-circle justify-content-sm-center">
                            <div class="icon-box__icon"><i class="flaticon flaticon-sales-ticket"></i></div>
                            <div class="icon-box__title">Build your Vape!</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="icon-box icon-box-left icon-box-circle justify-content-sm-center">
                            <div class="icon-box__icon"><i class="flaticon flaticon-thumb-up-gesture"></i></div>
                            <div class="icon-box__title">The highest quality of products</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="promo-section" id="scroll-to">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-5 promo-section__img">
                        <img src="{{ asset('img/blue-t2.jpg') }}" alt="">
                    </div>
                    <div class="col-lg-7 promo-section__card">
                        <div class="promo-card">
                            <a href="/our-products/2-pufflex-ladies-serie-600-4000-puffs">
                                <img src="{{ asset('img/ladies-sery-coll-bg2.jpg') }}" alt="" class="promo-card__img">
                            </a>
                            <div class="promo-card__content">
                                <h2 class="promo-card__title"><a href="/our-products/2-pufflex-ladies-serie-600-4000-puffs">PUFFLEX LADIES SERIE 600-4000 Puffs</a></h2>
                                <div class="promo-card__text">Disposable Vape Pods, Style and functionality go hand in hand</div>
                                <div class="promo-card__text">PFL series is designed for ladies</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="promo-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 promo-section__card">
                        <div class="promo-card promo-card-offset-left">
                            <a href="/our-products/2-pufflex-ladies-serie-600-4000-puffs">
                                <img src="{{ asset('img/femini-multi-color-banner.jpg') }}" alt="" class="promo-card__img">
                            </a>
                            <div class="promo-card__content">
                                <h2 class="promo-card__title"><a href="/our-products/2-pufflex-ladies-serie-600-4000-puffs">PFLS Disposable & Reusable cigarette</a></h2>
                                <div class="promo-card__text">Disposable oil holder part<br>Reusable battery</div>
                                <a href="/our-products/2-pufflex-ladies-serie-600-4000-puffs" class="btn btn-primary btn-lg">discover</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 promo-section__img">
                        <img src="{{ asset('img/lady-series-bg.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        
        <section class="promo-section">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-lg-5 promo-section__img">
                        <img src="{{ asset('img/squear-pufflex1.jpg') }}" alt="">
                    </div>
                    <div class="col-lg-7 promo-section__card">
                        <div class="promo-card">
                            <a href="single-product.html">
                                <img src="{{ asset('img/square-4.jpg') }}" alt="" class="promo-card__img">
                            </a>
                            <div class="promo-card__content">
                                <h2 class="promo-card__title"><a href="single-product.html">PUFFLEX LADIES SERIE 600-4000 Puffs</a></h2>
                                <div class="promo-card__text">Disposable Vape Pods, Style and functionality go hand in hand</div>
                                <div class="promo-card__text">PFL series is designed for ladies</div>
                                <a href="single-product.html" class="btn btn-primary btn-lg">discover</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{--
        <section class="section-offers">
            <div class="container">
                <h2 class="screen-reader-text">Offers</h2>
                <div class="row">
                    <div class="col-md-7">
                        <div class="offer-box">
                            <img class="offer-box__bg" src="images/670x470.png" alt="">
                            <div class="offer-box__body">
                                <div class="offer-box__title">S1 table</div>
                                <a href="single-product.html" class="btn btn-outline-dark btn-lg">buy $29.99</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <a href="shop.html" class="offer-box offer-box-sm">
                            <img class="offer-box__bg" src="images/470x220.png" alt="">
                            <div class="offer-box__body">
                                <div class="offer-box__title">
                                    <span class="offer-percent">50%</span>
                                    sale
                                </div>
                            </div>
                        </a>
                        <a href="shop.html" class="offer-box offer-box-sm">
                            <img class="offer-box__bg" src="images/470x220.png" alt="">
                            <div class="offer-box__body">
                                <div class="offer-box__title">Airshelf</div>
                            </div>
                        </a>
                    </div>
                </div> <!-- end of featured -->
            </div>
        </section>
        
        <section class="section-featured-products">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="h3 section-title__heading">Featured products</h2>
                </div>
                <ul class="products featured-products columns-4">
                    <li class="product">
                        <div class="product-thumb">
                            <span class="onsale">-30%</span>
                            <a href="single-product.html" class="product-thumb__link">
                                <img src="images/270x380.png" alt="">
                                <span class="btn btn-outline-light shop-link">Shop</span>
                            </a>
                        </div>
                        <div class="product-title"><a href="single-product.html">Cogen warm lamp</a></div>
                        <div class="price">
                            <ins><span class="amount">$56.00</span></ins>
                            <del><span class="amount">$73.00</span></del>
                        </div>
                    </li>
                    <li class="product">
                        <div class="product-thumb">
                            <a href="single-product.html" class="product-thumb__link">
                                <img src="images/270x380.png" alt="">
                                <span class="btn btn-outline-light shop-link">Shop</span>
                            </a>
                        </div>
                        <div class="product-title"><a href="single-product.html">Dutch grey bag</a></div>
                        <div class="price">
                            <span class="amount">$33.00</span>
                        </div>
                    </li>
                    <li class="product">
                        <div class="product-thumb">
                            <a href="single-product.html" class="product-thumb__link">
                                <img src="images/270x380.png" alt="">
                                <span class="btn btn-outline-light shop-link">Shop</span>
                            </a>
                        </div>
                        <div class="product-title"><a href="single-product.html">Wood tablet deck</a></div>
                        <div class="price">
                            <span class="amount">$30.00</span>
                        </div>
                    </li>
                    <li class="product">
                        <div class="product-thumb">
                            <a href="single-product.html" class="product-thumb__link">
                                <img src="images/270x380.png" alt="">
                                <span class="btn btn-outline-light shop-link">Shop</span>
                            </a>
                        </div>
                        <div class="product-title"><a href="single-product.html">Roniq watch</a></div>
                        <div class="price">
                            <span class="amount">$128.00</span>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        --}}
        {{--
        <section class="section-last-posts">
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="h3 section-title__heading">From the blog</h2>
                </div>

                <div class="post-grid row">
                @foreach($blogs as $key => $blog)
                    <div class="col-lg-4 col-md-6">
                        <article class="post-item">
                            <a href="{{ $blog->path() }}" class="post-thumb">
                                <img src="../storage/blogs/thumbnail/{{ $blog->image }}" alt="">
                            </a>
                            <div class="post-item__content">
                                <div class="post-date">{{ $blog->created_at->diffForHumans() }}</div>
                                <h3 class="post-title"><a href="{{ $blog->path() }}">{{ $blog->title ?? ''}}</a></h3>
                            </div>
                        </article>
                    </div>
                @endforeach 
                   
                </div>
                <div class="text-center mt-lg-4">
                    <a href="{{ route('blogs') }}" class="btn btn-outline-primary btn-lg">View all posts</a>
                </div>
            </div>
        </section>
--}}
        <!-- Call Action -->
        @include('frontend.components.newsletter')
            <!-- End Section -->
    </main> <!-- end of main -->
</div>
@endsection