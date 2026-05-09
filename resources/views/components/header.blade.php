<header class="header">
    <div class="container header__inner">

        <a href="{{ route('home') }}" class="logo d-flex align-center gap-sm">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M16 0C7.163 0 0 7.163 0 16s7.163 16 16 16 16-7.163 16-16S24.837 0 16 0zm-1.5 24.5l-8.5-8.5 2.121-2.121 6.379 6.379 10.379-10.379 2.121 2.121-12.5 12.5z"
                    fill="#f37021" />
            </svg>
            <span class="font-bold text-xl">SAFQA</span>
        </a>

        <nav class="nav">
            <ul class="nav__list">
                <x-nav-link :href="route('home')" label="الرئيسية" :active="request()->routeIs('home')" />
                <x-nav-link :href="route('projects.index')" label="المشاريع" :active="request()->routeIs('projects.*')" />
                <x-nav-link :href="route('freelancers.show')" label="الفريلانسرز" :active="request()->routeIs('freelancers.*')" />
                <x-nav-link href="#" label="التصنيفات" />
                <x-nav-link :href="route('map')" label="الخريطة" :active="request()->routeIs('map')" />
                <x-nav-link href="#" label="المدونة" />
                <x-nav-link href="#" label="عن المنصة" />
                <x-nav-link href="#" label="تواصل معنا" />
            </ul>
        </nav>

        <div class="d-flex align-center gap-sm">
            <a href="{{ route('map') }}" class="btn btn--primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
                انشر مشروعك
            </a>
            <a href="{{ route('login') }}" class="btn btn--outline">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                تسجيل الدخول
            </a>
        </div>

    </div>
</header>
