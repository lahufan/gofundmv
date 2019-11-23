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
        </div>
    </div>
</div>
@endsection