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

            <section class="columns" style="border: 2px solid #333; height: 300px; margin-top: 20px;margin-bottom: 20px;">

            </section>

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