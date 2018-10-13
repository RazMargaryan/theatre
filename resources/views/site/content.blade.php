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
                    @csrf


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary orderTicket">Order</button>
            </div>
        </div>
    </div>
</div>