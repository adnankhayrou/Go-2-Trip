@if ($paginator->hasPages())
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled text-black" aria-disabled="true">
                    <span class="page-link text-black">@lang('pagination.previous')</span>
                </li>
            @else
                <li class="page-item text-black">
                    <a class="page-link text-black" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item text-black">
                    <a class="page-link text-black" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
                </li>
            @else
                <li class="page-item disabled text-black" aria-disabled="true">
                    <span class="page-link text-black">@lang('pagination.next')</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
