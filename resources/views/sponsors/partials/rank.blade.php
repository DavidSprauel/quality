<h1 class="title is-1 title-perso">
    Gold
</h1>
@if($sponsors->has('gold'))
    @forelse($sponsors->get('gold') as $sponsor)
        <div class="columns">
            @component('sponsors.partials.gold_sponsors', ['sponsor' => $sponsor])
            @endcomponent
        </div>
    @empty
        <p class="has-text-centerd">{{ __('home.no_sponsor') }}</p>
    @endforelse
@else
    <p class="has-text-centered">{{ __('home.no_sponsor') }}</p>
@endif


<h2 class="title is-2 title-perso">
    Silver
</h2>
<div class="columns section">
    @if($sponsors->has('silver'))
        @forelse($sponsors->get('silver') as $sponsor)
            @component('sponsors.partials.silver_sponsors', ['sponsor' => $sponsor])
            @endcomponent
        @empty
            <p class="has-text-centerd">{{ __('home.no_sponsor') }}</p>
        @endforelse
    @else
        <p class="has-text-centered">{{ __('home.no_sponsor') }}</p>
    @endif
</div>


<h1 class="title is-3 title-perso">
    Bronze
</h1>
<div class="columns">
    @if($sponsors->has('bronze'))
        @forelse($sponsors->get('bronze') as $sponsor)
            @component('sponsors.partials.bronze_sponsors', ['sponsor' => $sponsor])
            @endcomponent
        @empty
            <p class="has-text-centerd">{{ __('home.no_sponsor') }}</p>
        @endforelse
    @else
        <p class="has-text-centered">{{ __('home.no_sponsor') }}</p>
    @endif
</div>
