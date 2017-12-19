@extends('main.layout')

@section('tab_title')
    {{ __('menu.accomodation') }}
@endsection

@section('content')
    <section class="hero is-primary is-medium">
        <div class="blur accomodation"></div>
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    {{ __('menu.accomodation') }}
                </h1>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">

            <div class="box">
                <article class="media">
                    <div class="media-left">
                        <figure class="image is-128x128">
                            <img src="{{ asset('images/acco.jpg') }}" alt="Image">
                        </figure>
                    </div>
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong>
                                    AFQP Quality Congress - 21-22 June, 2018 Paris/France
                                </strong><br>
                                <em>
                                    <small>21/06/2018 - 09:00 to 22/06/2018 - 19:00</small>
                                </em>
                                <br>
                            <address>
                                Paris<br>
                                108 Boulevard Malesherbes<br>
                                75017 Paris<br>
                                FRANCE<br>
                            </address>
                            <a class="button" style="float: right" href="https://www.ratp.fr/plan-metro"
                               target="_blank">
                                {{ __('home.download_metro') }}
                            </a>
                            </p>
                        </div>
                    </div>
                </article>
            </div>

            <section class="section">
                <div class="box">
                    <article class="media">
                        <div class="media-left">
                            <figure class="image is-128x128">
                                <img src="{{ asset('images/acco.jpg') }}" alt="Image">
                            </figure>
                        </div>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>
                                        Hotel #1
                                    </strong>
                                    <br>
                                    <address>
                                        Paris<br>
                                        108 Boulevard Malesherbes<br>
                                        75017 Paris<br>
                                        FRANCE<br>
                                    </address>
                                <a class="button" style="float: right" href="#"
                                   target="_blank">
                                    {{ __('home.website') }}
                                </a>
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

        </div>
    </section>
@endsection