@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <form action="">
                <div class="form-group">
                    <label for="">Patient Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Atoll/Island</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="" id="" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Contact Name</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Contact Number</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Bank Account Number</label>
                    <input type="text" class="form-control">
                </div>
            </form>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="">Select Severity</label>
                <select name="" id="" class="form-control">
                    <option value="">Critical</option>
                    <option value="">Stable</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Upload Image</label>
                <input type="file" class="form-control">
            </div>
            <button class="btn btn-primary btn-block">Attach Patient ID Card Copy</button>
            <button class="btn btn-primary btn-block">Attach Medical Reports</button>
            <button class="btn btn-primary btn-block">POST</button>
        </div>
    </div>
</div>
@endsection