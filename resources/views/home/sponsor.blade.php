<h1 class="title is-2 title-perso">
    Sponsors
</h1>

<section class="section">
    <div class="columns is-multiline">
        @forelse($sponsor as $s)
            <div class="column">
                <a href="{{ $s->link }}" target="_blank" class="sponsors">
                    <figure class="image is-128x128">
                        <img src="{{ $s->picture }}">
                    </figure>
                </a>
            </div>
        @empty
            <p class="has-text-centered">
                {{ __('home.no_sponsor') }}
            </p>
        @endforelse
    </div>
</section>