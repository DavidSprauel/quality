<h1 class="title is-1 title-perso">
    Gold
</h1>
@forelse($sponsors->get('gold') as $sponsor)
    <div class="columns">
        @component('sponsors.partials.gold_sponsors', ['sponsor' => $sponsor])
        @endcomponent
    </div>
@empty
<p class="has-text-centerd">{{ __('home.no_sponsor') }}</p>
@endforelse


<h2 class="title is-2 title-perso">
    Silver
</h2>
<div class="columns section">
    @forelse($sponsors->get('silver') as $sponsor)
        @component('sponsors.partials.silver_sponsors', ['sponsor' => $sponsor])
        @endcomponent
    @empty
    <p class="has-text-centerd">{{ __('home.no_sponsor') }}</p>
    @endforelse
</div>


<h1 class="title is-3 title-perso">
    Bronze
</h1>
<div class="columns">
    @forelse($sponsors->get('bronze') as $sponsor)
        @component('sponsors.partials.bronze_sponsors', ['sponsor' => $sponsor])
        @endcomponent
    @empty
    <p class="has-text-centerd">{{ __('home.no_sponsor') }}</p>
    @endforelse
</div>
