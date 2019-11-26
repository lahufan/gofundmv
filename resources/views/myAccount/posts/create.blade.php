@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">

        @if(Session::has('success'))
        <div class="alert alert-success">

            {{ Session::get('success') }}

            @php

            Session::forget('success');

            @endphp

        </div>
        @endif

        <form method="POST" action="{{ url('addpost') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-9">
                    <div class="form-group">
                        <label for="">Patient Name</label>
                        <input type="text" class="form-control" name="p-name">
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <input type="text" class="form-control" name="status">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="info" id="" rows="5" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Contact Name</label>
                        <input type="text" class="form-control" name="contact">
                    </div>
                    <div class="form-group">
                        <label for="">Goal</label>
                        <input type="text" class="form-control" name="goal">
                    </div>
                    <div class="form-group">
                        <label for="">Contact Number</label>
                        <input type="text" class="form-control" name="status">
                    </div>
                    <div class="form-group">
                        <label for="">Bank Account Number</label>
                        <input type="text" class="form-control" name="info">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="">Select Severity</label>
                        <select name="severity" id="" class="form-control">
                            <option value="Critical">Critical</option>
                            <option value="Moderate">Moderate</option>
                            <option value="Stable">Stable</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Upload Image</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Patient ID Card Copy</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Attach Medical Reports</label>
                        <input type="file" class="form-control">
                    </div>
                <div>
                <button type="submit" class="btn btn-primary btn-block">Post</button>
            </div>
            </form>
    </div>
</div>
@endsection
