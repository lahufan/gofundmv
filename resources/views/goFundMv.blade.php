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
        <div class="col-md-12 text-center">
            <h3 class="font-weight-bold">Top Fund Raiser</h3>
        </div>
    </div>
    <div class="row">
      @foreach ($openPosts as $openPost)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          <img class="bd-placeholder-img card-img-top" src="{{ asset('images/don_req.bmp') }}" alt="">
            <div class="card-body">
              <p class="card-text">{{ $openPost->info }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="{{ route('fund.show', $openPost->id) }}" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                  <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">Donate</button>
                </div>
                <small class="text-muted">{{ $openPost->created_at  }}</small>
              </div>
            </div>
          </div>
        </div>
      @endforeach
      </div>
      <div class="text-center mb-2">
      <a href="{{ url('all-posts') }}" class="font-weight-bold">SEE ALL >></a>
      </div>
    <div class="row">
        <div class="col-md-12 text-center">
            <h3 class="font-weight-bold">Feature Campaigns</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              
            </div>
          </div>
          </div>
        </div>
        
    </div>
</div>
@endsection
