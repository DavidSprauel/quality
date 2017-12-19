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
@endsection