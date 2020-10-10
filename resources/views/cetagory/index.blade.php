    @extends('layouts.app')
    @section('main')
    <div class="wrap-table ">
        <a class="btn btn-sm btn-primary" href="{{ route('category.create') }}"> Add new category </a>
        <a class="btn btn-sm btn-warning" href="{{ route('post.index') }}">Posts </a>
        <div class="card shadow-lg">
            <div class="card-body">
                <h2>All Data</h2>


                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Cat Name</th>
                        <th>Post title</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $all_cat as $cat )
                    <tr>
                        <td>{{ $loop -> index + 1 }}</td>
                        <td>{{ $cat -> name }}</td>
                        <td>
                        
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
