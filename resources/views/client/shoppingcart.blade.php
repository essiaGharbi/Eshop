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

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shopping Cart</h4>
                        <div class="breadcrumb__links">
                            <a href="./index.html">Home</a>
                            <a href="./shop.html">Shop</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($commande->lignecommandes as $lc)
                                    <tr>
                                        <td class="product__cart__item">
                                            <div class="product__cart__item__pic">
                                                <img src="{{ asset('uploads') }}/{{ $lc->product->picture }}"
                                                    alt="" style="width: 80px">
                                            </div>
                                            <div class="product__cart__item__text">
                                                <h6>{{ $lc->product->name }}</h6>
                                                <h5>{{ $lc->product->price }} TND</h5>
                                            </div>
                                        </td>
                                        <td class="product__cart__item__text">
                                            <h6>{{ $lc->quantity }}</h6>
                                        </td>
                                        <td class="cart__price">{{ $lc->product->price * $lc->quantity }}</td>
                                        <td class="cart__close">
                                            <a onclick="return confirm('Are you sure ?')"
                                                href="/client/lc/{{ $lc->id }}/delete"><i
                                                    class="fa fa-close"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4">
                    <form action="/client/checkout" method="post">
                        @csrf
                        <input type="hidden" name="commande" value="{{ $commande->id }}">
                        <div class="cart__total">
                            <h6>Cart total</h6>
                            <ul>
                                <li>Subtotal <span>{{ $commande->total() }} TND</span></li>
                                <li>Shipping <span>8 TND</span></li>
                                <li>Total <span>{{ $commande->total() + 8 }} TND</span></li>
                            </ul>
                            <button type="submit" class="primary-btn">Proceed to checkout</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

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
