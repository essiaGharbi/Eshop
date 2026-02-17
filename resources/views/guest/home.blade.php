<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('guestassets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('guestassets/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('guestassets/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('guestassets/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('guestassets/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('guestassets/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('guestassets/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('guestassets/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('guestassets/css/stylenav.css') }}" type="text/css">
</head>

<body>
    <!-- Header Section Begin -->
    @include('components.guestheader')
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="{{ asset('guestassets/img/hero/hero-1.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-7">
                            <div class="hero__text">
                                <h2>Collections 2026</h2>
                                <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                    commitment to exceptional quality.</p>
                                <a href="/shop" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="{{ asset('guestassets/img/hero/hero-2.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-7">
                            <div class="hero__text">
                                <h2>Collections 2026</h2>
                                <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                    commitment to exceptional quality.</p>
                                <a href="#" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad mt-1">
        <div class="container">
            <div class="section-title text-center">
                <h2>Our products</h2>
            </div>
            <div class="row">
                @forelse ($products as $prod)
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                        <div class="product__item shadow-sm p-2 rounded">
                            <div class="product__item__pic">
                                <img src="{{ asset('uploads/' . ($prod->picture ?? 'default.png')) }}"
                                    alt="{{ $prod->name }}" class="img-fluid" loading="lazy">
                            </div>
                            <div class="product__item__text text-center mt-2">
                                <h6>{{ $prod->name }}</h6>
                                <h5 class="text-primary">{{ number_format($prod->price, 2) }} TND</h5>
                                <div class="d-flex justify-content-center gap-2 mt-2">
                                    <a href="/product/details/{{ $prod->id }}" class="add-cart"><i
                                            class="fa fa-eye"></i> View details</a>
                                    <form action="" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $prod->id }}">
                                        <button type="submit" class="btn btn-sm btn-dark">
                                            Add to cart
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>Aucun produit disponible pour le moment.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="instagram__pic">
                        <div class="instagram__pic__item set-bg"
                            data-setbg="{{ asset('guestassets/img/instagram/instagram-1.jpg') }}"></div>
                        <div class="instagram__pic__item set-bg"
                            data-setbg="{{ asset('guestassets/img/instagram/instagram-2.jpg') }}"></div>
                        <div class="instagram__pic__item set-bg"
                            data-setbg="{{ asset('guestassets/img/instagram/instagram-3.jpg') }}"></div>
                        <div class="instagram__pic__item set-bg"
                            data-setbg="{{ asset('guestassets/img/instagram/instagram-4.jpg') }}"></div>
                        <div class="instagram__pic__item set-bg"
                            data-setbg="{{ asset('guestassets/img/instagram/instagram-5.jpg') }}"></div>
                        <div class="instagram__pic__item set-bg"
                            data-setbg="{{ asset('guestassets/img/instagram/instagram-6.jpg') }}"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="instagram__text">
                        <h2>Instagram</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                        <h3>#Male_Fashion</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Latest News</span>
                        <h2>Fashion New Trends</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg"
                            data-setbg="{{ asset('guestassets/img/blog/blog-1.jpg') }}"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt=""> 16 February 2020</span>
                            <h5>What Curling Irons Are The Best Ones</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg"
                            data-setbg="{{ asset('guestassets/img/blog/blog-2.jpg') }}"></div>
                        <div class="blog__item__text">
                            <span><img src="{{ asset('guestassets/img/icon/calendar.png') }}" alt=""> 21
                                February 2020</span>
                            <h5>Eternity Bands Do Last Forever</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg"
                            data-setbg="{{ asset('guestassets/img/blog/blog-3.jpg') }}"></div>
                        <div class="blog__item__text">
                            <span><img src="{{ asset('guestassets/img/icon/calendar.png') }}" alt=""> 28
                                February 2020</span>
                            <h5>The Health Benefits Of Sunglasses</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Footer Section Begin -->
    @include('components.guestfooter')
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="{{ asset('guestassets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('guestassets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('guestassets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('guestassets/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('guestassets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('guestassets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('guestassets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('guestassets/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('guestassets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('guestassets/js/main.js') }}"></script>
</body>

</html>
