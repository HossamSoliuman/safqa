@props(['title'])

<div class="filter-widget">
    <h3 class="filter-widget__title">
        {{ $icon }}          {{-- named slot for the SVG icon --}}
        {{ $title }}
    </h3>
    <ul class="filter-list">
        {{ $slot }}
    </ul>
</div>