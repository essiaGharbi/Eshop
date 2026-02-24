<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Male-Fashion | Template</title>

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
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    @include('components.guestheader')
    <!-- Header Section End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__text">
                        <div class="section-title">
                            <span>Information</span>
                            <h2>Contact Us</h2>
                            <p>As you might expect of a company that began as a high-end interiors contractor, we pay
                                strict attention.</p>
                        </div>
                        <ul>
                            <li>
                                <h4>Tunisia</h4>
                                <p>109 Avenue Habib Bourguiba, Tunis
                                    <br />+216 20-123-123
                                    <br />malefashion@example.com
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        @if (session('success'))
                            <p style="color:green;">{{ session('success') }}</p>
                        @endif
                        <form action="/contactus" method="POST">
                            @csrf
                            <input type="text" class="col-lg-5" name="name" placeholder="Name">
                            @error('name')
                                <div>{{ $message }}</div>
                            @enderror

                            <input type="email" class="col-lg-6" name="email" placeholder="Email">
                            @error('email')
                                <div>{{ $message }}</div>
                            @enderror

                            <input type="text" class="col-lg-12" name="subject" placeholder="Subject">
                            @error('subject')
                                <div>{{ $message }}</div>
                            @enderror

                            <textarea name="message" class="col-lg-12" placeholder="Message"></textarea>
                            @error('message')
                                <div>{{ $message }}</div>
                            @enderror

                            <button type="submit" class="site-btn">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

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
