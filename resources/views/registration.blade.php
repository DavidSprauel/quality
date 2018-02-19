@extends('main.layout')

@section('tab_title')
    {{ __('menu.registration') }}
@endsection

@section('content')
    <section class="hero is-primary is-medium">
        <div class="blur registration"></div>
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    {{ __('menu.registration') }}
                </h1>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column is-half">
                    <div class="box">
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <h1 class="title">Informations</h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at dignissim est. Aenean id lectus nibh. Donec sodales, urna vitae luctus ullamcorper, arcu tortor elementum neque, eget hendrerit dolor sapien nec lectus. Nullam a purus quis eros imperdiet consectetur ut eu ante. Donec imperdiet, ipsum at placerat vehicula, orci ex semper libero, non commodo libero ex et sapien. In nibh nulla, facilisis nec erat id, ultrices consequat odio. Donec laoreet ante urna, ac ullamcorper velit bibendum id. Curabitur a convallis massa. In pharetra vehicula ultrices.
                                        <br>
                                        Nullam in dui velit. Vestibulum at nisl dolor. Vestibulum sem felis, rutrum vel consectetur a, vestibulum at metus. Nullam consectetur quam ut nunc maximus, eget aliquam ante porta. Vestibulum condimentum consequat ultricies. Nullam congue pharetra turpis vel iaculis. Fusce lacinia bibendum lacinia. Ut vel arcu suscipit, imperdiet lectus quis, accumsan magna. Aenean nulla massa, feugiat ac diam eu, tristique volutpat sapien. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque condimentum nisi id ex mattis, at gravida purus porta. Phasellus at mauris non turpis laoreet tempor ac sed turpis.
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="column">
                    <a  class="button is-info is-block" href="https://www.weezevent.com/congressafqpeoq2018?lg_billetterie=1&id_evenement=296489" target="_blank">
                        Registration
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection