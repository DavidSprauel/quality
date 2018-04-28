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
            <div class="section">

                <p style="margin-bottom: 15px;">
                    {{ __('accomodation.header_text') }}
                </p>

                <a href="https://en.parisinfo.com/where-to-sleep-in-paris" target="_blank" style="margin-bottom: 15px; display: block">
                    {{ __('accomodation.link_top') }}
                </a>

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
                                ENSAM<br>
                                155 boulevard de l’hôpital<br>
                                75013 Paris<br>
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
            </div>

            <section class="section">
                <div class="box">
                    <article class="media">
                        <div class="media-left">
                            <figure class="image is-128x128">
                                <img src="{{ asset('images/hotels/hotel_1.png') }}" alt="Image">
                            </figure>
                        </div>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>
                                        {{ __('accomodation.hotel_1_name') }}
                                    </strong>
                                    <br>
                                    <address>
                                        {{ __('accomodation.hotel_1_address') }}<br>
                                        {{ __('accomodation.hotel_1_zipcode') }}
                                        {{ __('accomodation.hotel_1_city') }}<br>
                                        FRANCE<br>
                                    </address>

                                    <small>{{ __('accomodation.hotel_1_price') }}</small>
                                </p>

                                <p>
                                    {{ __('accomodation.hotel_1_desc') }}
                                </p>

                                <a class="button" style="float: right" href="http://www.pullmanhotels.com/fr/hotel-3013-pullman-paris-la-defense/index.shtml"
                                   target="_blank">
                                    {{ __('home.website') }}
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="box">
                    <article class="media">
                        <div class="media-left">
                            <figure class="image is-128x128">
                                <img src="https://media-cdn.tripadvisor.com/media/photo-s/01/d9/ba/5f/fiap-jean-monnet.jpg" alt="Image">
                            </figure>
                        </div>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>
                                        {{ __('accomodation.hotel_2_name') }}
                                    </strong>
                                    <br>
                                <address>
                                    {{ __('accomodation.hotel_2_address') }}<br>
                                    {{ __('accomodation.hotel_2_zipcode') }}
                                    {{ __('accomodation.hotel_2_city') }}<br>
                                    FRANCE<br>
                                </address>

                                <small>{{ __('accomodation.hotel_2_price') }}</small>
                                </p>

                                <p>
                                    {{ __('accomodation.hotel_2_desc') }}
                                </p>

                                <a class="button" style="float: right" href="http://reservation.bookhostels.com/fiap.fr/?lang=en"
                                   target="_blank">
                                    {{ __('home.website') }}
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="box">
                    <article class="media">
                        <div class="media-left">
                            <figure class="image is-128x128">
                                <img src="{{ asset('images/hotels/hotel_3.png') }}" alt="Image">
                            </figure>
                        </div>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>
                                        {{ __('accomodation.hotel_3_name') }}
                                    </strong>
                                    <br>
                                <address>
                                    {{ __('accomodation.hotel_3_address') }}<br>
                                    {{ __('accomodation.hotel_3_zipcode') }}
                                    {{ __('accomodation.hotel_3_city') }}<br>
                                    FRANCE<br>
                                </address>

                                <small>{{ __('accomodation.hotel_3_price') }}</small>
                                </p>

                                <p>
                                    {{ __('accomodation.hotel_3_desc') }}
                                </p>

                                <a class="button" style="float: right" href="http://www.marriott.com/hotels/travel/parld-renaissance-paris-la-defense-hotel/"
                                   target="_blank">
                                    {{ __('home.website') }}
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="box">
                    <article class="media">
                        <div class="media-left">
                            <figure class="image is-128x128">
                                <img src="{{ asset('images/hotels/hotel_4.png') }}" alt="Image">
                            </figure>
                        </div>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>
                                        {{ __('accomodation.hotel_4_name') }}
                                    </strong>
                                    <br>
                                <address>
                                    {{ __('accomodation.hotel_4_address') }}<br>
                                    {{ __('accomodation.hotel_4_zipcode') }}
                                    {{ __('accomodation.hotel_4_city') }}<br>
                                    FRANCE<br>
                                </address>

                                <small>{{ __('accomodation.hotel_4_price') }}</small>
                                </p>

                                <p>
                                    {!! __('accomodation.hotel_4_desc')  !!}
                                </p>

                                <a class="button" style="float: right" href="https://www.hoteleiffelblomet.com/fr/"
                                   target="_blank">
                                    {{ __('home.website') }}
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="box">
                    <article class="media">
                        <div class="media-left">
                            <figure class="image is-128x128">
                                <img src="{{ asset('images/hotels/hotel_5.png') }}" alt="Image">
                            </figure>
                        </div>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>
                                        {{ __('accomodation.hotel_5_name') }}
                                    </strong>
                                    <br>
                                <address>
                                    {{ __('accomodation.hotel_5_address') }}<br>
                                    {{ __('accomodation.hotel_5_zipcode') }}
                                    {{ __('accomodation.hotel_5_city') }}<br>
                                    FRANCE<br>
                                </address>

                                <small>{{ __('accomodation.hotel_5_price') }}</small>
                                </p>

                                <p>
                                    {!! __('accomodation.hotel_5_desc')  !!}
                                </p>

                                <a class="button" style="float: right" href="http://www.hotelampere.paris/"
                                   target="_blank">
                                    {{ __('home.website') }}
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

        </div>
    </section>
@endsection