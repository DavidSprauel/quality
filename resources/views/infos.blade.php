@extends('main.layout')

@section('tab_title')
    {{ __('menu.infos') }}
@endsection

@section('content')
    <section class="hero is-medium is-primary">
        <div class="blur program"></div>
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    {{ __('menu.infos') }}
                </h1>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <div class="panel">
                        @if(session('lang') == 'en')
                            <div class="panel-heading">Location</div>
                            <div class="panel-block">
                                Arts et Métiers ParisTech<br>
                                155 boulevard de l’hôpital<br>
                                75013 PARIS <br>
                                (Subway 5 Campo Formio - 6 Nationale  -7 Les Gobelins     Railway station Gare de Lyon)

                            </div>
                            <div class="panel-block">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.2887391934637!2d2.355051615922963!3d48.83363091040339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6718c8bebce9f%3A0x9220c0c18f5aa958!2s%C3%89cole+Nationale+Sup%C3%A9rieure+d&#39;Arts+et+M%C3%A9tiers!5e0!3m2!1sfr!2sfr!4v1520608253617" width="660" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        @else
                            <div class="panel-heading">Lieu</div>
                            <div class="panel-block">
                                Arts et Métiers ParisTech<br>
                                155 boulevard de l’hôpital<br>
                                75013 PARIS <br>
                                (Métro 5 Campo Formio - 6 Nationale -7 Les Gobelins)
                            </div>
                            <div class="panel-block">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.0364611109044!2d2.457207415923082!3d48.83844321006458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e672a4b65bc059%3A0x49071ec1487040be!2sChalet+de+la+Porte+Jaune!5e0!3m2!1sfr!2sfr!4v1520608318237" width="660" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="column">
                    <div class="panel">
                        @if(session('lang') == 'en')
                            <div class="panel-heading">Gala Dinner</div>
                            <div class="panel-block">
                                Chalet de la porte jaune<br>
                                Avenue de Nogent<br>
                                75012 Paris<br>
                                (Subway 1 : Station Château de Vincennes, and Bus 114 ou 210, station Porte Jaune)
                            </div>
                            <div class="panel-block">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.0364611109044!2d2.457207415923082!3d48.83844321006458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e672a4b65bc059%3A0x49071ec1487040be!2sChalet+de+la+Porte+Jaune!5e0!3m2!1sfr!2sfr!4v1520608318237" width="660" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        @else
                            <div class="panel-heading">Diner de Gala</div>
                            <div class="panel-block">
                                Chalet de la porte jaune<br>
                                Avenue de Nogent<br>
                                75012 Paris<br>
                                (Métro 1 : Station Château de Vincennes, puis Bus 114 ou 210, arrêt Porte Jaune)
                            </div>
                            <div class="panel-block">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.0364611109044!2d2.457207415923082!3d48.83844321006458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e672a4b65bc059%3A0x49071ec1487040be!2sChalet+de+la+Porte+Jaune!5e0!3m2!1sfr!2sfr!4v1520608318237" width="660" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection