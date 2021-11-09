@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">

                <div class="card shadow rounded">
                    <div class="card-header bg-dark text-white">
                        <h4>Post Create</h4>
                    </div>
                    <form action="/posts" method="post">
                        @csrf
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Enter Post">
                            </div>
                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" class="form-control" cols="20" rows="5">{{old('description')}}</textarea>
                            </div>
                            <a href=""> <button class="btn btn-info mt-2">Create</button>
                            </a>
                            <a href="/posts" class="btn btn-primary mt-2"> Back </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
