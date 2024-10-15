@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>Teacher application</h2>
    </div>
    <div class="card-body">
        <a href="{{ url('/teachers/create') }}" class="btn btn-success btn-sm" title="Add new teacher">
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
                @foreach($teachers as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->mobile }}</td>

                        <td>
                            <a href="{{ url('/teachers/' . $item->id) }}" title="View teacher"><button class="btn btn-primary btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>
                            <a href="{{ url('/teachers/' . $item->id . '/edit') }}" title="Edit teacher"><button class="btn btn-warning btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>

                            <form method="POST" action="{{ url('/teachers' . '/' . $item->id) }}"  accept-charset="UTF-8" style="display: inline">
                            {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete teacher" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true">Delete</i></button>
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
