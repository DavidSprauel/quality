@extends('main.layout')

@section('tab_title')
    {{ __('menu.home') }}
@endsection

@section('content')
    @include('main.slider')

    <section class="section">
        <div class="container">
            <section class="columns">
                <p class="has-text-justified">
                    {!! __('home.text') !!}
                </p>
            </section>

            <figure style="margin: 15px 0">
                <img src="{{ asset('images/banner.jpg') }}" alt="">
            </figure>

            <div class="columns">
                <section class="is-8 column">
                    @include('home.news')
                </section>

                @include('home.sponsor')

                {{--@include('home.tweet')--}}
            </div>
        </div>
    </section>
@endsection