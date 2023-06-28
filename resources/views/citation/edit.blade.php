@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Edit Citation</h1>
    <hr />
    <form action="{{ route('citation.update', $citation->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Citation</label>
                <input type="text" name="citation" class="form-control" placeholder="Citation" value="{{ $citation->citation }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Explication</label>
                <input type="text" name="explication" class="form-control" placeholder="Explication" value="{{ $citation->explication }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">List of author</label>
                <select class="form-select" aria-label="Default select example" name="author_id">
                    <option>List of authors</option>
                    @foreach ($author as $item)
                    <option value="{{ $item->id }}">{{ $item->id }} - {{ $item->name }}</option>
                    @endforeach
                  </select>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
