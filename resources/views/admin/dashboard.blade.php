@extends('layout.app')
@section('title')
Dashboard - Hotel Management System
@endsection
@section('content')

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="page-title-right">
                            <form class="float-sm-end mt-3 mt-sm-0">
                                <div class="row g-2">
                                    <div class="col-md-auto">
                                        <div class="mb-1 mb-sm-0">
                                            <input type="text" class="form-control" value="{{ $todayDate ?? \Carbon\Carbon::now()->format('Y-m-d H:i:s') }}" style="min-width: 110px;" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <span class="text-muted text-uppercase fs-12 fw-bold">Total Revenue </span>
                                    <h3 class="mb-0">₦ {{ $allpayment }}</h3>
                                </div>
                                <div class="align-self-center flex-shrink-0">
                                    <span class="icon-lg icon-dual-primary" data-feather="credit-card"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <span class="text-muted text-uppercase fs-12 fw-bold">Total Rooms</span>
                                    <h3 class="mb-0">{{ $allroom }}</h3>
                                </div>
                                <div class="align-self-center flex-shrink-0">
                                    <span class="icon-lg icon-dual-warning" data-feather="home"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <span class="text-muted text-uppercase fs-12 fw-bold">Total Guests</span>
                                    <h3 class="mb-0">{{ $allguest }}</h3>
                                </div>
                                <div class="align-self-center flex-shrink-0">
                                    <span class="icon-lg icon-dual-success" data-feather="users"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <span class="text-muted text-uppercase fs-12 fw-bold">Available Rooms</span>
                                    <h3 class="mb-0">{{ $availableroom }}</h3>
                                </div>
                                <div class="align-self-center flex-shrink-0">
                                    <span class="icon-lg icon-dual-success" data-feather="home"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <span class="text-muted text-uppercase fs-12 fw-bold">Total Bookings</span>
                                    <h3 class="mb-0">{{ $allbooking }}</h3>
                                </div>
                                <div class="align-self-center flex-shrink-0">
                                    <span class="icon-lg icon-dual-info" data-feather="file-text"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <span class="text-muted text-uppercase fs-12 fw-bold">Total Reservations</span>
                                    <h3 class="mb-0">{{ $allreservation }}</h3>
                                </div>
                                <div class="align-self-center flex-shrink-0">
                                    <span class="icon-lg icon-dual-secondary" data-feather="file-text"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- container -->

    </div>
    <!-- content -->

    <!-- Footer Start -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <script>
                        document.write(new Date().getFullYear())
                    </script> &copy; Lincoln Height Hotel
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

@endsection