@extends('main.layout')

@section('tab_title')
    {{ __('menu.news') }}
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <div class="card">
                <div class="card-image">
                    <figure class="image is-16by9">
                        <img src="{{ $article->picture }}" alt="Placeholder image">
                    </figure>
                </div>
                <div class="card-content">
                    <div class="media">
                        <div class="media-content">
                            <p class="title is-2">{{ $article->title }}</p>
                        </div>
                    </div>

                    <div class="content">
                        {!! nl2br($article->body) !!}
                        <br><br>
                        <small>
                            <time datetime="{{ $article->created_at->diffForHumans() }}">{{ $article->created_at->diffForHumans() }}</time>
                        </small>

                        @if(auth()->check())
                            <div class="level-right">
                                <a class="level-item button is-info"
                                   href="{{ $article->path().'/edit' }}">
                                    Edit
                                </a>
                                <form action="{{$article->path()}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="level-item button is-danger">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection