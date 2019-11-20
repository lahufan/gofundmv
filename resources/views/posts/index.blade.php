@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2">
            @include('layouts.nav')
        </div>
        <div class="col-md-10">
            <h3>posts <a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary float-right">Add New post</a></h3>
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><a href="{{ route('posts.show', $post->id) }}">{{ $post->name }}</a></td>
                        <td>{{ $post->email }}</td>
                        <td>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
  
</div>
@endsection