<x-layouts.app
    title="SAFQA - المشاريع المتاحة"
    description="اكتشف آلاف المشاريع المناسبة لمهاراتك في صفقا"
>

    {{-- Page Banner --}}
    <section class="page-banner">
        <div class="container">
            <h1 class="text-2xl font-bold mb-xs">المشاريع المفتوحة</h1>
            <p class="text-muted text-lg">اكتشف آلاف المشاريع المناسبة لمهاراتك</p>
        </div>
    </section>

    <div class="container page-layout">

        
        {{-- ═══════════════════════════ SIDEBAR ═══════════════════════════ --}}
        <aside class="sidebar">

            {{-- Categories --}}
            <x-filter-widget title="التصنيفات">
                <x-slot name="icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect>
                        <rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect>
                    </svg>
                </x-slot>

                <li class="filter-list__item">
                    <span class="d-flex align-center gap-xs flex-reverse">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline>
                        </svg>
                        تصميم وبرمجة
                    </span>
                    <span>(128)</span>
                </li>
                <li class="filter-list__item">
                    <span class="d-flex align-center gap-xs flex-reverse">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                        </svg>
                        كتابة وترجمة
                    </span>
                    <span>(96)</span>
                </li>
                {{-- ... remaining categories ... --}}
                <li>
                    <a href="#" class="text-primary font-semibold text-sm d-flex" style="margin-top:10px;">عرض المزيد</a>
                </li>
            </x-filter-widget>

            {{-- Budget --}}
            <x-filter-widget title="الميزانية">
                <x-slot name="icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="1" x2="12" y2="23"></line>
                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                    </svg>
                </x-slot>
                <x-filter-checkbox label="أقل من $100" />
                <x-filter-checkbox label="$100 - $300" />
                <x-filter-checkbox label="$300 - $600" />
                <x-filter-checkbox label="$600 - $1,500" />
                <x-filter-checkbox label="أكثر من $1,500" />
            </x-filter-widget>

            {{-- Experience --}}
            <x-filter-widget title="مستوى الخبرة">
                <x-slot name="icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </x-slot>
                <x-filter-checkbox label="مبتدئ" />
                <x-filter-checkbox label="متوسط" />
                <x-filter-checkbox label="خبير" />
            </x-filter-widget>

            {{-- Duration --}}
            <x-filter-widget title="مدة المشروع">
                <x-slot name="icon">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                </x-slot>
                <x-filter-checkbox label="أقل من أسبوع" />
                <x-filter-checkbox label="1 - 4 أسابيع" />
                <x-filter-checkbox label="1 - 3 أشهر" />
                <x-filter-checkbox label="أكثر من 3 أشهر" />
            </x-filter-widget>

        </aside>

        {{-- ═══════════════════════════ MAIN CONTENT ═══════════════════════════ --}}
        <main class="main-content">

            {{-- Filters Bar --}}
            <div class="d-flex align-center gap-md filters-bar" style="flex-wrap:wrap;">
                <div class="input-group" style="flex:1; min-width:200px;">
                    <svg class="input-group__icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <input type="text" class="input-group__input" placeholder="ابحث عن المشاريع...">
                </div>
                <div class="select-wrapper" style="min-width:150px;">
                    <select><option>جميع التصنيفات</option></select>
                    <svg class="select-wrapper__icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </div>
                <div class="select-wrapper" style="min-width:150px;">
                    <select><option>جميع المستويات</option></select>
                    <svg class="select-wrapper__icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </div>
                <div class="select-wrapper" style="min-width:150px;">
                    <select><option>جميع الميزانيات</option></select>
                    <svg class="select-wrapper__icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                </div>
                <button class="btn btn--outline">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                    </svg>
                    فلترة
                </button>
            </div>

            <p class="text-muted text-sm" style="text-align:right;">إجمالي 128 مشروع متاح</p>

            {{-- ───────── Project Cards ───────── --}}
            <div class="d-flex flex-column gap-md">

                <x-project-card
                    title="تصميم موقع لبيع إلكتروني متكامل"
                    description="مطلوب مصمم/مطور لإنشاء موقع إلكتروني احترافي لشركة ناشئة في مجال التقنية."
                    budget="$1,200 - $2,500"
                    :offers="24"
                    published-at="منذ 2 ساعة"
                    :featured="true"
                >
                    <x-slot name="icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                            <line x1="8" y1="21" x2="16" y2="21"></line>
                            <line x1="12" y1="17" x2="12" y2="21"></line>
                        </svg>
                    </x-slot>
                    <x-slot name="tags">
                        <x-tag>WordPress</x-tag>
                        <x-tag>تصميم ويب</x-tag>
                        <x-tag>واجهة مستخدم</x-tag>
                        <x-tag>SEO</x-tag>
                    </x-slot>
                </x-project-card>

                <x-project-card
                    title="كتابة محتوى تسويقي احترافي"
                    description="مطلوب كاتب محتوى لكتابة مقالات تسويقية جذابة لموقع إلكتروني في مجال العقارات."
                    budget="$150 - $300"
                    :offers="18"
                    published-at="منذ 5 ساعات"
                    :featured="true"
                >
                    <x-slot name="icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                        </svg>
                    </x-slot>
                    <x-slot name="tags">
                        <x-tag>كتابة</x-tag>
                        <x-tag>محتوى تسويقي</x-tag>
                        <x-tag>SEO</x-tag>
                        <x-tag>العقارات</x-tag>
                    </x-slot>
                </x-project-card>

                <x-project-card
                    title="تصميم هوية بصرية لشركة ناشئة"
                    description="نحتاج إلى تصميم هوية بصرية كاملة لشركة ناشئة تشمل الشعار والألوان والخطوط."
                    budget="$350 - $600"
                    :offers="31"
                    published-at="منذ 1 يوم"
                    :featured="true"
                >
                    <x-slot name="icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                            <path d="M2 12h20"></path>
                        </svg>
                    </x-slot>
                    <x-slot name="tags">
                        <x-tag>هوية جرافيك</x-tag>
                        <x-tag>شعار</x-tag>
                        <x-tag>تصميم</x-tag>
                    </x-slot>
                </x-project-card>

                <x-project-card
                    title="تطوير تطبيق موبايل (iOS و Android)"
                    description="مطلوب مطور تطبيقات موبايل لديه خبرة في Flutter لتطوير تطبيق متعدد المنصات."
                    budget="$800 - $1,500"
                    :offers="15"
                    published-at="منذ 2 يوم"
                    :featured="true"
                >
                    <x-slot name="icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                            <line x1="12" y1="18" x2="12.01" y2="18"></line>
                        </svg>
                    </x-slot>
                    <x-slot name="tags">
                        <x-tag>تطوير</x-tag>
                        <x-tag>موبايل</x-tag>
                        <x-tag>Flutter</x-tag>
                        <x-tag>Android</x-tag>
                    </x-slot>
                </x-project-card>

                <x-project-card
                    title="ترجمة محتوى من الإنجليزية إلى العربية"
                    description="مطلوب مترجم محترف لترجمة محتوى تقني من الإنجليزية إلى العربية بدقة عالية."
                    budget="$200 - $400"
                    :offers="22"
                    published-at="منذ 3 يوم"
                    :featured="true"
                >
                    <x-slot name="icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 8l6 6"></path><path d="M4 14l6-6 2-3"></path>
                            <path d="M2 5h12"></path><path d="M7 2h1"></path>
                            <path d="M22 22l-5-10-5 10"></path><path d="M14 18h6"></path>
                        </svg>
                    </x-slot>
                    <x-slot name="tags">
                        <x-tag>ترجمة</x-tag>
                        <x-tag>الإنجليزية</x-tag>
                        <x-tag>العربية</x-tag>
                        <x-tag>تقني</x-tag>
                    </x-slot>
                </x-project-card>

            </div>

            <x-pagination :current="1" :total="13" />

        </main>
    </div>

</x-layouts.app>