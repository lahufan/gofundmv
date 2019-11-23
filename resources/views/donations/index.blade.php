@extends('layouts.app')
@section('content')
@foreach ($donations as $donation)
    <div class="container mx-auto w-50 text-center p-1">
            <div class="card ">
                    {{-- <img class="card-img-top" src="{{ asset('images/donation.bmp') }}" alt="donation"> --}}
                    <div class="pt-2">
                        <img class="" src="{{ asset('images/donation.bmp') }}" alt="donation" width="50px">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">MVR. {{ $donation->amount }}</h4>
                        <p class="card-text">{{ $donation->transaction_id }}</p>
                        <div class="text-sm-right">
                            <small class="text-muted">{{ Str::limit($donation->date, 10) }}</small>
                        </div>
                    </div>
            </div>
    </div>
@endforeach
@endsection