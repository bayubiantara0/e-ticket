@extends('layouts.app')

@section('content')
<!-- Page Wrapper -->
<div id="wrapper">

    @include('header')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Check In</h6>
                    </div>
                    <div class="card-body">
                        <p><strong>Ticket ID:</strong> {{ $ticket->ticket_id }}</p>
                        <p><strong>Name:</strong> {{ $ticket->name }}</p>
                        <p><strong>Email:</strong> {{ $ticket->email }}</p>
                        <p><strong>Checked In:</strong> {{ $ticket->checked_in ? 'Yes' : 'No' }}</p>
                        <a href="{{ route('checkin.index') }}" class="btn btn-primary">Back to Check-in</a>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
@endsection
