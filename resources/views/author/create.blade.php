@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Add Author</h1>
    <hr />
    <form action="{{ route('author.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="col">
                <textarea class="form-control" name="bio" placeholder="Bio"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
