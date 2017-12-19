@extends('main.layout')

@section('tab_title')
    {{ __('menu.home') }}
@endsection

@section('content')
    @include('main.slider')

    <section class="section">
        <div class="container">
            <div class="columns">
                <section class="is-two-thirds column">
                    @include('home.news')

                    @include('home.sponsor')
                </section>

                @include('home.tweet')
            </div>
        </div>
    </section>
@endsection