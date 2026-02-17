<header class="nxl-header">
    <div class="header-wrapper">
        <!--! [Start] Header Left !-->
        <div class="header-left d-flex align-items-center gap-4">
            <!--! [Start] nxl-head-mobile-toggler !-->
            <a href="javascript:void(0);" class="nxl-head-mobile-toggler" id="mobile-collapse">
                <div class="hamburger hamburger--arrowturn">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </a>
            <!--! [Start] nxl-head-mobile-toggler !-->
            <!--! [Start] nxl-navigation-toggle !-->
            <div class="nxl-navigation-toggle">
                <a href="javascript:void(0);" id="menu-mini-button">
                    <i class="feather-align-left"></i>
                </a>
                <a href="javascript:void(0);" id="menu-expend-button" style="display: none">
                    <i class="feather-arrow-right"></i>
                </a>
            </div>
            <!--! [End] nxl-navigation-toggle !-->
            <!--! [Start] nxl-lavel-mega-menu-toggle !-->
            <div class="nxl-lavel-mega-menu-toggle d-flex d-lg-none">
                <a href="javascript:void(0);" id="nxl-lavel-mega-menu-open">
                    <i class="feather-align-left"></i>
                </a>
            </div>
            <!--! [End] nxl-lavel-mega-menu-toggle !-->
        </div>
        <!--! [End] Header Left !-->
        <!--! [Start] Header Right !-->
        <div class="header-right ms-auto">
            <div class="d-flex align-items-center">
                {{-- Search --}}
                <div class="dropdown nxl-h-item nxl-header-search">
                    <a href="javascript:void(0);" class="nxl-head-link me-0" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside">
                        <i class="feather-search"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-search-dropdown">
                        <div class="input-group search-form">
                            <span class="input-group-text">
                                <i class="feather-search fs-6 text-muted"></i>
                            </span>
                            <input type="text" class="form-control search-input-field" placeholder="Search...." />
                            <span class="input-group-text">
                                <button type="button" class="btn-close"></button>
                            </span>
                        </div>
                    </div>
                </div>
                {{-- languages --}}
                <div class="dropdown nxl-h-item nxl-header-language d-none d-sm-flex">
                    <a href="javascript:void(0);" class="nxl-head-link me-0 nxl-language-link" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside">
                        <img src="{{ asset('mainassets/vendors/img/flags/4x3/us.svg') }}" alt=""
                            class="img-fluid wd-20" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-language-dropdown">
                        <div class="dropdown-divider mt-0"></div>
                        <div class="language-items-wrapper">
                            <div class="select-language px-4 py-2 hstack justify-content-between gap-4">
                                <div class="lh-lg">
                                    <h6 class="mb-0">Select Language</h6>
                                    <p class="fs-11 text-muted mb-0">12 languages avaiable!</p>
                                </div>
                                <a href="javascript:void(0);" class="avatar-text avatar-md" data-bs-toggle="tooltip"
                                    title="Add Language">
                                    <i class="feather-plus"></i>
                                </a>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="row px-4 pt-3">
                                <div class="col-sm-4 col-6 language_select">
                                    <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                        <div class="avatar-image avatar-sm"><img
                                                src="assets/vendors/img/flags/1x1/sa.svg" alt=""
                                                class="img-fluid" /></div>
                                        <span>Arabic</span>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-6 language_select">
                                    <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                        <div class="avatar-image avatar-sm"><img
                                                src="assets/vendors/img/flags/1x1/bd.svg" alt=""
                                                class="img-fluid" /></div>
                                        <span>Bengali</span>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-6 language_select">
                                    <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                        <div class="avatar-image avatar-sm"><img
                                                src="assets/vendors/img/flags/1x1/ch.svg" alt=""
                                                class="img-fluid" /></div>
                                        <span>Chinese</span>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-6 language_select">
                                    <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                        <div class="avatar-image avatar-sm"><img
                                                src="assets/vendors/img/flags/1x1/nl.svg" alt=""
                                                class="img-fluid" /></div>
                                        <span>Dutch</span>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-6 language_select active">
                                    <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                        <div class="avatar-image avatar-sm"><img
                                                src="assets/vendors/img/flags/1x1/us.svg" alt=""
                                                class="img-fluid" /></div>
                                        <span>English</span>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-6 language_select">
                                    <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                        <div class="avatar-image avatar-sm"><img
                                                src="assets/vendors/img/flags/1x1/fr.svg" alt=""
                                                class="img-fluid" /></div>
                                        <span>French</span>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-6 language_select">
                                    <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                        <div class="avatar-image avatar-sm"><img
                                                src="assets/vendors/img/flags/1x1/de.svg" alt=""
                                                class="img-fluid" /></div>
                                        <span>German</span>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-6 language_select">
                                    <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                        <div class="avatar-image avatar-sm"><img
                                                src="assets/vendors/img/flags/1x1/in.svg" alt=""
                                                class="img-fluid" /></div>
                                        <span>Hindi</span>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-6 language_select">
                                    <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                        <div class="avatar-image avatar-sm"><img
                                                src="assets/vendors/img/flags/1x1/ru.svg" alt=""
                                                class="img-fluid" /></div>
                                        <span>Russian</span>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-6 language_select">
                                    <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                        <div class="avatar-image avatar-sm"><img
                                                src="assets/vendors/img/flags/1x1/es.svg" alt=""
                                                class="img-fluid" /></div>
                                        <span>Spanish</span>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-6 language_select">
                                    <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                        <div class="avatar-image avatar-sm"><img
                                                src="assets/vendors/img/flags/1x1/tr.svg" alt=""
                                                class="img-fluid" /></div>
                                        <span>Turkish</span>
                                    </a>
                                </div>
                                <div class="col-sm-4 col-6 language_select">
                                    <a href="javascript:void(0);" class="d-flex align-items-center gap-2">
                                        <div class="avatar-image avatar-sm"><img
                                                src="assets/vendors/img/flags/1x1/pk.svg" alt=""
                                                class="img-fluid" /></div>
                                        <span>Urdo</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nxl-h-item d-none d-sm-flex">
                    <div class="full-screen-switcher">
                        <a href="javascript:void(0);" class="nxl-head-link me-0"
                            onclick="$('body').fullScreenHelper('toggle');">
                            <i class="feather-maximize maximize"></i>
                            <i class="feather-minimize minimize"></i>
                        </a>
                    </div>
                </div>
                <div class="nxl-h-item dark-light-theme">
                    <a href="javascript:void(0);" class="nxl-head-link me-0 dark-button">
                        <i class="feather-moon"></i>
                    </a>
                    <a href="javascript:void(0);" class="nxl-head-link me-0 light-button" style="display: none">
                        <i class="feather-sun"></i>
                    </a>
                </div>
                {{-- profile menu --}}
                <div class="dropdown nxl-h-item">
                    <a href="javascript:void(0);" data-bs-toggle="dropdown" role="button"
                        data-bs-auto-close="outside">
                        <img src="{{ asset('mainassets/images/avatar/1.png') }}" alt="user-image"
                            class="img-fluid user-avtar me-0" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-end nxl-h-dropdown nxl-user-dropdown">
                        <div class="dropdown-header">
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('mainassets/images/avatar/1.png') }}" alt="user-image"
                                    class="img-fluid user-avtar" />
                                <div>
                                    @auth
                                        <h6 class="text-dark mb-0">{{ Auth::user()->name }}</h6>
                                        <span class="fs-12 fw-medium text-muted">{{ Auth::user()->email }}</span>
                                    @endauth
                                </div>
                            </div>
                        </div>
                        <a href="/client/profile" class="dropdown-item">
                            <i class="feather-user"></i>
                            <span>Profile Details</span>
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <i class="feather-bell"></i>
                            <span>Notifications</span>
                        </a>
                        <a href="javascript:void(0);" class="dropdown-item">
                            <i class="feather-settings"></i>
                            <span>Account Settings</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger ms-2">
                                <i class="feather-log-out"></i>Logout
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--! [End] Header Right !-->
    </div>
</header>
