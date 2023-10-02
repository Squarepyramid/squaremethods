<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile - Brand</title>
<link rel="stylesheet" href="{{asset('dashboard/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
        <link rel="stylesheet" href="{{asset('dashboard/assets/fonts/fontawesome-all.min.css')}}">
        </head>

        <body id="page-top">
        <div id="wrapper">
            @include('layouts.user.menu.index')

            <div class="d-flex flex-column" id="content-wrapper">
                <div id="content">
                    @include('layouts.user.user.index')

                </div>
                <div class="container-fluid">
                    @yield('content')
                </div>

            </div>
                <a className="border rounded d-inline scroll-to-top" href="#page-top"><i
                className="fas fa-angle-up"></i></a>

        </div>
        @include('layouts.user.footer.index')
        <script src="{{asset('dashboard/assets/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('dashboard/assets/js/bs-init.js')}}"></script>
        <script src="{{asset('dashboard/assets/js/theme.js')}}"></script>
        </body>

</html>
