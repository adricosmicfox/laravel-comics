@extends('layouts.app')

@section('title')
    DC-homepage
@endsection

@section('main_content')
    <section>
        <button class="btn-series">Current Series</button>
        <div class="container">
            @foreach ($comics_array as $comic)
                @include('components.comics-card');
            @endforeach
        </div>
        <button class="btn-more">Load More</button>
    </section>

    <div class="bonus">
        <div class="bonus-content container">
            <ul>
                <li>
                    <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="" />
                    <h3>Digital Comics</h3>
                </li>
                <li>
                    <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="" />
                    <h3>DC Merchandise</h3>
                </li>
                <li>
                    <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="" />
                    <h3>Subscription</h3>
                </li>
                <li>
                    <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="" />
                    <h3>Comic Shop Locator</h3>
                </li>
                <li>
                    <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="" />
                    <h3>DC Power Visa</h3>
                </li>
            </ul>
        </div>
    </div>
@endsection
