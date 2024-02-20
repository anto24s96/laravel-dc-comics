@extends('layout.app')

@section('content')
    <div class="container py-3">
        <div class="row">
            <div class="col-12">

                <div class="border border-5 p-5">
                    <h2 class="text-uppercase">New DC Comics</h2>

                    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="title" class="form-label">Title:</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" required value="{{ $comic['title'] }}">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description:</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="textarea-description" rows="10"
                                name="description">{{ $comic['description'] }}</textarea>
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image:</label>
                            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="image"
                                name="thumb" required value="{{ $comic['thumb'] }}">
                            @error('thumb')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price:</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                                name="price" required value="{{ $comic['price'] }}">
                            @error('price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="series" class="form-label">Series:</label>
                            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series"
                                name="series" required value="{{ $comic['series'] }}">
                            @error('series')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="sale_date" class="form-label">Sale Date:</label>
                            <input type="text" class="form-control @error('sale_date') is-invalid @enderror"
                                id="slae_date" name="sale_date" required value="{{ $comic['sale_date'] }}">
                            @error('sale_date')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">Type:</label>
                            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type"
                                name="type" required value="{{ $comic['type'] }}">
                            @error('type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="artists" class="form-label">Art by:</label>
                            <input type="text" class="form-control @error('artists') is-invalid @enderror" id="title"
                                name="artists" required value="{{ implode(',', json_decode($comic['artists'])) }}">
                            @error('artists')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="writers" class="form-label">Written by:</label>
                            <input type="text" class="form-control @error('writers') is-invalid @enderror" id="title"
                                name="writers" value="{{ implode(',', json_decode($comic['writers'])) }}">
                            @error('writers')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
