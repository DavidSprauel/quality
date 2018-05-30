<h1 class="title is-1 title-perso">
    Gold
</h1>
@if($sponsors->has('gold'))
    @foreach($sponsors->get('gold') as $sponsor)
        <div class="columns">
            @component('sponsors.partials.gold_sponsors', ['sponsor' => $sponsor])
            @endcomponent
        </div>
    @endforeach
@endif


<h2 class="title is-2 title-perso">
    Silver
</h2>
<div class="columns">
    @if($sponsors->has('silver'))
        @foreach($sponsors->get('silver') as $sponsor)
            @component('sponsors.partials.silver_sponsors', ['sponsor' => $sponsor])
            @endcomponent
        @endforeach
    @endif
</div>


<h1 class="title is-3 title-perso">
    Bronze
</h1>
<div class="columns">
    @if($sponsors->has('bronze'))
        @foreach($sponsors->get('bronze') as $sponsor)
            @component('sponsors.partials.bronze_sponsors', ['sponsor' => $sponsor])
            @endcomponent
        @endforeach
    @endif
</div>
