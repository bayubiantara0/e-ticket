{{-- <!DOCTYPE html>
<html>
<head>
    <title>Ticket Confirmation</title>
</head>
<body>
    <h1>Ticket Booked Successfully!</h1>
    <p>Your Ticket ID: {{ $ticket->ticket_id }}</p>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">


<title>E-ticket</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
<link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/ticket.css">
<style type="text/css">
    	
    </style>
</head>
<body>
    <section class="container">
        <h1>Events</h1>
        <div class="row">
            <article class="card fl-left">
                <section class="date">
                    <time datetime="23th feb">
                        {{-- <span>23</span><span>feb</span> --}}
                    </time>
                </section>
            <section class="card-cont">
                <small>{{ $ticket->name }} | {{ $ticket->phone }}</small>
                <h4>E-Ticket</h4>
                <h5 style="color:black">Your Ticket ID: {{ $ticket->ticket_id }}</h5>
                <div class="even-date">
                    <i class="fa fa-calendar"></i>

                </div>
                    <div class="even-info">
                        <i class="fa fa-map-marker"></i>
                        <p>{{ date('Y-m-d') }}</p>
                    </div>
                <a href="#">booked</a>
            </section>
    </section>

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript"></script>
</body>
</html>
