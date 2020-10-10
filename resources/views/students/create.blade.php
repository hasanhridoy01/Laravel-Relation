@extends('layouts.app')
@section('main')
<div class="wrap ">
    <a class="btn btn-sm btn-primary" href="{{ route('students.index') }}"> All Students</a>
    <div class="card shadow-lg">
        <div class="card-body">
            <h2>Add Students</h2>
            <form action="{{ route('students.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for=""> Student Name</label>
                    <input name="name" class="form-control" type="text">
                </div>
                
                <div class="form-group">
                    <label for=""> Student Age</label>
                    <input name="age" class="form-control" type="text">
                </div>

                <div class="form-group">
                    @foreach( $all_course as $course )
                    <input name="course_id[]" type="checkbox" value="{{ $course -> id }}" id="{{ $course -> slug }}"> <label for="{{ $course -> slug }}">{{ $course -> name }}</label>
                    <br>
                    @endforeach
                </div>
               
                <div class="form-group">
                    <input class="btn btn-primary" type="submit" value="Add Students">
                </div>

            </form>
        </div>
    </div>
</div>
@endsection