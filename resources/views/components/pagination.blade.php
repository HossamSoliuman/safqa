@props([
    'current' => 1,
    'total'   => 13,
])

<div class="pagination">
    <a href="#" class="pagination__item" style="min-width:60px;">السابق</a>

    @for($i = 1; $i <= min(5, $total); $i++)
        <a href="#"
           class="pagination__item {{ $i === $current ? 'pagination__item--active' : '' }}">
            {{ $i }}
        </a>
    @endfor

    @if($total > 5)
        <span class="pagination__item pagination__item--dots">...</span>
        <a href="#" class="pagination__item">{{ $total }}</a>
        <span class="pagination__item pagination__item--dots">...</span>
    @endif

    <a href="#" class="pagination__item" style="min-width:60px;">التالي</a>
</div>