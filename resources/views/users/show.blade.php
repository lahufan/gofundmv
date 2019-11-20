@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            @include('layouts.nav')
        </div>
        <div class="col-md-10">
            <h3>User Details</h3>
            <hr>
            <h2>{{ $user->name }}</h2>
            <h6>{{ $user->email }}</h6>
        </div>
    </div>
  
</div>
@endsection