<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="container">
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

                <a class="navbar-item" href="https://twitter.com/QualitePerf" target="_blank">
                    <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
                </a>

                <a class="navbar-item" href="https://www.facebook.com/France-Qualité-469701040098995/" target="_blank">
                    <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                </a>

                <a class="navbar-item" href="https://www.linkedin.com/in/france-qualité-afqp-78857378/" target="_blank">
                    <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
                </a>

            </div>
        </div>
    </div>
</nav>


<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand" style="width: 100% !important; margin-left: 0!important">
            <a class="navbar-item" href="{{ route('home', session('lang')) }}" style="width: 100% !important; padding-left: 0 !important;padding-right: 0 !important">
                <img src="{{ asset('images/afqp.png') }}" alt="" style="height: 100px !important;max-height:100px;">
                <h1 class="title is-3" style="width: 100% !important">
                    {{ __('home.title') }}
                    <span style="display: block; float:right !important">#QualityEC</span>
                </h1>
            </a>
        </div>
    </div>
</nav>

<nav class="navbar myNav" role="navigation" aria-label="main navigation">
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
                <a class="navbar-item {{ request()->is('*/accomodations*') ? 'is-active' : '' }}" target="_blank"
                   href="{{ route('accomodations', session('lang')) }}">
                    {{ __('menu.accomodation') }}
                </a>

                <a class="navbar-item {{ request()->is('*/infos*') ? 'is-active' : '' }}"
                   href="{{ route('infos', session('lang')) }}">
                    {{ __('menu.infos') }}
                </a>

                <a class="navbar-item {{ request()->is('*/contact') ? 'is-active' : '' }}"
                   href="{{ route('contact', session('lang')) }}">
                    {{ __('menu.contact') }}
                </a>
            </div>
        </div>
    </div>
</nav>
