@extends('layouts.app')

@section('content')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Donate</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group">
            <label>Amount</label>
            <input type="number" class="form-control">
          </div>
          <button class="btn btn-primary">Donate</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


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
          <button type="button" class="btn btn-primary btn-block mt-2" data-toggle="modal" data-target="#exampleModal">Donate</button>
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