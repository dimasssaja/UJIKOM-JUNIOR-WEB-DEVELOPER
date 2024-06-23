<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="./assets/img/icon1.png">

    <title>DSiGawai</title>

    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />


    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />


    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">


    <link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />

    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>

    {{-- tempat menampung css yang digunakan pada blade yang lain --}}
    @stack('css')

</head>


<body class="g-sidenav-show  bg-gray-100">

    {{-- memanggil sidebar dari path, di view sidebar tidak perlu di panggil lagi  --}}
    @include('layouts.partials.sidebar')

    <main class="main-content border-radius-lg ">
        <div class="container-fluid py-4">

            {{-- isi content yang digunakan --}}
            @yield('content')

            <footer class="footer py-4  ">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>,
                                dibuat oleh
                                <a>Dimas Abi Mesti</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>


    </main>

    <!--   JS FILES   -->
    <script src="./assets/js/core/popper.min.js"></script>
    <script src="./assets/js/core/bootstrap.min.js"></script>
    <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

    <script src="./assets/js/material-dashboard.min.js?v=3.1.0"></script>

    {{-- tempat menampung css yang digunakan pada blade yang lain --}}
    @stack('js')

</body>

</html>
