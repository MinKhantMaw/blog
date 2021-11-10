@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card shadow rounded">
                    <div class="card-header bg-dark text-white">
                        <h4>Post Edit</h4>
                    </div>
                    <form action="/posts/{{ $post->id }}" method="post">
                        @csrf
                        @method('PUT')
                        @if ($errors->any())
                            <div class="alert alert-danger m-2">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" value="{{ $post->name }}" class="form-control"
                                    placeholder="Enter Post">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control" cols="20"
                                    rows="5">{{ $post->description }}</textarea>
                            </div>
                            <div class="form-group">
                                <select name="category_id" class="form-control mt-2">
                                    <option value="">Choose Category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{$category->id}}" {{$category->id == $post->category_id ? 'selected' : ''}}>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <a href=""> <button class="btn btn-info mt-2">Update</button>
                            </a>
                            <a href="/posts" class="btn btn-primary mt-2"> Back </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
