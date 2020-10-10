@extends('layouts.app')

@section('main')
    <div class="wrap-table ">
        <a class="btn btn-sm btn-primary" href="{{ route('course.create') }}"> Add new Course </a>
        <a class="btn btn-sm btn-warning" href="{{ route('students.index') }}"> Students </a>
        <div class="card shadow">
            <div class="card-body">
                <h2>All Course</h2>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Students</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                     @foreach( $all_course as $course )
                    <tr>
                        <td>{{ $loop -> index + 1 }}</td>
                        <td>{{ $course -> name }}</td>
                        <td>
                           @foreach( $course -> students as $s )
                            {{ $s -> name }} ,
                           @endforeach
                        </td>

                        <td>
                            <a class="btn btn-sm btn-info" href="#">View</a>
                            <a class="btn btn-sm btn-warning" href="#">Edit</a>
                            <a class="btn btn-sm btn-danger" href="#">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
