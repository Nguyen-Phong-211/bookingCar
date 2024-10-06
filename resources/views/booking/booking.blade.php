<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Lên lịch đặt vé </title>

    @include('lib-css')
    <link rel="stylesheet" href="{{ asset('assets/css/calendar.css') }}">

    <link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css' rel='stylesheet' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js'></script>

</head>

<body class="with-welcome-text">
    <div class="container-scroller">

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

                            <div id='calendar'></div>

                            <div class="modal fade" id="eventModal" tabindex="-1" role="dialog"
                                aria-labelledby="eventModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="eventModalLabel">Thêm sự kiện</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="text" id="eventTitle" placeholder="Tiêu đề sự kiện"
                                                class="form-control" />
                                        </div>
                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                            <button type="button" id="addEvent" class="btn btn-primary">Thêm sự kiện</button>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="modal fade" id="editEventModal" tabindex="-1" role="dialog"
                                aria-labelledby="editEventModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editEventModalLabel">Sửa sự kiện</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input type="text" id="editEventTitle" placeholder="Tiêu đề sự kiện"
                                                class="form-control" />
                                        </div>
                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                            <button type="button" id="saveEventChanges" class="btn btn-primary">Lưu thay đổi</button>
                                        </div>
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

    
    {{-- @include('lib-js') --}}
    <script src="{{ asset('assets/js/calendar.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- End custom js for this page-->
</body>

</html>
