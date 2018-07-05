<article class="media" style="padding-top: 50px;padding-bottom: 50px;" id="{{ camel_case($s->name) }}">
    <figure class="media-left" style="border-radius:1000px !important; overflow: hidden; border: 1px solid rgba(0,0,0,0.2)">
        <div class="image is-128x128" style="height:128px;width:128px; background-image:url({{ $s->picture ? asset('images/intervenants/'.$s->picture) :  asset('images/default-avatar.png')}});background-size:cover;" ></div>
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