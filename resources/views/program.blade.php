@extends('main.layout')

@section('tab_title')
    {{ __('program.tab') }}
@endsection

@section('content')
    <section class="hero is-primary is-medium">
        <div class="blur"></div>
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    {{ __('program.tab') }}: Quality is the best for tomorrow
                </h1>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="tabs is-centered is-boxed">
                <ul>
                    <li class="is-active">
                        <a href="#day01">{{ __('program.day') }} 1</a>
                    </li>
                    <li>
                        <a href="#day02">{{ __('program.day') }} 2</a>
                    </li>
                </ul>
            </div>

            <div id="day01" class="section tabsBlock">
                <h1 class="title is-4 has-text-centered">Quality , competitiveness for Europa</h1>
                @include('partials.day_one')
            </div>

            <div id="day02" class="section tabsBlock">
                <h1 class="title is-4 has-text-centered">Quality leader, a key role</h1>
                @include('partials.day_two')
            </div>
        </div>
    </section>
@endsection