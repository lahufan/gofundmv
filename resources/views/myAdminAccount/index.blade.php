@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center">Admin Dashboard</h2>
    <div class="row">
        <div class="col-md">
            <a href="">
                <div class="card mb-4 shadow-sm">
                    <img class="bd-placeholder-img card-img-top" src="{{ asset('images/post.png') }}" alt="">
                    <div class="card-body">
                        <p class="card-text">Manage Posts</p>
                        <div class="d-flex justify-content-between align-items-center">
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md">
            <a href="">
                <div class="card mb-4 shadow-sm">
                    <img class="bd-placeholder-img card-img-top" src="{{ asset('images/user.jpg') }}" alt="">
                    <div class="card-body">
                        <p class="card-text">Manage Users</p>
                        <div class="d-flex justify-content-between align-items-center">
                        </div>
                    </div>
                </div>
        </div>
        </a>
    </div>
</div>
@endsection
