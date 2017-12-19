<article class="media">
    <figure class="media-left">
        <p class="image is-128">
            <img src="{{$s->picture}}">
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