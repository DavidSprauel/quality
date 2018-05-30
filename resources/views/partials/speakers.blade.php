<article class="media" style="padding-top: 50px;padding-bottom: 50px;" id="{{ camel_case($s->name) }}">
    <figure class="media-left" style="border-radius:1000px !important; overflow: hidden;">
        <p class="image is-128x128" style=" min-height:128px !important;">
            <img src="{{ asset('images/intervenants/'.$s->picture) }}">
        </p>
    </figure>
    <div class="media-content">
        <div class="content">
            <p class="text-justify">
                <strong>{{ $s->name }}</strong> <br>
                <small><em>{{ $s->{'title_'.session('lang')} }}</em></small>
                <br>
                <br>
               {!! nl2br($s->{'text_'.session('lang')}) !!}
            </p>
        </div>
    </div>
</article>