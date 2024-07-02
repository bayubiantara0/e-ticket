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
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('ticketlist.update', $ticket->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="ticket_id">Ticket ID</label>
                                <input type="text" name="ticket_id" class="form-control" value="{{ $ticket->ticket_id }}" required>
                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $ticket->name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" value="{{ $ticket->email }}" required>
                            </div>

                            <div class="form-group">
                                <label for="event">Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{ $ticket->phone }}" required>
                            </div>

                            <div class="form-group">
                                <label for="checked_in">Checked In</label>
                                <select name="checked_in" class="form-control">
                                    <option value="0" {{ $ticket->checked_in == 0 ? 'selected' : '' }}>No</option>
                                    <option value="1" {{ $ticket->checked_in == 1 ? 'selected' : '' }}>Yes</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Ticket</button>
                            <a href="{{ route('ticketlist.index') }}" class="btn btn-secondary">Back to List</a>
                        </form>
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
