<div class="panel column">
    <p class="panel-heading">
        {{ __('home.feed') }}
    </p>

    @forelse($tweets as $tweet)
        <div class="panel-block">
            <article class="media">
                <figure class="media-left">
                    <p class="image is-64x64">
                        <img src="{{ $tweet->user->picture }}">
                    </p>
                </figure>
                <div class="media-content">
                    <div class="content">
                        <p>
                            <strong>{{ $tweet->user->name }}</strong>
                            <small style="font-size: 12px; color: rgba(0,0,0,0.6)">
                                {{ $tweet->posted_at }}
                            </small>
                            <br>
                           {{ $tweet->text }}
                        </p>
                    </div>
                </div>
            </article>
        </div>
    @empty
        <div class="panel-block">
            <p>{{ __('home.no_tweet') }}</p>
        </div>
    @endforelse
</div>