    @extends('layouts.app')
    @section('main')
    <div class="wrap-table ">
        <a class="btn btn-sm btn-primary" href="{{ route('students.create') }}"> Add new Students </a>
        <a class="btn btn-sm btn-warning" href="{{ route('course.index') }}"> Courses </a>
        <div class="card shadow-lg">
            <div class="card-body">
                <h2>All Students</h2>


                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Student Name</th>
                        <th>Student Age</th>
                        <th>Course</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                     @foreach( $all_student as $student )
                    <tr>
                        <td>{{ $loop -> index + 1 }}</td>
                        <td>{{ $student -> name }}</td>
                        <td>{{ $student -> age }}</td>
                        <td>
                          @foreach( $student -> courses as $c )
                           {{ $c -> name }} ,
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
