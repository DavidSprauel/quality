@extends('main.layout')

@section('tab_title')
    {{ __('menu.sponsor') }}
@endsection

@section('content')
    <section class="hero is-primary is-medium">
        <div class="blur sponsors-img"></div>
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    {{ __('menu.sponsor') }}
                </h1>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            @include('sponsors.partials.rank')
        </div>
    </section>

    <section class="section">
        <div class="container has-text-centered">
            <a href="{{ __('home.sponsor_link') }}" target="_blank" class="button is-info">
                {{ __('home.sponsor_button_text') }}
            </a>
        </div>
    </section>
@endsection