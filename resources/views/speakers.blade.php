@extends('main.layout')

@section('tab_title')
    {{ __('speakers.tab') }}
@endsection

@section('content')
    <section class="hero is-info is-medium">
        <div class="blur speakers"></div>
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    {{ __('speakers.tab') }}
                </h1>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            @foreach($speakers as $s)
                @component('partials.speakers', ['s' => $s])
                @endcomponent
            @endforeach
        </div>

    </section>
@endsection