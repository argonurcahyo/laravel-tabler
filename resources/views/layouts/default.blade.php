<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    @include('includes.head')
    @yield('page-styles')
</head>

<body>
    <script src="{{ asset('dist/js/demo-theme.min.js') }}"></script>
    <div class="page">
        <!-- Sidebar -->
        @include('includes.sidebar')
        <!-- Navbar -->
        @include('includes.navbar')

        <div class="page-wrapper">
            <!-- Page header -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <div class="page-pretitle">
                                @yield('page-pretitle')
                            </div>
                            <h2 class="page-title">
                                @yield('page-title')
                            </h2>
                        </div>
                        <!-- Page title actions -->
                        @yield('page-title-actions')
                    </div>
                </div>
            </div>
            <!-- Page body -->
            @yield('page-body')
            <!-- Footer -->
            @include('includes.footer')
        </div>
    </div>
    <!--Modal-->
    @yield('page-modal')

    <!-- Libs JS -->
    @yield('page-libs')

    <!-- Tabler Core -->
    @include('includes.scripts')

    @yield('page-scripts')

</body>

</html>
