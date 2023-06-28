@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Edit Author</h1>
    <hr />
    <form action="{{ route('author.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $author->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Bio</label>
                <textarea class="form-control" name="bio" placeholder="Bio" >{{ $author->bio }}</textarea>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
