
@extends('layouts.app')
@section('content')
<h1 class="text-center">All Posts</h1>
<div class="row">
    @foreach ($posts as $post)
        <div class="container mx-auto w-20 text-center p-1">
            <a href="{{ url("post/{$post->id}") }}">    
            <div class="card ">
                        {{-- <img class="card-img-top" src="{{ asset('images/donation.bmp') }}" alt="donation"> --}}
                        <div class="pt-2">
                            <img class="" src="{{ asset('images/don_req.bmp') }}" alt="donation" width="50px">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">{{ $post->status }}</h4>
                            <p class="card-text">{{ $post->info }}</p>
                            <div class="text-sm-right">
                                <small class="text-muted">{{ $post->severity }}</small>
                            </div>
                        </div>
            </div>
        </a>
        </div>
    @endforeach

</div>
@endsection