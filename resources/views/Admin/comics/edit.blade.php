@extends('layouts.main')

@section('page-title')
Modifica
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                {{-- Modifica {{ $comic->title }} --}}
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col bg-light py-4">
            <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" maxlength="100" class="form-control" id="title" name="title" placeholder="Enter value..."
                        value="{{ $comic->title }}">
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text"  class="form-control" id="series" name="series" placeholder="Enter value..." required
                        value="{{ $comic->series }}">
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" maxlength="30" class="form-control" id="type" name="type" placeholder="Enter value..." required
                        value="{{ $comic->type }}">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" min="1" max="99.99" class="form-control" id="price" name="price" placeholder="Enter value..."
                        value="{{ $comic->price }}">
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">sale_date</label>
                    <input type="date"  class="form-control" id="sale_date" name="sale_date" placeholder="Enter value..." required
                        value="{{ $comic->sale_date }}">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ $comic->description }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="artists" class="form-label">Artists</label>
                    <input type="text"  class="form-control" id="artists" name="artists" placeholder="Enter value..." required
                        value="{{ $comic->artists }}">
                </div>

                <div class="mb-3">
                    <label for="writers" class="form-label">Writers</label>
                    <input type="text"  class="form-control" id="writers" name="writers" placeholder="Enter value..." required
                        value="{{ $comic->writers }}">
                </div>

                <div>
                    <button type="submit" class="btn btn-warning w-100">
                        Modifica
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection