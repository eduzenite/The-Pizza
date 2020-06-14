@if ($paginator->hasPages())
    <hr>
    <nav aria-label="Paginação">
        <ul class="pagination justify-content-center">
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i
                            class="fa fa-chevron-left"></i><i class="fa fa-chevron-left"></i></a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}"><i
                            class="fa fa-chevron-left"></i></a>
                </li>
            @endif

            @if($paginator->currentPage() > 4)
                <li class="hidden-xs page-item"><a class="page-link" href="{{ $paginator->url(1) }}">1</a></li>
            @endif
            @if($paginator->currentPage() > 4)
                <li class="disabled hidden-xs page-item"><a class="page-link" href="#">...</a></li>
            @endif
            @foreach(range(1, $paginator->lastPage()) as $i)
                @if($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
                    @if ($i == $paginator->currentPage())
                        <li class="page-item active"><a class="page-link" href="#">{{ $i }}</a></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                    @endif
                @endif
            @endforeach
            @if($paginator->currentPage() < $paginator->lastPage() - 4)
                <li class="disabled hidden-xs page-item"><a class="page-link" href="#">...</a></li>
            @endif
            @if($paginator->currentPage() < $paginator->lastPage() - 4)
                <li class="hidden-xs page-item"><a class="page-link"
                                                   href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a>
                </li>
            @endif

            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}"><i class="fa fa-chevron-right"></i></a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="#"><i class="fa fa-chevron-right"></i><i class="fa fa-chevron-right"></i></a>
                </li>
            @endif
        </ul>
    </nav>
@endif
