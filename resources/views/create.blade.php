@extends('layout.app')

@section('content')
    <div class="container py-3">
        <div class="row">
            <div class="col-12">

                <div class="border border-5 p-5">
                    <h2 class="text-uppercase">New DC Comics</h2>

                    <form action="{{ route('comics.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title:</label>
                            <input type="text" class="form-control" id="title" name="title" required
                                value="{{ old('title') }}">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description:</label>
                            <textarea class="form-control" id="textarea-description" rows="10" name="description">{{ old('description') }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image:</label>
                            <input type="text" class="form-control" id="image" name="thumb" required
                                value="{{ old('thumb') }}">
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Price:</label>
                            <input type="text" class="form-control" id="price" name="price" required
                                value="{{ old('price') }}">
                        </div>

                        <div class="mb-3">
                            <label for="series" class="form-label">Series:</label>
                            <input type="text" class="form-control" id="series" name="series" required
                                value="{{ old('series') }}">
                        </div>

                        <div class="mb-3">
                            <label for="sale_date" class="form-label">Sale Date:</label>
                            <input type="text" class="form-control" id="slae_date" name="sale_date" required
                                value="{{ old('sale_date') }}">
                        </div>

                        <div class="mb-3">
                            <label for="type" class="form-label">Type:</label>
                            <input type="text" class="form-control" id="type" name="type" required
                                value="{{ old('type') }}">
                        </div>

                        <div class="mb-3">
                            <label for="artists" class="form-label">Art by:</label>
                            <input type="text" class="form-control" id="title" name="artists" required
                                value="{{ old('artists') }}">
                        </div>

                        <div class="mb-3">
                            <label for="writers" class="form-label">Written by:</label>
                            <input type="text" class="form-control" id="title" name="writers"
                                value="{{ old('writers') }}">
                        </div>

                        <button type="submit" class="btn btn-primary">SUBMIT</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
