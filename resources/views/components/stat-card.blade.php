@props(['icon', 'value', 'label', 'color' => 'primary'])

<div {{ $attributes->merge(['class' => 'stat-card']) }}>
    <div class="stat-card__icon stat-card__icon--{{ $color }}">
        {{ $icon }}
    </div>
    <div class="stat-card__content">
        <h3 class="stat-card__value">{{ $value }}</h3>
        <p class="stat-card__label">{{ $label }}</p>
    </div>
</div>
