@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="text-center">
                <h1>Simple Blog</h1>
            </div>
            <div class="card shadow rounded">
                <div class="card-header">
                    Post Create
                </div>
                <form action="">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Post" required>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control"  cols="20" rows="5" required></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
