@if ($paginator->hasPages())
    <div class="col-12">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="pagination__item pagination__item--prev" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span>
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                    </span>
                </li>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                    <li class="pagination__item pagination__item--prev">
                            <span aria-hidden="true">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                            </span>
                    </li>
                </a>
            @endif
            
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="pagination__item pagination__item--disabled d-none d-md-block" aria-disabled="true">{{ $element }}</li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="pagination__item pagination__item--active" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <a  href="{{ $url }}"><li class="pagination__item d-none d-md-block"><span>{{ $page }}</span></li></a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a class="w" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                    <li class="pagination__item pagination__item--next">
                        <span>
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </span>
                    </li>
                </a>
            @else
                <li class="pagination__item pagination__item--next">
                    <span>
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                </li>
            @endif
        </ul>
    </div>
@endif