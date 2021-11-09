@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card shadow rounded">
                    <div class="card-header bg-dark text-white">
                        <h4>Post Edit</h4>
                    </div>
                    <form action="/posts/{{$post->id}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" value="{{$post->name}}" class="form-control" placeholder="Enter Post" required>
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control" cols="20" rows="5" required>{{$post->description}}</textarea>
                            </div>
                                <a href=""> <button class="btn btn-info mt-2">Update</button>
                                </a>
                                <a href="/posts" class="btn btn-primary mt-2">  Back </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
