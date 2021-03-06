<div class="panel column is-narrow is-offset-1">
    @if($sponsors->has('gold'))
        <h1 class="title is-3 title-perso">
            Sponsor Gold
        </h1>
        @forelse($sponsors->get('gold') as $sponsor)
            <div class="columns">
                @component('sponsors.partials.gold_sponsors', ['sponsor' => $sponsor])
                @endcomponent
            </div>
        @empty
            <p class="has-text-centered">{{ __('home.no_sponsor') }}</p>
        @endforelse
    @endif

    @if($sponsors->has('silver'))
        <h2 class="title is-3 title-perso">
            Sponsor Silver
        </h2>
        @forelse($sponsors->get('silver') as $sponsor)
            <div class="columns">
                @component('sponsors.partials.silver_sponsors', ['sponsor' => $sponsor])
                @endcomponent
            </div>
        @empty
            <p class="has-text-centered">{{ __('home.no_sponsor') }}</p>
        @endforelse
    @endif

    @if($sponsors->has('bronze'))
        <h1 class="title is-3 title-perso">
            Sponsor Bronze
        </h1>

        @forelse($sponsors->get('bronze') as $sponsor)
            <div class="columns">
                @component('sponsors.partials.bronze_sponsors', ['sponsor' => $sponsor])
                @endcomponent
            </div>
        @empty
            <p class="has-text-centered">{{ __('home.no_sponsor') }}</p>
        @endforelse
    @endif

        <h1 class="title is-3 title-perso">
            Partenaire Médias
        </h1>

        <div class="columns">
            <div class="column has-text-centered">
                <figure class="image is-128x128" style="margin: auto;">
                    <div style=" height: 100px;">
                        <a href="http://qualite-references.com" target="_blank" style="color: black;">
                            <img src="{{ asset('images/sponsors/logo_quality.jpg') }}" alt="Placeholder image">
                        </a>
                    </div>
                </figure>
            </div>
        </div>
</div>
