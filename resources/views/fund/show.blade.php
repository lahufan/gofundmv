@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h6><strong>Posted By: </strong>Username</h6>
            <h6><strong>Posted On: </strong>Date</h6>
            <button class="btn btn-primary btn-block">View Medical Reports</button>
            <button class="btn btn-primary btn-block">Patient ID Card</button>
            <img src="/images/don_req.bmp" alt="" class="img-fluid" width="100%">
            <h6><strong>Amount Needed: </strong>MVR 185,000</h6>
            <h6><strong>Amount Raised as of (Date): </strong>MVR 1250</h6>
          </div>
        </div>
        <button class="btn btn-primary btn-block mt-2">Donate</button>
      </div>
      <div class="col-md-6">
        <table class="table">
          <tr>
            <td><strong>Severity</strong></td>
            <td>Critical</td>
          </tr>
          <tr>
            <td><strong>Patient Name</strong></td>
            <td>Mohamed Ahmed</td>
          </tr>
          <tr>
            <td><strong>Atoll/Island</strong></td>
            <td>K.Maafushi</td>
          </tr>
          <tr>
            <td><strong>Address</strong></td>
            <td>Whitehouse</td>
          </tr>
          <tr>
            <td><strong>Description</strong></td>
            <td>Description</td>
          </tr>
          <tr>
            <td><strong>Contact Name</strong></td>
            <td>Zayan Mohamed</td>
          </tr>
          <tr>
            <td><strong>Contact Number</strong></td>
            <td>7676123</td>
          </tr>
          <tr>
            <td><strong>Bank Account Number</strong></td>
            <td>7730000765002</td>
          </tr>
        </table>
      </div>
    </div>
    
    </div>
    
</div>
@endsection