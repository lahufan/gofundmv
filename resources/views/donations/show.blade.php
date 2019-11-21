<div class="container mx-auto w-50 text-center">
        <div class="card ">
                {{-- <img class="card-img-top" src="{{ asset('images/donation.bmp') }}" alt="donation"> --}}
                <div class="pt-2">
                    <img class="" src="{{ asset('images/donation.bmp') }}" alt="donation" width="50px">
                </div>
                <div class="card-body">
                    <h4 class="card-title">MVR. {{ $amount }}</h4>
                    <p class="card-text">{{ $name }}</p>
                    <div class="text-sm-right">
                        <small class="text-muted">{{ $date }}</small>
                    </div>
                </div>
        </div>
</div>