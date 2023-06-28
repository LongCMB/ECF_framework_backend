@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Detail of the Author</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $author->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Bio</label>
            <textarea class="form-control" name="bio" placeholder="Bio" readonly>{{ $author->bio }}</textarea>
        </div>
    </div>

    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $author->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $author->updated_at }}" readonly>
        </div>
    </div>
@endsection
