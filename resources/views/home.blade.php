@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">
                <div class="mb-2">
                    <a href="/posts/create" class="btn btn-secondary">New Post </a>
                </div>
                <div class="card border shadow">
                    <div class="card-body">
                        <div class="card-header">
                            <h3>Post List</h3>
                        </div>
                        @foreach ($data as $post)
                            <h5 class="card-title">{{ $post->name }}</h5>
                            <p class="card-text">
                                {{ $post->description }}
                            </p>
                                <a href="/posts/{{ $post->id }}"> <button type="button"
                                        class="btn btn-primary">View</button>
                                </a>
                                <a href="/posts/{{ $post->id }}/edit"> <button type="button"
                                        class="btn btn-warning">Edit</button>
                                </a>
                            <form action="/posts/{{ $post->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mt-1">Delete</button>
                            </form>
                            <hr>
                        @endforeach

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
