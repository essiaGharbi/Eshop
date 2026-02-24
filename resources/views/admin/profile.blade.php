<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="flexilecode" />
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>Admin || Profile</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('mainassets/images/favicon.ico') }}" />
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('mainassets/css/bootstrap.min.css') }}" />
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('mainassets/vendors/css/vendors.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('mainassets/vendors/css/daterangepicker.min.css') }}" />
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('mainassets/css/theme.min.css') }}" />
    <!--! END: Custom CSS-->
    <!--! HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries !-->
    <!--! WARNING: Respond.js doesn"t work if you view the page via file: !-->
    <!--[if lt IE 9]>
   <script src="https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
   <script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>
    <!--! ================================================================ !-->
    <!--! [Start] Navigation Manu !-->
    <!--! ================================================================ !-->
    <nav class="nxl-navigation">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="/admin/dashboard" class="b-brand">
                    <!-- ========   change your logo hear   ============ -->
                    <img src="{{ asset('mainassets/images/logo-full.png') }}" alt="" class="logo logo-lg" />
                    <img src="{{ asset('mainassets/images/logo-abbr.png') }}" alt="" class="logo logo-sm" />
                </a>
            </div>
            @include('components.admin.sidebar')
        </div>
    </nav>
    <!--! ================================================================ !-->
    <!--! [End]  Navigation Manu !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Header !-->
    <!--! ================================================================ !-->
    @include('components.admin.navbar')
    <!--! ================================================================ !-->
    <!--! [End] Header !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Main Content !-->
    <!--! ================================================================ !-->
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Profile</h5>
                    </div>
                </div>
            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                @include('components.message')
                <div class="card col-6">
                    <div class="card-body">
                        <form method="POST" action="/admin/profile/updateprofile">
                            @csrf
                            <div class="form-group">
                                <label class="card-title" for="name">Name</label>
                                <input id="name" class="form-control" value="{{ auth::user()->name }}"
                                    type="text" name="name" />
                            </div>
                            <div class="form-group mt-4">
                                <label class="card-title" for="email">Email</label>
                                <input id="email" class="form-control" value="{{ auth::user()->email }}"
                                    type="email" name="email" />
                            </div>
                            <div class="form-group mt-4">
                                <label class="card-title" for="password">Password</label>
                                <input id="password" class="form-control" type="password" name="password" />
                            </div>
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </main>
    <!--! ================================================================ !-->
    <!--! [End] Main Content !-->
    <!--! ================================================================ !-->
    <!--! Footer Script !-->
    <!--! ================================================================ !-->
    <!--! BEGIN: Vendors JS !-->
    <script src="{{ asset('mainassets/vendors/js/vendors.min.js') }}"></script>
    <!-- vendors.min.js {always must need to be top} -->
    <script src="{{ asset('mainassets/vendors/js/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('mainassets/vendors/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('mainassets/vendors/js/circle-progress.min.js') }}"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="{{ asset('mainassets/js/common-init.min.js') }}"></script>
    <script src="{{ asset('mainassets/js/dashboard-init.min.js') }}"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="{{ asset('mainassets/js/theme-customizer-init.min.js') }}"></script>
    <!--! END: Theme Customizer !-->
</body>

</html>
