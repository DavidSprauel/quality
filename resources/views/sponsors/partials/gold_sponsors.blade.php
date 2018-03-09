<div class="column">
    <div class="card">
        <div class="card-content">
            <div class="media">
                <div class="media-left">
                    <figure class="image is-64x64">
                        <img src="{{ asset('images/sponsors/'.$sponsor->picture) }}" alt="Placeholder image">
                    </figure>
                </div>
                <div class="media-content">
                    <p class="title is-4">
                        <a href="{{ $sponsor->link }}" target="_blank">
                            {{ $sponsor->name }}
                        </a>
                    </p>
                </div>
            </div>

            <div class="content">
                {{ str_limit($sponsor->description, 150, '...') }}
            </div>
        </div>
    </div>
</div>

