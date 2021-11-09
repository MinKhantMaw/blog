@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">

                <div class="card border shadow">
                    <div class="card-body">
                        <div class="card-header">
                            <h3>Post</h3>
                        </div>

                            <h5 class="card-title">{{ $post->name }}</h5>
                            <p class="card-text">
                                {{ $post->description }}
                            </p>
                            <div class="mb-2">
                                <a href="/posts" class="btn btn-secondary">Back </a>
                            </div>
                            <hr>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
