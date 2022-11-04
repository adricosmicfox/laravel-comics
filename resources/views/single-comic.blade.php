@extends('layouts.app')

@section('title')
    Comic
@endsection

@section('main_content')
    {{-- Striscia blu e anteprima img fumetto --}}
    <div class="blu-bg">
        <div class="container-s">
            <div class="img-chosen-comic">
                <img src="{{ $comics['thumb'] }}" alt="">
                <div class="up-text">Comic Book</div>
                <div class="bottom-text">View Gallery</div>
            </div>
        </div>
    </div>
    {{-- Info fumetto --}}
    <div class="deluxe-edition">
        <div class="container-s div-cont">
            <div class="col-sx">
                <h1>{{ $comics['title'] }}</h1>
                <div class="price-tab">
                    <div class="tab-1">
                        <span><span class="green-text">U.S Price: </span>{{ $comics['price'] }}</span>
                        <span class="green-text available">AVAILABLE</span>
                    </div>
                    <div class="tab-2">
                        <span>Check Availability</span>
                    </div>
                </div>
                <div class="description">
                    <p>{{ $comics['description'] }}</p>
                </div>
            </div>
            <div class="col-dx">
                <div>
                    <p>Advertisment</p>
                    <img src="{{ asset('images/adv.jpg') }}" alt="Advertisment">
                </div>
            </div>
        </div>
    </div>
    {{-- Info fumetto parte 2 --}}
    <div class="talent-specs">
        <div class="container-s">
            {{-- Top --}}
            <div class="div-cont">
                <div class="col-sx">
                    <h3>Talent</h3>
                    <div class="spacer">
                        <small>Art by:</small>
                        <p>
                            @foreach ($comics['artists'] as $name)
                                {{ $name }}<span class="black">,</span>
                            @endforeach
                        </p>
                    </div>
                    <div class="spacer">
                        <small>Written by:</small>
                        <p>
                            @foreach ($comics['writers'] as $name)
                                {{ $name }}<span class="black">,</span>
                            @endforeach
                        </p>
                    </div>
                </div>

                <div class="col-dx">
                    <h3>Specs</h3>
                    <div class="spacer">
                        <small>Series:</small>
                        <p> {{ $comics['series'] }} </p>
                    </div>
                    <div class="spacer">
                        <small>U.S Price::</small>
                        <p class="black"> {{ $comics['price'] }} </p>
                    </div>
                    <div class="spacer">
                        <small>On Sale Date:</small>
                        <p class="black"> {{ $comics['sale_date'] }} </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- Bottom --}}
        <div class="container-s bottom-info">
            <div class="div-cont">
                @for ($i = 0; $i <= 3; $i++)
                    <div class="card-merch">
                        <span>Digital Comics</span>
                        <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="">
                    </div>
                @endfor
            </div>
        </div>
    </div>
@endsection
