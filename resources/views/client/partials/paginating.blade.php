{{-- <div class="paging__container">
    <p class="paging__box">1</p>
    <p class="paging__box">1</p>
</div> --}}

@if ($paginator->hasPages())
    <nav>
        <ul class="pagination paging__container">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="paging__box disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="paging__lead" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="paging__box">
                    <a href="{{ $paginator->previousPageUrl() }}" class="paging__lead" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="paging__box disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="paging__box activated" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li class="paging__box"><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="paging__box">
                    <a href="{{ $paginator->nextPageUrl() }}" class="paging__lead"  rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="paging__box disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="paging__lead"  aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
