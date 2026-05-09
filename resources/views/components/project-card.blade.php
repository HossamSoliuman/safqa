@props([
    'title',
    'description',
    'budget',
    'offers',
    'publishedAt',
    'featured' => false,
])

<div class="card project-card">

    {{-- Bookmark icon --}}
    <svg class="project-card__bookmark" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path>
    </svg>

    {{-- Category icon (named slot) --}}
    <div class="project-card__icon-box">
        {{ $icon }}
    </div>

    <div class="project-card__body">
        <h3 class="font-bold text-lg project-card__title">
            <a href="{{ route('projects.show') }}" style="color:inherit; text-decoration:none;">{{ $title }}</a>
        </h3>
        <p class="text-muted text-sm project-card__desc">{{ $description }}</p>

        <div class="project-card__tags">
            @if($featured)
                <x-tag premium />
            @endif
            {{ $tags }}   {{-- named slot for tag list --}}
        </div>
    </div>

    <div class="project-card__meta">
        <div class="d-flex justify-between" style="width:100%; margin-top:10px;">
            <div class="meta-item" style="align-items:center;">
                <span class="meta-item__label">{{ $publishedAt }}</span>
                <span class="meta-item__value text-sm">نشر</span>
            </div>
            <div class="meta-item" style="align-items:center;">
                <span class="meta-item__value">{{ $offers }}</span>
                <span class="meta-item__label">عروض</span>
            </div>
            <div class="meta-item" style="align-items:center;">
                <span class="meta-item__value meta-item__value--primary">{{ $budget }}</span>
                <span class="meta-item__label">ميزانية المشروع</span>
            </div>
        </div>
    </div>

</div>