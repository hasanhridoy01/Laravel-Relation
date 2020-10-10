@extends('layouts.app')

@section('main')
    <div class="wrap ">
        <a class="btn btn-sm btn-primary" href="{{ route('course.index') }}"> All Courses</a>
        <div class="card shadow">
            <div class="card-body">
                <h2>Add new Course</h2>
                 <form action="{{ route('course.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for=""> Course Name</label>
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
