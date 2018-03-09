<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('tab_title') - AFQP QUALITY CONGRESS 2018</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    @include('main.menu')

    @yield('content')


    <div style="height:130px; border-top: 1px solid rgba(0,0,0,0.1)">
        <div class="columns">
            <div class="column">
                <a href="http://www.qualiteperformance.org" target="_blank">
                    <div style="
                            height:100px;
                            width: 100px;
                            margin: 15px auto;
                            background: url({{ asset('images/logo_afqp.png')  }}) center center;
                            background-size: cover;
                            ">
                    </div>
                </a>
            </div>
            <div class="column">
                <a href="http://www.eoq.org/home.html " target="_blank">
                    <div style="
                            height:125px;
                            width: 170px;
                            margin: 0px auto;
                            background: url({{ asset('images/logo_eoq.jpg') }}) center center;
                            background-size: cover;
                            ">
                    </div>
                </a>
            </div>
        </div>
    </div>

    <footer class="footer" style="background: #4B4B4D;color:white;">
        <div class="container">
            <div class="content has-text-centered">
                <p>
                    {{ __('home.copyright') }}
                </p>
                @if(auth()->check())
                    <form action="{{ route('logout') }}" method="post">
                        {{ csrf_field() }}
                        <button class="is-small is-danger button" type="submit">
                            Logout
                        </button>
                    </form>
                @else
                    <a class="is-small" href="{{ route('login') }}" style="color:#E2004A">Login</a>
                @endif
            </div>
        </div>
    </footer>
</div>

<!-- Scripts -->
<script>
    window.lang = {!! json_encode(session('lang')) !!};
</script>
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
