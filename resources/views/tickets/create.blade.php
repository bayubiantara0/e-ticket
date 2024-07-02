@extends('layouts_frontend.master')

@section('content')

<!-- bradcam_area -->
<div class="bradcam_area">
    <div class="single_bradcam  d-flex align-items-center bradcam_bg_1 overlay">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-12">
                        <div class="bradcam_text text-center">
                        <div class="shape_1 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                            <img src="img/shape/shape_1.svg" alt="">
                        </div>
                        <div class="shape_2 wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s">
                            <img src="img/shape/shape_2.svg" alt="">
                        </div>
                            <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Buy Tickets</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- bradcam_area end -->

<!-- Start Align Area -->
<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h3 class="mb-30">Ticket Purchase Form</h3>
                    <form action="{{ route('tickets.store') }}" method="POST">
                        @csrf
                        <div class="mt-10">
                            <input type="text" name="name" id="name" placeholder="Name"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required
                                class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="email" name="email" id="email" placeholder="Email"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required
                                class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="phone" id="phone" placeholder="Phone"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" required
                                class="single-input">
                        </div>
                        <div class="mt-10">
                            <button type="submit" class="genric-btn primary">Buy Tickets</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Align Area -->
    
@endsection


{{-- <!DOCTYPE html>
<html>
<head>
    <title>Book Ticket</title>
</head>
<body>
    <h1>Book Your Ticket</h1>
    <form action="{{ route('tickets.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required><br>
        <button type="submit">Book</button>
    </form>
</body>
</html> --}}
