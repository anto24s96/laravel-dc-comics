@extends('layout.app')
@section('content')
    <div class="banner_container">
        <div class="my-container">
            <div class="row px-2">
                <div class="col-3 card_details_container position-relative">
                    <div class="card border-3 rounded-0">
                        <div class="cover_detail position-relative">
                            <img src="{{ $comic['thumb'] }}" class="card-img-top rounded-0" alt="covers">
                            <span class="comic_book text-white px-2">COMIC BOOK</span>
                            <span class="view_gallery text-white">VIEW GALLERY</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- BARRA BLU --}}
    <div class="details_comic_blu_bar"></div>

    {{-- DESCRIZIONE COMIC 1 --}}
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-8 mt-3">
                <div class="cover_details-left">

                    {{-- TITOLO --}}
                    <h3 class="text-uppercase fw-bolder">{{ $comic['title'] }}</h3>

                    {{-- CONTENITORE PREZZO E DISPONIBILITA' --}}
                    <div class="details_available_container d-flex my-3">
                        <div class="col-8 d-flex justify-content-between border-end border-dark p-3">
                            <span class="d-inline-block my-green fw-bolder">U.S Price: <span
                                    class="text-white fw-bolder">{{ $comic['price'] }}</span></span>
                            <span class="fw-bolder d-inline-block my-green">AVAILABLE</span>
                        </div>

                        <div class="col-4 text-center border-start border-dark p-3">
                            <span class="fw-bolder d-inline-block text-white">Check Availability</span>
                        </div>
                    </div>

                    {{-- DESCRIZIONE --}}
                    <p class="text-secondary">{{ $comic['description'] }}</p>
                </div>
            </div>
            <div class="col-3">
                {{-- IMMAGINE SUPERMAN --}}
                <div class="cover_details_right d-flex flex-column align-items-end">
                    <div class="text-secondary fw-bold mb-1">ADVERTISIMENT</div>
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="apply_now">
                </div>
            </div>
        </div>
    </div>

    {{-- DESCRIZIONE PRODOTTO 2 --}}
    <div class="border-top my-bg-grey">
        <div class="my-container">
            <div class="row py-4">
                {{-- TALENT --}}
                <div class="col-6">
                    <h4 class="mb-4">Talent</h4>
                    <div class="border-top border-bottom py-3 d-flex justify-content-between">
                        <span>Art by:</span>
                        <span class="blu-comics fw-bolder">
                            @foreach ($artists as $key => $artist)
                                {{ $artist }}
                                @if (end($artists) == $artist)
                                    .
                                @else
                                    ,
                                @endif
                            @endforeach
                        </span>
                    </div>

                    <div class="border-top border-bottom py-3 d-flex justify-content-between">
                        <span>Written by:</span>
                        <span class="blu-comics fw-bolder">
                            @foreach ($writers as $key => $writer)
                                {{ $writer }}
                                @if (end($writers) == $writer)
                                    .
                                @else
                                    ,
                                @endif
                            @endforeach
                        </span>
                    </div>
                </div>
                {{-- SPECS --}}
                <div class="col-6">
                    <h4 class="mb-4">Specs</h4>
                    <div class="border-top border-bottom py-3 d-flex justify-content-between">
                        <span>Series:</span>
                        <span class="blu-comics fw-bolder me-5 text-uppercase">{{ $comic['series'] }}</span>
                    </div>

                    <div class="border-top border-bottom py-3 d-flex justify-content-between">
                        <span>U.S Price:</span>
                        <span class="blu-comics fw-bolder me-5">{{ $comic['price'] }}</span>
                    </div>

                    <div class="border-top border-bottom py-3 d-flex justify-content-between">
                        <span>On Sale Date:</span>
                        <span class="blu-comics fw-bolder me-5">{{ $comic['sale_date'] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
