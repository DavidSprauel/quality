<div class="column is-2 has-text-centered">
    <div class="card">
        <div class="card-content">
            <div class="media">
                <div class="media-content">
                    <figure class="image is-128x128" style="margin: auto;">
                        <img src="{{ asset('images/sponsors/'.$sponsor->picture) }}" alt="Placeholder image">
                        <figcaption>
                            <p class="title has-text-centered">
                                <a href="{{ $sponsor->link }}" target="_blank" style="color: black;">
                                    {{ $sponsor->name }}
                                </a>
                            </p>
                        </figcaption>
                    </figure>
                </div>
            </div>

            {{--<div class="content">--}}
                {{--{{ str_limit($sponsor->description, 150, '...') }}--}}
            {{--</div>--}}
        </div>
    </div>
</div>

