<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('theatre/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="/css/app.css" rel="stylesheet" type="text/css">
    <title>Theatre</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

</head>
<body>
<div class="ticketArea">
    <div class="content clearfix text-center">
        @foreach($tickets as $ticket)
            <div class="tickets {{$ticket['selected']}}"
                 @if($ticket['selected'] === 'free') data-toggle="modal" data-target="#exampleModal" @endif
                 data-url="{{route('tickets.update', [$ticket['id']])}}">
                {{$ticket['id']}}
            </div>
        @endforeach
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">TICKET ORDER</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputName">Name</label>
                        <small class="errorName"></small>
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Name *">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhoneNumber">Phone Number</label>
                        <small class="errorNumber"></small>
                        <input type="text" class="form-control" id="inputPhoneNumber" placeholder="Phone Number *">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email address</label>
                        <small class="errorEmail"></small>
                        <input type="email" class="form-control" id="exampleInputEmail" placeholder="Enter email *">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary orderTicket">Order</button>
            </div>
        </div>
    </div>
</div>

<script src="js/app.js"></script>
<script src="{{asset('theatre/js/script.js')}}"></script>

</body>
</html>