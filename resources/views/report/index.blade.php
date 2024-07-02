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
                        <h6 class="m-0 font-weight-bold text-primary">Ticket List</h6>
                    </div>
                    <div class="card-body">
                        <h2>Checked-In</h2>
                        <ul>
                            @foreach ($checkedIn as $ticket)
                                <li>{{ $ticket->name }} - {{ $ticket->phone }} - {{ $ticket->ticket_id }}</li>
                            @endforeach
                        </ul>
                        <h2>Not Checked-In</h2>
                        <ul>
                            @foreach ($notCheckedIn as $ticket)
                                <li>{{ $ticket->name }} - {{ $ticket->phone }} - {{ $ticket->ticket_id }}</li>
                            @endforeach
                        </ul>
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


{{-- <!DOCTYPE html>
<html>
<head>
    <title>Report</title>
</head>
<body>
    <h1>Report</h1>
    <h2>Checked-In</h2>
    <ul>
        @foreach ($checkedIn as $ticket)
            <li>{{ $ticket->name }} - {{ $ticket->ticket_id }}</li>
        @endforeach
    </ul>
    <h2>Not Checked-In</h2>
    <ul>
        @foreach ($notCheckedIn as $ticket)
            <li>{{ $ticket->name }} - {{ $ticket->ticket_id }}</li>
        @endforeach
    </ul>
</body>
</html> --}}
