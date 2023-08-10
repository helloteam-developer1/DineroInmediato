@if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <ul class="pagination" >
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link disabled" aria-hidden="true" ><img class="flechaIzq" src="{{ asset('img/backoffices/Flecha Izquierda.png') }}" alt="">Anterior</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{$paginator->previousPageUrl()}}" rel="prev" aria-label="@lang('pagination.previous')"><img class="flechaIzq" src="{{ asset('img/backoffices/Flecha Izquierda.png') }}" alt="">Anterior</a>
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
                            <li class="page-item " aria-current="page"><span class="page-link" style="background-color: #4A9D22; color: white; border:0.7px solid #4A9D22;">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{$url}}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link active" href="{{$paginator->nextPageUrl()}}" rel="next" aria-label="@lang('pagination.next')">Siguiente<img class="flechaDer" src="{{ asset('img/backoffices/Flecha Derecha.png') }}" alt=""></a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">Siguiente<img class="flechaDer" src="{{ asset('img/backoffices/Flecha Derecha.png') }}" alt=""></span>
                </li>
            @endif
        </ul>
    </nav>
@endif
