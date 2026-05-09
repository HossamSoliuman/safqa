@props(['title', 'icon'])

<a href="#" {{ $attributes->merge(['class' => 'category-card']) }}>
    <div class="category-card__icon">
        {{ $icon }}
    </div>
    <h3 class="category-card__title">{{ $title }}</h3>
</a>
