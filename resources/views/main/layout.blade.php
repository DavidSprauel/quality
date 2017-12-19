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

    <footer class="footer">
        <div class="container">
            <div class="content has-text-centered">
                <p>
                    © AFQP Association France Qualité Performance. All rights reserved
                </p>
                @if(auth()->check())
                    <form action="{{ route('logout') }}" method="post">
                        {{ csrf_field() }}
                        <button class="is-small is-danger button" type="submit">
                            Logout
                        </button>
                    </form>
                @else
                    <a class="is-small" href="{{ route('login') }}">Login</a>
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
