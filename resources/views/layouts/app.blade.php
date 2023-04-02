<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Saad Jawaid Test for MailerLite">
    <meta name="author" content="Saad Jawaid">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/favicon.ico') }}">

    <!-- TITLE -->
    <title>Saad Jawaid Test for MailerLite</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- STYLE CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- Plugins CSS -->
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet">

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('assets/css/icons.css') }}'" rel="stylesheet">

    <!-- INTERNAL Switcher css -->
    <link href="{{ asset('assets/switcher/css/switcher.css') }}'" rel="stylesheet">
    <link href="{{ asset('assets/switcher/demo.css') }}'" rel="stylesheet">

</head>
<body class="app sidebar-mini ltr light-mode">

<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="{{ asset('assets/images/loader.svg') }}" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
    <div class="page-main">

        <!-- app-Header -->
        <div class="app-header header sticky">
            <div class="container-fluid main-container">
                <div class="d-flex">
                    <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar"
                       href="javascript:void(0)"></a>
                    <!-- sidebar-toggle-->
                    <a class="logo-horizontal " href="{{ route('dashboard') }}">
                        <img src="{{ asset('assets/images/brand/logo-white.png" class="header-brand-img desktop-logo') }}" alt="logo">
                        <img src="{{ asset('assets/images/brand/logo-dark.png" class="header-brand-img light-logo1') }}"
                             alt="logo">
                    </a>
                    <div class="d-flex order-lg-2 ms-auto header-right-icons">
                        <!-- SEARCH -->
                        <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                        </button>
                        <div class="navbar navbar-collapse responsive-navbar p-0">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                <div class="d-flex order-lg-2">
                                    <div class="d-flex">
                                        <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                            <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                            <span class="light-layout"><i class="fe fe-sun"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /app-Header -->

        <!--APP-SIDEBAR-->
        <div class="sticky">
            <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
            <div class="app-sidebar">
                <div class="side-header">
                    <a class="header-brand1" href="{{ route('dashboard') }}">
                        <img src="{{ asset('assets/images/brand/logo-white.png') }}" class="header-brand-img desktop-logo" alt="logo">
                        <img src="{{ asset('assets/images/brand/icon-white.png') }}" class="header-brand-img toggle-logo"
                             alt="logo">
                        <img src="{{ asset('assets/images/brand/icon-dark.png') }}" class="header-brand-img light-logo" alt="logo">
                        <img src="{{ asset('assets/images/brand/logo-dark.png') }}" class="header-brand-img light-logo1"
                             alt="logo">
                    </a>
                    <!-- LOGO -->
                </div>
                <div class="main-sidemenu">
                    <div class="slide-left disabled" id="slide-left">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/>
                        </svg>
                    </div>
                    <ul class="side-menu">
                        <li class="sub-category">
                            <h3>Main</h3>
                        </li>
                        <li class="slide active">
                            <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('dashboard') }}"><i
                                    class="side-menu__icon fe fe-users"></i><span
                                    class="side-menu__label">Dashboard</span></a>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item has-link" data-bs-toggle="slide" href="{{ route('create-subscriber-form') }}"><i
                                    class="side-menu__icon fe fe-user"></i><span
                                    class="side-menu__label">Add Subscriber</span></a>
                        </li>
                    </ul>
                    <div class="slide-right" id="slide-right">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                             width="24" height="24" viewBox="0 0 24 24">
                            <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <!--/APP-SIDEBAR-->

        <!--app-content open-->
        <div class="main-content app-content mt-0">
            <div class="side-app">

                <!-- CONTAINER -->
                <div class="main-container container-fluid">

                    @yield('content')
                </div>
                <!-- CONTAINER CLOSED -->

            </div>
        </div>
        <!--app-content closed-->
    </div>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center flex-row-reverse">
                <div class="col-md-12 col-sm-12 text-center">
                    Copyright © <span id="year"></span> <a href="https://www.mailerlite.com"
                                                           target="_blank">MailerLite</a>. Developed with <span
                        class="fa fa-heart text-danger"></span> by <a href="https://www.linkedin.com/in/saad-jawaid/"
                                                                      target="_blank"> Saad Jawaid </a> All rights
                    reserved.
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER CLOSED -->
</div>

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- JQUERY JS -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>

<!-- BOOTSTRAP JS -->
<script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- INPUT MASK JS-->
<script src="{{ asset('assets/plugins/input-mask/jquery.mask.min.js') }}"></script>

<!-- TypeHead js -->
<script src="{{ asset('assets/plugins/bootstrap5-typehead/autocomplete.js') }}"></script>
<script src="{{ asset('assets/js/typehead.js') }}"></script>

<!-- SELECT2 JS -->
<script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>

<!-- FORMVALIDATION JS -->
<script src="{{ asset('assets/js/form-validation.js') }}"></script>

<!-- INTERNAL SELECT2 JS -->
<script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>

<!-- DATA TABLE JS-->
<script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/jszip.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/js/table-data.js') }}"></script>

<!-- Perfect SCROLLBAR JS-->
<script src="{{ asset('assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/plugins/p-scroll/pscroll.js') }}"></script>
<script src="{{ asset('assets/plugins/p-scroll/pscroll-1.js') }}"></script>

<!-- SIDE-MENU JS -->
<script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>

<!-- SIDEBAR JS -->
<script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>

<!-- FORMELEMENTS JS -->
<script src="{{ asset('assets/js/formelementadvnced.js') }}"></script>
<script src="{{ asset('assets/js/form-elements.js') }}"></script>

<!-- Color Theme js -->
<script src="{{ asset('assets/js/themeColors.js') }}"></script>

<!-- Sticky js -->
<script src="{{ asset('assets/js/sticky.js') }}"></script>

<!-- CUSTOM JS -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

<!-- Custom-switcher -->
<script src="{{ asset('assets/js/custom-swicher.js') }}"></script>

<!-- Switcher js -->
<script src="{{ asset('assets/switcher/js/switcher.js') }}"></script>

<script>
    $(document).on('submit', '#editsubscriberform', function (e) {
        e.preventDefault();
        $.ajax({
            url: "response.php",
            type: 'POST',
            dataType: 'json',
            data: {
                'data': 'editsubscriber'
            },
            success: function (content) {
                $('#editsubscriber').modal('toggle');
                if (content.status) {
                    $("#formsuccess p").html(content.msg);
                    $('#formsuccess').modal('toggle');
                } else {
                    $("#formerror p").html(content.msg);
                    $('#formerror').modal('toggle');
                }
            }
        });
    });
    $(document).on('click', '.confirmDeleteBtn', function (e) {
        $.ajax({
            url: "response.php",
            type: 'POST',
            dataType: 'json',
            data: {
                'data': 'confirmDeleteBtn'
            },
            success: function (content) {
                $('#confirmdelete').modal('toggle');
                if (content.status) {
                    $("#formsuccess p").html(content.msg);
                    $('#formsuccess').modal('toggle');
                } else {
                    $("#formerror p").html(content.msg);
                    $('#formerror').modal('toggle');
                }
            }
        });
    });
</script>

</body>

</html>
