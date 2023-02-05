@extends('layout.master')

@section('contents')
    <div class="container">
        <div class="ticket">
            <h1>Booking</h1>
            {{-- <form class="form mt-3">
                <div class="form-group mb-2">
                    <input type="number" class="form-control" id="seat-input" placeholder="No. of Seat(s)">
                </div>
                <button class="btn btn-primary mb-2" id="input"
                    onclick="getAmount(document.getElementById('input').value)">Confirm</button>
            </form> --}}
            @foreach ($tpl_bus as $bus)
                <div class="row mt-3" id="sum_div">
                    <h3>Trip Summary</h3>
                    <div class="col-12">
                        <hr>
                        <p>Direction : {{ $bus->depart_from }} to {{ $bus->arrive_at }}</p>
                        <hr>
                        <p>Departure : February 1, 2023 {{ $bus->depart_time }}</p>
                        <hr>
                        <p>Operator : {{ $bus->op_name }}</p>
                        <hr>
                        <p>Type : VIP Van</p>
                        <hr>
                        <p># of Passengers : 1</p>
                        <hr>
                        <p>Total : USD {{ $bus->price }}</p>
                        <script></script>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
