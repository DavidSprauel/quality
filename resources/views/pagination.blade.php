@if ($paginator->lastPage() > 1)
    <nav class="pagination is-centered" role="navigation" aria-label="pagination">
        <a class="pagination-previous {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}"
           href="{{ $paginator->url(1) }}">
            {{ __('home.previous') }}
        </a>
        <a class="pagination-next {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}"
           href="{{ $paginator->url($paginator->currentPage()+1) }}">
            {{ __('home.next') }}
        </a>
        <ul class="pagination-list">
            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <li>
                <a class="pagination-link {{ ($paginator->currentPage() == $i) ? ' is-current' : '' }}"
                   href="{{ $paginator->url($i) }}"
                   aria-label="Page 46"
                   aria-current="page">
                    {{ $i }}
                </a>
            </li>
            @endfor
        </ul>
    </nav>
@endif