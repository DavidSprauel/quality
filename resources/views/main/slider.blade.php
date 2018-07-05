<div class='carousel'>
    <div class='carousel-container'>
        <div class='carousel-content carousel-animate carousel-animate-slide'>
            <div class='carousel-item' id="countdown">
                <div>
                    <img class="is-background" src="{{ asset('images/slide2.jpg') }}">
                </div>
                <div class="title">
                    <a href="{{ route('program', session('locale')) }}">{{ __('home.visit') }}</a>
                </div>
            </div>
            <div class='carousel-item'>
                <img class="is-background slide2"
                     src="{{ asset('images/paris1.jpeg') }}" />
                <div class="title">
                    <a href="{{ route('accomodations', session('locale')) }}">{{ __('home.slider_2') }}</a>
                </div>
            </div>
            {{--<div class='carousel-item'>--}}
                {{--<img class="is-background" src="https://wikiki.github.io/images/sushi.jpg" alt="" width="640" height="310" />--}}
                {{--<div class="title">Sushi time</div>--}}
            {{--</div>--}}
            {{--<div class='carousel-item'>--}}
                {{--<img class="is-background" src="https://wikiki.github.io/images/life.jpg" alt="" width="640" height="310" />--}}
                {{--<div class="title">Life</div>--}}
            {{--</div>--}}
        </div>
        <div class="carousel-nav-left">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
        </div>
        <div class="carousel-nav-right">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
        </div>
    </div>
</div>
