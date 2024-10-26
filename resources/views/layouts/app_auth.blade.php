<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('dashbord/assets/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('dashbord/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dashbord/assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dashbord/assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('dashbord/assets/css/style.css') }}" rel="stylesheet" type="text/css" />

        <script src="{{ asset('dashbord') }}/assets/js/modernizr.min.js"></script>

    </head>

    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('{{ asset('dashbord/assets/images/bg-1.jpg') }}');background-size: cover;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">
                        @yield('auth_form')
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="account-copyright">2018 © Highdmin. - Coderthemes.com</p>
            </div>

        </div>



         <!-- jQuery  -->
        <script src="{{ asset('dashbord/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('dashbord/assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('dashbord/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('dashbord/assets/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('dashbord/assets/js/waves.js') }}"></script>
        <script src="{{ asset('dashbord/assets/js/jquery.slimscroll.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('dashbord/assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('dashbord/assets/js/jquery.app.js') }}"></script>

    </body>
</html>
