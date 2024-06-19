@extends('layout.app')
@section('title')
Bookings - Hotel Management System
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
                        <h4 class="page-title">Manage Bookings</h4>
                        <div align="right">
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#myModal"> <i data-feather="user-plus"></i>&nbsp; Add Booking</button>
                        </div>
                        <!-- Add Guest modal content -->
                        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Add Booking</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ url('/save-booking') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label">Select Guest</label>
                                                <select class="form-control" id="guest_id" name="guest_id" required>
                                                    <option selected disabled>Select Guest</option>
                                                    @foreach ($guests as $guest)
                                                    <option value="{{ $guest->id }}">{{ $guest->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Select Rooms</label>
                                                <select class="form-control" id="room_id" name="room_id" required>
                                                    <option selected disabled>Select Room</option>
                                                    @foreach ($rooms as $room)
                                                    <option value="{{ $room->id }}">{{ $room->number }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="check_in">Check-In Date</label>
                                                <input type="date" class="form-control" id="check_in" name="check_in" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="check_out">Check-Out Date</label>
                                                <input type="date" class="form-control" id="check_out" name="check_out" required>
                                            </div>
                                        </div>
                                        <div class=" modal-footer ">
                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal ">Close</button>
                                            <button type="submit" class="btn btn-primary">Create Booking</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
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
                            <h4 class="header-title mt-0 mb-1">Booking Lists</h4>

                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Guest Name</th>
                                        <th>Room Number</th>
                                        <th>Check in Date</th>
                                        <th>Check out Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($bookings as $booking)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td>{{ $booking->guest->name }}</td>
                                        <td>{{ $booking->room->number }}</td>
                                        <td>{{ $booking->check_in }}</td>
                                        <td>{{ $booking->check_out }}</td>
                                        <td>
                                            @if($booking->status == 1)
                                            <span class="badge bg-success">Active</span>
                                            @elseif($booking->status == 0)
                                            <span class="badge bg-danger">Completed</span>
                                            @endif
                                        </td>
                                        <td>
                                            <i data-feather="edit" alt="Edit" class="text-primary" data-bs-toggle="modal" data-bs-target="#responsive-modal1{{ $booking->id }}"></i> &nbsp;&nbsp;
                                            <i data-feather="log-out" alt="Checkout" class="text-warning" data-bs-toggle="modal" data-bs-target="#responsive-modal2{{ $booking->id }}"></i> &nbsp;&nbsp;
                                        </td>

                                        <!-- Update Booking modal content -->
                                        <div id="responsive-modal1{{ $booking->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Edit Booking</h4>
                                                        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ route('updatebooking', $booking->id) }}">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <select class="form-control" id="guest_id" name="guest_id" required>
                                                                        <label class="form-label">Select Guest</label>
                                                                        <option selected value="{{ $booking->guest->id }}">{{ $booking->guest->name }}</option>
                                                                        <option disabled>Select Other Guest</option>
                                                                        @foreach ($guests as $guest)
                                                                        <option value="{{ $guest->id }}">{{ $guest->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Select Rooms</label>
                                                                    <select class="form-control" id="room_id" name="room_id" required>
                                                                        <option selected value="{{ $booking->room->id }}">{{ $booking->room->number }}</option>
                                                                        <option disabled>Select Other Room</option>
                                                                        @foreach ($rooms as $room)
                                                                        <option value="{{ $room->id }}">{{ $room->number }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="check_in">Check-In Date</label>
                                                                    <input type="date" class="form-control" id="check_in" name="check_in" value="{{ $booking->check_in }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="check_out">Check-Out Date</label>
                                                                    <input type="date" class="form-control" id="check_out" name="check_out" value="{{ $booking->check_out }}">
                                                                </div>
                                                            </div>
                                                            <div class=" modal-footer ">
                                                                <button type="button " class="btn btn-light" data-bs-dismiss="modal ">Close</button>
                                                                <button type="submit" class="btn btn-primary">Update Booking</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal -->

                                        <!--Checkout modal content -->
                                        <div id="responsive-modal2{{ $booking->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Checkout Guest</h4>
                                                        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4><strong>Confirm Checkout</strong></h4>
                                                        <p>Are you sure you want to Checkout <strong>{{ $booking->guest->name }}</strong> from <strong>Room {{ $booking->room->number }}</strong></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                                                        <a href="{{ route('checkout',$booking->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Checkout Guest</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal -->
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