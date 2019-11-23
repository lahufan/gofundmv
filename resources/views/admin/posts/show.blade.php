@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            @include('layouts.nav')
        </div>
        <div class="col-md-10">
            <h3>post Details</h3>
            <hr>
            <h2>{{ $post->severity }}</h2>
            <h6>{{ $post->info }}</h6>
        </div>
    </div>
  
</div>
@endsection