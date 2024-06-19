@extends('layout.app')
@section('title')
Reservations - Hotel Management System
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
                        <h4 class="page-title">Manage Reservations</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            @include('include.success')
            @include('include.warning')
            @include('include.error')
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-1">Reservation Lists</h4>

                            <table id="basic-datatable" class="table dt-responsive">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Guest Name</th>
                                        <th>Guest Email</th>
                                        <th>Guest Phone</th>
                                        <th>Check in Date</th>
                                        <th>Check out Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($reservations as $reservation)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td>{{ $reservation->name }}</td>
                                        <td>{{ $reservation->email }}</td>
                                        <td>{{ $reservation->phone }}</td>
                                        <td>{{ $reservation->check_in }}</td>
                                        <td>{{ $reservation->check_out }}</td>
                                    </tr>
                                    <?php $number++; ?>
                                    @endforeach
                                </tbody>
                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
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