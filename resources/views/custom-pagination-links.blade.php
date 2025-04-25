<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="mt-4">
            <ul class="pagination justify-content-center">

                @if ($paginator->onFirstPage())
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i
                                class="fa-solid fa-arrow-left"></i></a>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" wire:click.prevent="previousPage" wire:loading.attr="disabled"
                            href="#" tabindex="-1" aria-disabled="true">
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>
                    </li>
                @endif

                @foreach ($elements as $element)
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            <li class="page-item {{ $page == $paginator->currentPage() ? 'active' : '' }}">
                                <a class="page-link" wire:click.prevent="gotoPage({{ $page }})"
                                    href="#">{{ $page }}</a>
                            </li>
                        @endforeach
                    @elseif (is_string($element))
                        <li class="page-item disabled">
                            <span class="page-link">{{ $element }}</span>
                        </li>
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" wire:click.prevent="nextPage" wire:loading.attr="disabled" href="#">
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i
                                class="fa-solid fa-arrow-right"></i></a>
                    </li>
                @endif
            </ul>
        </nav>
    @endif
</div>
