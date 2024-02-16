@extends('layout.app')

@section('content')
    <div class="banner_container">
        <div class="container">
            <span class="current_series text-white">current series</span>
        </div>
    </div>
    <div class="bg-dark py-5">
        <div class="container d-flex flex-column">
            <div class="row py-3">
                @foreach ($comics as $covers)
                    <div class="col-2 pb-3">
                        <a href="{{ route('comics.show', ['comic' => $covers['id']]) }}" class="text-decoration-none">
                            <div class="card border-0 rounded-0">
                                <div class="cover_container">
                                    <img src="{{ $covers['thumb'] }}" class="card-img-top rounded-0" alt="covers">
                                </div>
                                <div class="card-body bg-dark text-white">
                                    <h5 class="card-title text-center text-uppercase fw-bolder">
                                        {{ $covers['series'] }}
                                    </h5>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-12 text-center">
                    <div class="button_container">
                        <span class="load_button text-white">LOAD MORE</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
