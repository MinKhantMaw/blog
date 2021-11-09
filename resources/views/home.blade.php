@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">Post List</div>
                      @foreach ($data as $post)
                      <h5 class="card-title">{{$post->name}}</h5>
                      <p class="card-text">
                        {{$post->description}}
                      </p>
                      <button type="button" class="btn btn-primary">View</button>
                      <button type="button" class="btn btn-warning">Edit</button>
                      <button type="button" class="btn btn-danger">Delete</button>
                      <hr>
                      @endforeach

                    </div>

                  </div>

            </div>
        </div>
    </div>
@endsection
