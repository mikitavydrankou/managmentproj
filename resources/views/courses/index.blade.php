@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Course application</h2>
    </div>
    <div class="card-body">
        <a href="{{ url('/courses/create') }}" class="btn btn-success btn-sm" title="Add new course">
            <i class="fa fa-plus" aria-hidden="true"></i> Add new
        </a>
        <br/>
        <br/>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Syllabus</th>
                    <th>Duration</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($courses as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->syllabus }}</td>
                        <td>{{ $item->duration }}</td>

                        <td>
                            <a href="{{ url('/courses/' . $item->id) }}" title="View course"><button class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                            <a href="{{ url('/courses/' . $item->id . '/edit') }}" title="Edit course"><button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>

                            <form method="POST" action="{{ url('/courses' . '/' . $item->id) }}"  accept-charset="UTF-8" style="display: inline">
                            {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete course" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true">Delete</i></button>
                        </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
