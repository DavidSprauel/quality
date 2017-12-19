<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ route('home', session('lang')) }}">
                <img src="{{ asset('images/afqp.jpg') }}" alt=""> &nbsp;
                {{ __('home.title') }}
            </a>
        </div>

        <div class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item {{ request()->segment(1) == 'fr' ? 'is-active' : '' }}"
                   href="/fr/{{$currentUrl}}">
                    <img src="{{ asset('images/fr.svg') }}" alt="Francais" width="16">
                </a>
                <a class="navbar-item {{ request()->segment(1) == 'en' ? 'is-active' : '' }}"
                   href="/en/{{$currentUrl}}">
                    <img src="{{ asset('images/gb.svg') }}" alt="Francais" width="16">
                </a>

                <a class="navbar-item" href="">
                    <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
                </a>

                <a class="navbar-item" href="">
                    <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                </a>

                <a class="navbar-item" href="">
                    <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
                </a>

            </div>
        </div>
    </div>
</nav>

<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item {{ request()->is('*/home*') ? 'is-active' : '' }}"
                   href="{{ route('home', session('lang')) }}">
                    {{ __('menu.home') }}
                </a>
                <a class="navbar-item {{ request()->is('*/articles*') ? 'is-active' : '' }}"
                   href="{{ route('articles.index', session('lang')) }}">
                    {{ __('menu.news') }}
                </a>
                <a class="navbar-item {{ request()->is('*/program') ? 'is-active' : '' }}"
                   href="{{ route('program', session('lang')) }}">
                    {{ __('menu.program') }}
                </a>
                <a class="navbar-item {{ request()->is('*/speakers') ? 'is-active' : '' }}"
                   href="{{ route('speakers', session('lang')) }}">
                    {{ __('menu.speakers') }}
                </a>
                <a class="navbar-item {{ request()->is('*/registration') ? 'is-active' : '' }}"
                   href="{{ route('registration', session('lang')) }}">
                    {{ __('menu.registration') }}
                </a>
                <a class="navbar-item {{ request()->is('*/sponsors*') ? 'is-active' : '' }}"
                   href="{{ route('sponsors.index', session('lang')) }}">
                    {{ __('menu.sponsor') }}
                </a>
                <a class="navbar-item {{ request()->is('*/accomodations*') ? 'is-active' : '' }}"
                   href="{{ route('accomodations', session('lang')) }}">
                    {{ __('menu.accomodation') }}
                </a>
                <a class="navbar-item {{ request()->is('*/contact') ? 'is-active' : '' }}"
                   href="{{ route('contact', session('lang')) }}">
                    {{ __('menu.contact') }}
                </a>
            </div>
        </div>
    </div>
</nav>
