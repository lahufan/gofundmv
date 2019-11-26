@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        
        </div>
    </div>
    <div class="row">
        <div class="col-md-2">
            @include('layouts.nav')
        </div>
        <div class="col-md-10">
            <h3 class="font-weight-bold">Dashbaord</h3>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h1>12</h1>
                            <h6>Donations</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h1>7</h1>
                            <h6>Fund Raisers</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h1>6</h1>
                            <h6>Funds Required</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h1>4</h1>
                            <h6>Some text</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection