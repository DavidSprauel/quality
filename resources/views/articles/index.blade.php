@extends('main.layout')

@section('tab_title')
    {{ __('menu.news') }}
@endsection

@section('content')
    <section class="hero is-primary is-medium">
        <div class="blur news-img"></div>
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    {{ __('menu.news') }}
                </h1>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            @if(auth()->check())
                <section class="section">
                    <a class="button is-info"
                       href="{{ route('articles.create', session('lang')) }}">
                        Create new Article
                    </a>
                </section>
            @endif
            @forelse($articles as $article)
                <div class="box">
                    <article class="media">
                        <figure class="media-left">
                            <p class="image is-64x64">
                                <img src="{{ $article->picture }}">
                            </p>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>
                                        <a href="{{ $article->path() }}">
                                            {{ $article->title }}
                                        </a>
                                    </strong>
                                    <br>
                                    {!! str_limit($article->body, 250, '...'.__('home.read', [
                                        'link' => $article->path()
                                    ])) !!}
                                </p>
                            </div>
                            <nav class="level is-mobile">
                            </nav>
                        </div>
                    </article>
                </div>
            @empty
                <p class="has-text-centered">{{ __('home.no_news') }}</p>
            @endforelse

            {{ $articles->links('pagination') }}
        </div>
    </section>
@endsection