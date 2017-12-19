@extends('main.layout')

@section('tab_title')
    Contact
@endsection

@section('content')
    <section class="hero is-primary is-medium">
        <div class="blur contact"></div>
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Contact
                </h1>
            </div>
        </div>
    </section>

    <section class="section container">
        <form action="/{{ session('lang') }}/contact" method="post">
            {{ csrf_field() }}

            <div class="field">
                <label class="label">{{ __('contact.firstname_field')}}</label>
                <div class="control has-icons-right">
                    <input class="input {{ $errors->has('firstname') ? 'is-danger' : '' }}"
                           type="text"
                           name="firstname"
                           value="{{ old('firstname') }}"
                           placeholder="{{ __('contact.firstname_field_placeholder') }}">
                    @if($errors->has('firstname'))
                        <span class="icon is-small is-right">
                          <i class="fa fa-warning"></i>
                        </span>
                    @endif
                </div>
                @if($errors->has('firstname'))
                    <p class="help is-danger">{{ $errors->first('firstname') }}</p>
                @endif
            </div>

            <div class="field">
                <label class="label">{{ __('contact.lastname_field')}}</label>
                <div class="control has-icons-right">
                    <input class="input {{ $errors->has('lastname') ? 'is-danger' : '' }}"
                           type="text"
                           name="lastname"
                           value="{{ old('lastname') }}"
                           placeholder="{{ __('contact.lastname_field_placeholder') }}">
                    @if($errors->has('lastname'))
                        <span class="icon is-small is-right">
                          <i class="fa fa-warning"></i>
                        </span>
                    @endif
                </div>
                @if($errors->has('lastname'))
                    <p class="help is-danger">{{ $errors->first('lastname') }}</p>
                @endif
            </div>

            <div class="field">
                <label class="label">{{ __('contact.email_field') }}</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}"
                           type="email"
                           name="email"
                           value="{{ old('email') }}"
                           placeholder="{{ __('contact.email_field_placeholder') }}"
                           value="">
                    <span class="icon is-small is-left">
                      <i class="fa fa-envelope"></i>
                    </span>
                    @if($errors->has('email'))
                        <span class="icon is-small is-right">
                          <i class="fa fa-warning"></i>
                        </span>
                    @endif
                </div>
                @if($errors->has('email'))
                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                @endif
            </div>

            <div class="field">
                <label class="label">{{ __('contact.company_field') }}</label>
                <div class="control has-icons-right">
                    <input class="input {{ $errors->has('company') ? 'is-danger' : '' }}"
                           type="text"
                           name="company"
                           value="{{ old('company') }}"
                           placeholder="{{ __('contact.company_field_placeholder') }}"
                           value="">
                    @if($errors->has('company'))
                        <span class="icon is-small is-right">
                          <i class="fa fa-warning"></i>
                        </span>
                    @endif
                </div>
                @if($errors->has('company'))
                    <p class="help is-danger">{{ $errors->first('company') }}</p>
                @endif
            </div>

            <div class="field">
                <label class="label">{{ __('contact.subject_field') }}</label>
                <div class="control has-icons-right">
                    <input class="input {{ $errors->has('subject') ? 'is-danger' : '' }}"
                           type="text"
                           name="subject"
                           value="{{ old('subject') }}"
                           placeholder="{{ __('contact.subject_field_placeholder') }}"
                           value="">
                    @if($errors->has('subject'))
                        <span class="icon is-small is-right">
                          <i class="fa fa-warning"></i>
                        </span>
                    @endif
                </div>
                @if($errors->has('subject'))
                    <p class="help is-danger">{{ $errors->first('subject') }}</p>
                @endif
            </div>

            <div class="field">
                <label class="label">{{ __('contact.message_field') }}</label>
                <div class="control has-icons-right">
                    <textarea class="textarea {{ $errors->has('message') ? 'is-danger' : '' }}"
                              name="message"
                              placeholder="{{ __('contact.message_field_placeholder') }}">{{ old('message') }}</textarea>
                    @if($errors->has('message'))
                        <span class="icon is-small is-right">
                          <i class="fa fa-warning"></i>
                        </span>
                    @endif
                </div>
                @if($errors->has('message'))
                    <p class="help is-danger">{{ $errors->first('message') }}</p>
                @endif
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link">
                        {{ __('contact.submit') }}
                    </button>
                </div>
            </div>
        </form>
    </section>
@endsection