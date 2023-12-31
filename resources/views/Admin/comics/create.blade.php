@extends('layouts.main')

@section('page-title')
Aggiungi
@endsection


@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                  Aggiungi un nuovo Comic
            </h1>
        </div>
    </div>

    <div class="row">
        <div class="col bg-light py-4">
            <form action="{{ route('comics.store') }}" method="POST">
                @csrf
                

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" maxlength="100" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Enter value..." required>

                    @error('title')
                    <div class="alert alert-danger my-2">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="series" class="form-label">Series</label>
                    <input type="text"  class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Enter value..." required>

                    @error('series')
                    <div class="alert alert-danger my-2">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <input type="text" maxlength="30" class="form-control @error('type') is-invalid @enderror" id="type" name="type" placeholder="Enter value..." required>
                    @error('type')
                    <div class="alert alert-danger my-2">
                        {{$message}}
                    </div>
                    @enderror

                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" min="1" max="100" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required placeholder="Enter value...">

                    @error('price')
                    <div class="alert alert-danger my-2">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="sale_date" class="form-label">sale_date</label>
                    <input type="date"  class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="Enter value..." required>

                    @error('sale_date')
                    <div class="alert alert-danger my-2">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" required rows="3"></textarea>

                    @error('description')
                    <div class="alert alert-danger my-2">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="artists" class="form-label">Artists</label>
                    <input type="text"  class="form-control" id="artists" name="artists" placeholder="Enter value..." 
                        >
                </div>

                <div class="mb-3">
                    <label for="writers" class="form-label">Writers</label>
                    <input type="text"  class="form-control" id="writers" name="writers" placeholder="Enter value..." 
                        >
                </div>

                <div>
                    <button type="submit" class="btn btn-success w-100">
                       Aggiungi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection