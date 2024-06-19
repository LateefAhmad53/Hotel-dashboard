@extends('layout.app')
@section('title')
Guests - Hotel Management System
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
                        <h4 class="page-title">Manage Guests</h4>
                        <div align="right">
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#myModal"> <i data-feather="user-plus"></i>&nbsp; Add Guest</button>
                        </div>
                        <!-- Add Guest modal content -->
                        <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Add Guest</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ url('/save-guest') }}" method="POST">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="form-label">Guest Name</label>
                                                <input type="text" class="form-control" name="name" value="{{ Request::old('name')}}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Guest Email</label>
                                                <input type="email" class="form-control" name="email" value="{{ Request::old('email')}}">
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Guest Phone</label>
                                                <input type="phone" class="form-control" name="phone" value="{{ Request::old('phone')}}">
                                            </div>
                                        </div>
                                        <div class=" modal-footer ">
                                            <button type="button " class="btn btn-light" data-bs-dismiss="modal ">Close</button>
                                            <button type="submit" class="btn btn-primary">Add Guest</button>
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
                            <h4 class="header-title mt-0 mb-1">Guests List</h4>

                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Guest Name</th>
                                        <th>Guest Email</th>
                                        <th>Guest Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($guests as $guest)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td>{{ $guest->name }}</td>
                                        <td>{{ $guest->email }}</td>
                                        <td>{{ $guest->phone }}</td>
                                        <td>
                                            <i data-feather="edit" class="text-primary" data-bs-toggle="modal" data-bs-target="#responsive-modal1{{ $guest->id }}"></i> &nbsp;&nbsp;
                                        </td>

                                        <!-- Update Guest modal content -->
                                        <div id="responsive-modal1{{ $guest->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Edit Guest</h4>
                                                        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ route('updateguest', $guest->id) }}">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Guest Name</label>
                                                                    <input type="text" class="form-control" name="name" value="{{ $guest->name }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Guest Email</label>
                                                                    <input type="Email" class="form-control" name="email" value="{{ $guest->email }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label">Guest Phone</label>
                                                                    <input type="phone" class="form-control" name="phone" value="{{ $guest->phone }}">
                                                                </div>
                                                            </div>
                                                            <div class=" modal-footer ">
                                                                <button type="button " class="btn btn-light" data-bs-dismiss="modal ">Close</button>
                                                                <button type="submit" class="btn btn-primary">Update Guest</button>
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