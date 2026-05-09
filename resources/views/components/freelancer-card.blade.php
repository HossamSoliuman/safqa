@props(['name', 'title', 'rating', 'avatar', 'skills' => []])

<div {{ $attributes->merge(['class' => 'freelancer-card card']) }}>
    <div class="freelancer-card__header">
        <img src="{{ $avatar }}" alt="{{ $name }}" class="freelancer-card__avatar">
        <div class="freelancer-card__info">
            <h3 class="freelancer-card__name">
                <a href="{{ route('freelancers.show') }}" style="color:inherit; text-decoration:none;">{{ $name }}</a>
            </h3>
            <p class="freelancer-card__title">{{ $title }}</p>
        </div>
    </div>
    
    <div class="freelancer-card__rating">
        <span class="star">★</span>
        <span class="value">{{ $rating }}</span>
    </div>

    <div class="freelancer-card__skills">
        @foreach($skills as $skill)
            <x-tag>{{ $skill }}</x-tag>
        @endforeach
    </div>

    <div class="freelancer-card__footer">
        <a href="{{ route('freelancers.show') }}" class="btn btn--outline btn--sm">عرض الملف</a>
    </div>
</div>
