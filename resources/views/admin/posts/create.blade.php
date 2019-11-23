@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            @include('layouts.nav')
        </div>
        <div class="col-md-10">
            <h3>Create New Post</h3>
            <div class="card">
                <div class="card-body">
                <form action="{{ route('posts.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="severity">severity</label>
                        <input type="text" name="severity" id="severity" class="form-control @error('severity') is-invalid @enderror" value="{{ old('severity') }}">
                        @error('severity')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="status">status</label>
                        <input type="text" name="status" id="status" class="form-control @error('status') is-invalid @enderror" value="{{ old('status') }}">
                        @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="info">info</label>
                        <textarea name="info" name="info" id="info" rows="5" class="form-control @error('status') is-invalid @enderror">{{ old('status') }}</textarea>
                        @error('info')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="goal">goal</label>
                        <input type="text" name="goal" id="goal" class="form-control @error('goal') is-invalid @enderror" value="{{ old('goal') }}">
                        @error('goal')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="raised">raised</label>
                        <input type="text" name="raised" id="raised" class="form-control @error('raised') is-invalid @enderror" value="{{ old('raised') }}">
                        @error('raised')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button class="btn btn-primary">Save</button>
                </form>
                </div>
            </div>
            
        </div>
    </div>
  
</div>
@endsection