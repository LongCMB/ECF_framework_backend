@extends('layouts.app')

@section('body')
    <h1 class="mb-0">Add Citation</h1>
    <hr />
    <form action="{{ route('citation.store') }}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="citation" class="form-control" placeholder="Citation">
            </div>
            <div class="col">
                <textarea class="form-control" name="explication" placeholder="Explication"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
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
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
