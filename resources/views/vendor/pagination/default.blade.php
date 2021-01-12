@if ($paginator->hasPages())
  <div class="pagination-i col-xs-12">
    <ul>
                                                {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
                                                <i class="fa fa-angle-right"></i>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fa fa-angle-right"></i></a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li><a  href="#" class="p-a">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"> <i class="fa fa-angle-right"></i></a></li>
        @else
                                                <i class="fa fa-angle-right"></i>
        @endif
    </ul>
    </div>
@endif