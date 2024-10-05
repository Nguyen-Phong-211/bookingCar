<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lên lịch đặt vé </title>
    @include('lib-css')
    <link rel="stylesheet" href="{{ asset('assets/css/calendar.css') }}">
</head>

<body class="with-welcome-text">
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding px-3 d-flex align-items-center justify-content-between">
                    <div class="ps-lg-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 fw-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more
                                with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/star-admin-pro/" target="_blank"
                                class="btn me-2 buy-now-btn border-0">Buy Now</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/star-admin-pro/"><i
                                class="ti-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="ti-close text-white"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- partial:partials/_navbar.html -->
        @include('navbar')
        <!-- partial -->

        <div class="container-fluid page-body-wrapper">

            <!-- partial:partials/_sidebar.html -->
            @include('sidebar')
            <!-- partial -->

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="calendar">
                                <div class="calendar-header">
                                    <h2 class="month">October</h2>
                                    <h2 class="year">2024</h2>
                                </div>
                                <div class="calendar-body">
                                    <div class="days-of-week">
                    
                                    </div>
                                    <div class="calendar-week row">
                                        <!-- days of the week will be generated here -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->

                <!-- partial:partials/_footer.html -->
                @include('footer')
                <!-- partial -->

            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('lib-js')
    <script src="{{ asset('assets/js/calendar.js') }}"></script>
    <!-- End custom js for this page-->
</body>

</html>
