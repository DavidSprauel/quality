@extends('main.layout')

@section('tab_title')
    {{ __('contact.thanks') }}
@endsection

@section('content')
    <section class="hero is-success">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Thanks for your message
                </h1>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            {{ __('contact.thanks_message') }}
        </div>
    </section>

@endsection