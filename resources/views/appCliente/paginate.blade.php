@if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <ul class="pagination" >
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">&lsaquo;Anterior</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" wire:click="previousPage" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;Anterior</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item " aria-current="page"><span class="page-link" style="background-color: #4A9D22; color: white;">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" wire:click="gotoPage({{$page}})">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" wire:click="nextPage" rel="next" aria-label="@lang('pagination.next')">Siguiente&rsaquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">Siguiente&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
