<h1 class="title is-2 title-perso">
    News
</h1>
<section class="section">
    @forelse($articles as $article)
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
    @empty
        <p class="has-text-centered">{{ __('home.no_news') }}</p>
    @endforelse
</section>