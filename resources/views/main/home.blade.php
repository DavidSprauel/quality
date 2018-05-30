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

            <section class="columns">
                @if(session('lang') == 'fr')
                    @php $link = 'https://www.weezevent.com/congressafqpeoq2018?lg_billetterie=1&id_evenement=296489'; @endphp
                @else
                    @php $link = 'https://www.weezevent.com/congressafqpeoq2018?lg_billetterie=1&id_evenement=296489'; @endphp
                @endif
                <a href="{{ $link }}" target="_blank"
                   style="height: 300px; width: 100%; margin-top: 20px;margin-bottom: 20px; background: url({{ asset('images/home_'.session('lang').'.jpg') }}) no-repeat center"
                ></a>
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