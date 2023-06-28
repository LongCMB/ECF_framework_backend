@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Detail of citation</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Citation</label>
            <input type="text" name="citation" class="form-control" placeholder="Citation" value="{{ $citation->citation }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Author</label>
            <input type="text" name="author" class="form-control" placeholder="Author" value="{{ $citation->author?->name }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Explication</label>
            <textarea class="form-control" name="explication" placeholder="Explication" readonly>{{ $citation->explication }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $citation->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $citation->updated_at }}" readonly>
        </div>
    </div>
@endsection
