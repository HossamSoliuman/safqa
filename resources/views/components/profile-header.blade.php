@props(['title', 'category', 'publishedAt', 'type' => 'project'])

<div class="profile-header">
    <div class="container d-flex justify-between align-center">
        <div>
            <nav class="breadcrumb text-sm text-muted mb-xs">
                الرئيسية / المشاريع / {{ $title }}
            </nav>
            <h1 class="text-2xl font-bold mb-xs">{{ $title }}</h1>
            <div class="d-flex gap-md text-sm text-muted">
                <span class="d-flex align-center gap-xs">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    {{ $category }}
                </span>
                <span class="d-flex align-center gap-xs">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    نشر في {{ $publishedAt }}
                </span>
            </div>
        </div>
        <div class="d-flex gap-sm">
            <button class="btn btn--outline">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
                حفظ
            </button>
            <button class="btn btn--outline">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
            </button>
        </div>
    </div>
</div>
