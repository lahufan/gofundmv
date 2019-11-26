@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <h6><strong>Posts</strong></h6>
            <ul class="list-group">
                <li class="list-group-item"><a href="/my-account/new-post">New Post</a></li>
            </ul>
        </div>
        <div class="col-md-10">
            <h6><strong>My Dashboard</strong></h6>
            @foreach ($posts as $post)
            <div>
                <div class="card shadow-sm">
                    {{-- <img class="bd-placeholder-img card-img-top" src="{{ asset('images/don_req.bmp') }}" alt="">
                    --}}
                    <div class="card-body">
                        <h4 class="card-text">{{ $post->info }}</h4>
                        <h6 class="card-text">{{ $post->status }}<h6>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{ route('fund.show', $post->severity) }}" type="button"
                                    class="btn btn-sm btn-danger">Delete</a>
                                {{-- <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Donate</button> --}}
                            </div>
                            <p class="card-text text-uppercase">Severity: {{ $post->severity }}</p>
                            <small class="text-muted">{{ $post->created_at }}</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
