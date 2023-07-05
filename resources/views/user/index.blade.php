@extends('layouts.app')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List User</h1>
        <a href="{{ route('user.create') }}" class="btn btn-primary">Add User</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Pass Word</th>
                <th>Is Admin ?</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($auth->count() > 0)
                @foreach($auth as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->email }}</td>
                        <td class="align-middle">{{ $rs->password }}</td>
                        <td class="align-middle">{{ $rs->is_admin }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <form action="{{ route('user.delete', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Author not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
