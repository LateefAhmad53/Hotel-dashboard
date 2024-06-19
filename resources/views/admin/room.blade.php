@extends('layout.app')
@section('title')
Rooms - Hotel Management System
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
                        <h4 class="page-title">Manage Rooms</h4>
                        <div align="right">
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#myModal"> <i data-feather="user-plus"></i>&nbsp; Add Rooms</button>
                        </div>
                        <!-- Add Guest modal content -->
                        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Add Room</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ url('/save-room') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="number">Room Number</label>
                                                <input type="text" class="form-control" id="number" name="number" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="type">Room Type</label>
                                                <input type="text" class="form-control" id="type" name="type" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="rate">Room Rate</label>
                                                <input type="number" class="form-control" id="rate" name="rate" required>
                                            </div>
                                        </div>
                                        <div class=" modal-footer ">
                                            <button type="button " class="btn btn-light" data-bs-dismiss="modal ">Close</button>
                                            <button type="submit" class="btn btn-primary">Add Room</button>
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
                            <h4 class="header-title mt-0 mb-1">Room List</h4>

                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Room Number</th>
                                        <th>Room Type</th>
                                        <th>Room Rate</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($rooms as $room)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td>{{ $room->number }}</td>
                                        <td>{{ $room->type }}</td>
                                        <td>₦{{ $room->rate }}</td>
                                        <td>
                                            @if($room->status == 1)
                                            <span class="badge bg-success">Available</span>
                                            @elseif($room->status == 0)
                                            <span class="badge bg-danger">Taken</span>
                                            @endif
                                        </td>
                                        <td>
                                            <i data-feather="edit" class="text-primary" data-bs-toggle="modal" data-bs-target="#responsive-modal1{{ $room->id }}"></i> &nbsp;&nbsp;
                                        </td>

                                        <!-- Update Room modal content -->
                                        <div id="responsive-modal1{{ $room->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Edit Room</h4>
                                                        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ route('updateroom', $room->id) }}">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Room Number</label>
                                                                    <input type="text" class="form-control" name="number" value="{{ $room->number }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Room Type</label>
                                                                    <input type="text" class="form-control" name="type" value="{{ $room->type }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Room Rate</label>
                                                                    <input type="number" class="form-control" name="rate" value="{{ $room->rate }}">
                                                                </div>
                                                            </div>
                                                            <div class=" modal-footer ">
                                                                <button type="button " class="btn btn-light" data-bs-dismiss="modal ">Close</button>
                                                                <button type="submit" class="btn btn-primary">Update Room</button>
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