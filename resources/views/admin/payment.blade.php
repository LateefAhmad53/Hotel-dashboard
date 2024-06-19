@extends('layout.app')
@section('title')
Payments - Hotel Management System
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
                        <h4 class="page-title">Manage Payments</h4>
                        <div align="right">
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#myModal"> <i data-feather="user-plus"></i>&nbsp; Make New Payment</button>
                        </div>
                        <!-- Add Guest modal content -->
                        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Make Payment</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ url('/save-payment') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label">Booking</label>
                                                <select class="form-control" id="booking_id" name="booking_id" required>
                                                    @foreach ($bookings as $booking)
                                                    <option selected disabled>Select Bookings</option>
                                                    <option value="{{ $booking->id }}">{{ $booking->guest->name }} (Room {{ $booking->room->number }} ) ( {{ $booking->check_in }} - {{ $booking->check_out }} ) </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Amount</label>
                                                <input type="number" class="form-control" id="amount" name="amount" required>
                                            </div>
                                        </div>
                                        <div class=" modal-footer ">
                                            <button type="button " class="btn btn-light" data-bs-dismiss="modal ">Close</button>
                                            <button type="submit" class="btn btn-primary">Add Payment</button>
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
                            <h4 class="header-title mt-0 mb-1">Payment List</h4>

                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Booking</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($payments as $payment)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td>{{ $payment->booking->guest->name }} (Room {{ $payment->booking->room->number }} ) ( {{ $payment->booking->check_in }} - {{ $payment->booking->check_out }} ) </td>
                                        <td>{{ $payment->amount }}</td>
                                        <td>
                                            @if($payment->status == 1)
                                            <span class="badge bg-success">Paid</span>
                                            @elseif($payment->status == 0)
                                            <span class="badge bg-danger">Unpaid</span>
                                            @endif
                                        </td>
                                        <td>
                                            <i data-feather="edit" class="text-primary" data-bs-toggle="modal" data-bs-target="#responsive-modal1{{ $payment->id }}"></i> &nbsp;&nbsp;
                                        </td>

                                        <!-- Update Guest modal content -->
                                        <div id="responsive-modal1{{ $payment->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Edit Payment</h4>
                                                        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ route('updatepayment', $payment->id) }}">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <select class="form-control" id="booking_id" name="booking_id" required>
                                                                        <option selected value="{{ $payment->booking_id }}">{{ $payment->booking->guest->name }} (Room {{ $payment->booking->room->number }} ) ( {{ $payment->booking->check_in }} - {{ $payment->booking->check_out }} )</option>
                                                                        <option disabled>Select Other Booking</option>
                                                                        @foreach ($bookings as $booking)
                                                                        <option value="{{ $booking->id }}">{{ $booking->guest->name }} (Room {{ $booking->room->number }} ) ( {{ $booking->check_in }} - {{ $booking->check_out }} ) </option>
                                                                        @endforeach
                                                                    </select>
                                                                    </select>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Amount</label>
                                                                    <input type="number" class="form-control" id="amount" name="amount" value="{{ $payment->amount }}" required>
                                                                </div>
                                                            </div>
                                                            <div class=" modal-footer ">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal ">Close</button>
                                                                <button type="submit" class="btn btn-primary">Update Payment</button>
                                                            </div>
                                                        </form>
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