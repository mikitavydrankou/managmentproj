@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Student application</h2>
    </div>
    <div class="card-body">
        <a href="{{ url('/students/create') }}" class="btn btn-success btn-sm" title="Add new student">
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
                    <th>Address</th>
                    <th>Mobile</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->mobile }}</td>

                        <td>
                            <a href="{{ url('/student/' . $item->id) }}" title="View student"><button class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit student"><button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>

                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}"  accept-charset="UTF-8" style="display: inline">
                            {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete student" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true">Delete</i></button>
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
