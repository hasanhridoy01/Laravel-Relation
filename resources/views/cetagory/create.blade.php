@extends('layouts.app')
@section('main')
    <div class="wrap ">
        <a class="btn btn-sm btn-primary" href="{{ route('category.index') }}"> All categories</a>
        <div class="card shadow-lg">
            <div class="card-body">
                <h2>Add Category</h2>
                <form action="{{ route('category.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for=""> Category Name</label>
                        <input name="name" class="form-control" type="text">
                    </div>

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="Add">
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
@endsection