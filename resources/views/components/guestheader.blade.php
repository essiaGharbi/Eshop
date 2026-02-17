<style>
    /* Auth buttons container */
    .auth-buttons {
        display: flex;
        justify-content: flex-end;
        gap: 12px;
    }

    /* Base button style */
    .auth-buttons .btn {
        padding: 8px 18px;
        font-size: 14px;
        border-radius: 6px;
        transition: all 0.3s ease;
        font-weight: 500;
        text-decoration: none;
    }

    /* Login (outline) */
    .btn-login {
        color: #111;
        border: 1px solid #ddd;
        background: transparent;
    }

    .btn-login:hover {
        background: #f5f5f5;
        border-color: #bbb;
    }

    /* Register (primary CTA) */
    .btn-register {
        background: #111;
        color: #fff;
        border: 1px solid #111;
    }

    .btn-register:hover {
        background: #333;
        border-color: #333;
    }

    /* Dashboard button */
    .btn-dashboard {
        background: #111;
        color: #fff;
        border: 1px solid #111;
    }

    .btn-dashboard:hover {
        background: #333;
        border-color: #333;
    }

    /* Mobile */
    @media (max-width: 991px) {
        .auth-buttons {
            justify-content: center;
            margin-top: 10px;
        }
    }
</style>


<header class="header">
    <div class="container">
        <div class="row align-items-center">
            <!-- Logo -->
            <div class="col-lg-3 col-md-3">
                <div class="header__logo">
                    <a href="/">
                        <img src="{{ asset('guestassets/img/logo.png') }}" alt="Logo">
                    </a>
                </div>
            </div>
            <!-- Menu principal -->
            <div class="col-lg-6 col-md-6">
                <nav class="header__menu mobile-menu text-center">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/shop">Shop</a></li>
                        <li><a href="/blog">Blog</a></li>
                        <li><a href="/contact">Contacts</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Auth buttons -->
            <div class="col-lg-3 col-md-3 text-end">
                @if (Route::has('login'))
                    <div class="auth-buttons">
                        @auth
                            <a href="{{ url('/client/dashboard') }}" class="btn btn-dashboard">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-login">
                                Log in
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-register">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>

        </div>

        <!-- Mobile menu icon -->
        <div class="canvas__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
