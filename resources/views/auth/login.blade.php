@extends('main.layout')

@section('tab_title')
   Login
@endsection

@section('content')
    <div class="container">
        <div class="section">
            <div class="columns is-centered">
                <div class="column is-half is-narrow">
                    <div class="panel">
                        <div class="panel-heading">Login</div>

                        <div class="panel-block">
                            <form method="POST" action="{{ route('login') }}" style="width:100%">
                                {{ csrf_field() }}

                                <div class="field {{ $errors->has('email') ? ' is-danger' : '' }}">
                                    <label for="email" class="label">E-Mail Address</label>
                                    <div class="control">
                                        <input id="email" type="email" class="input" name="email"
                                               value="{{ old('email') }}" required autofocus>
                                    </div>
                                    @if ($errors->has('email'))
                                        <p class="help is-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>

                                <div class="field{{ $errors->has('password') ? ' is-danger' : '' }}">
                                    <label for="password" class="label">Password</label>
                                    <div class="control">
                                        <input id="password" type="password" class="input" name="password" required>
                                    </div>
                                    @if ($errors->has('password'))
                                        <p class="help is-danger">{{ $errors->first('password') }}</p>
                                    @endif
                                </div>

                                <div class="field">
                                    <label class="checkbox">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="checkbox">
                                         Remember Me
                                    </label>
                                </div>

                                <div class="field">
                                    <div class="control level-right">
                                        <button type="submit" class="button is-primary">
                                            Login
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </div>
    </div>
@endsection
