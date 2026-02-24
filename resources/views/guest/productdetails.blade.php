<!DOCTYPE html>
<html lang="fr">

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

    <!-- Shop Details Section Begin -->
    <section class="shop-details">
        <div class="product__details__pic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__breadcrumb">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a><span>Product Details</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                    </div>
                    <div class="col-lg-6 col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__pic__item">
                                    <img src="{{ asset('uploads/' . $products->picture) }}" style="width: 300px"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__details__content">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="product__details__text">
                            <h4>{{ $products->name }}</h4>
                            @if (count($products->reviews) == 0)
                                <div class="rating">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span> - 0 Reviews</span>
                                </div>
                            @else
                                <div class="rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span> - {{ count($products->reviews) }} Reviews</span>

                                </div>
                            @endif
                            <h3>{{ $products->price }} TND</h3>
                            <form action="/client/order/store" method="POST">
                                @csrf
                                <input type="hidden" value="{{ $products->id }}" name="idproduct">
                                <div class="product__details__cart__option">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1" name="quantity">
                                        </div>
                                    </div>
                                    <button type="submit" class="primary-btn">Add to cart</button>
                                </div>
                            </form>
                            <div class="product__details__last__option">
                                <h5><span>Guaranteed Safe Checkout</span></h5>
                                <img src="{{ asset('guestassets/img/shop-details/details-payment.png') }}"
                                    alt="">
                            </div>
                            <div class="product__details__option">
                                <form action="/client/review/store" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $products->id }}" name="product_id">
                                    <div class="form-group">
                                        <label class="">Your rating</label>
                                        <input type="number" max="5" min="1" class="form-control"
                                            placeholder="Your rating..." name="rate">
                                    </div>
                                    <div class="form-group">
                                        <label class="">Your review</label>
                                        <textarea cols="30" rows="5" name="content" class="form-control" placeholder="Your review..."></textarea>
                                    </div>
                                    <div class="form-group mb-0">
                                        <input type="submit" value="Leave your review" class="btn btn-primary px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-reviews"
                                        role="tab">Reviews</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-reviews" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        @foreach ($products->reviews as $review)
                                            <div class="product__details__tab__content__item">
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <img style="width: 50px"
                                                            src="{{ asset('mainassets/images/avatar/1.png') }}"
                                                            alt="user-image" class="img-fluid user-avtar" />
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h6>{{ $review->user->name }} **
                                                            {{ $review->user->created_at }}
                                                        </h6>
                                                        <div class="text-primary mb-2">
                                                            @for ($i = 0; $i < $review->rate; $i++)
                                                                <i class="fa fa-star"></i>
                                                            @endfor
                                                        </div>
                                                        <p>{{ $review->content }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-description"
                                        role="tab">Description</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-description" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <div class="product__details__tab__content__item">
                                            <h5>Product Infomations</h5>
                                            <p>{{ $products->description }}.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Details Section End -->

    <!-- Related Section Begin -->
    <section class="related spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="related-title">Related Product</h3>
                </div>
            </div>
            <div class="row">
                @foreach ($prod as $p)
                    <div class="col-lg-3 col-md-6 col-sm-6 mix new-arrivals">
                        <div class="product__item">
                            <div class="product__item__pic set-bg"
                                data-setbg="{{ asset('uploads') }}/{{ $p->picture }}">
                            </div>
                            <div class="product__item__text">
                                <h6>{{ $p->name }}</h6>
                                <a href="#" class="add-cart">+ Add To Cart</a>
                                <h5>{{ $p->price }} TND</h5>
                            </div>
                            <a href="/product/details/{{ $p->id }}" class="btn btn-sm text-dark p-0"><i
                                    class="fa fa-eye text-primary mr-1">View details</i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Related Section End -->

    <!-- Footer Section Begin -->
    @include('components.guestfooter')
    <!-- Footer Section End -->

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
