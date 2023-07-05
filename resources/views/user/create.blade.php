@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Add Author</h1>
    <hr />
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <label for="is_admin">Is admin ?</label>
                <select name="is_admin" id="is_admin">
                    <option value="1">yes</option>
                    <option value="0">no</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
            </div>
            <div class="col">
                <input type="password" name="password" id="password" class="form-control" placeholder="Pass word">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
