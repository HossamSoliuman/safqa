<x-layouts.app
    title="تصميم موقع إلكتروني متكامل - SAFQA"
    description="عرض تفاصيل المشروع والمهام المطلوبة والميزانية المقدرة."
>

    <div class="container" style="padding-top: var(--spacing-xl);">
        
        {{-- Breadcrumbs --}}
        <div class="d-flex justify-between align-center mb-lg">
            <div class="text-sm text-muted d-flex align-center gap-xs">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                <a href="{{ route('home') }}" class="text-muted hover:text-primary">الرئيسية</a> /
                <a href="{{ route('projects.index') }}" class="text-muted hover:text-primary">المشاريع</a> /
                <span class="text-text-dark font-bold">تصميم موقع إلكتروني متكامل</span>
            </div>
        </div>

        <div class="page-layout">
            
            {{-- ═══════════════════════════ SIDEBAR (RIGHT in RTL) ═══════════════════════════ --}}
            <aside class="sidebar" style="border:none; background:transparent; box-shadow:none; gap:var(--spacing-xl);">
                
                {{-- Card 1: Client Info --}}
                <div class="card text-center">
                    <div class="d-flex justify-between align-center mb-md">
                        <h3 class="text-md font-bold">صاحب المشروع</h3>
                        <span class="badge-verified">
                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                            موثق
                        </span>
                    </div>
                    
                    <div class="d-flex flex-column align-center mb-lg">
                        <img src="https://i.pravatar.cc/80?u=client2" alt="Client" style="border-radius:50%; width: 80px; height: 80px; margin-bottom: var(--spacing-sm);">
                        <h4 class="font-bold text-lg mb-xs">محمد العتيبي</h4>
                        <p class="text-sm text-muted mb-xs">شركة تقنية ناشئة</p>
                        <p class="text-xs text-muted d-flex align-center gap-xs">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            الرياض، المملكة العربية السعودية
                        </p>
                        
                        <div class="d-flex align-center gap-xs mt-sm">
                            <span class="font-bold text-sm">4.9</span>
                            <span class="text-xs text-muted">(28 تقييم)</span>
                            <div class="d-flex" style="color: #FFB400;">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            </div>
                        </div>
                    </div>
                    
                    <button class="btn btn--outline w-full mb-md text-sm" style="border-color: var(--color-border); color: var(--color-text-dark); background: transparent; justify-content: center;">عرض ملف الشركة</button>
                    <button class="btn btn--outline w-full text-sm" style="border-color: var(--color-border); color: var(--color-text-dark); background: transparent; justify-content: center;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                        تواصل مع صاحب المشروع
                    </button>
                </div>

                {{-- Card 2: Summary Stats --}}
                <div class="card">
                    <h3 class="text-md font-bold mb-lg text-center">ملخص المشروع</h3>
                    <div class="info-list gap-sm d-flex flex-column text-sm">
                        <div class="d-flex justify-between align-center py-xs">
                            <span class="text-muted">الموازنة</span>
                            <span class="font-bold">$1,200 - $2,500</span>
                        </div>
                        <div class="d-flex justify-between align-center py-xs">
                            <span class="text-muted">نوع المشروع</span>
                            <span class="font-bold">ثابت</span>
                        </div>
                        <div class="d-flex justify-between align-center py-xs">
                            <span class="text-muted">المستوى</span>
                            <span class="font-bold">متوسط</span>
                        </div>
                        <div class="d-flex justify-between align-center py-xs">
                            <span class="text-muted">الموعد النهائي</span>
                            <span class="font-bold">15 يونيو 2024</span>
                        </div>
                        <div class="d-flex justify-between align-center py-xs">
                            <span class="text-muted">عدد العروض</span>
                            <span class="font-bold">24 عرض</span>
                        </div>
                        <div class="d-flex justify-between align-center py-xs">
                            <span class="text-muted">طريقة الدفع</span>
                            <span class="font-bold">دفعة واحدة</span>
                        </div>
                        <div class="d-flex justify-between align-center py-xs">
                            <span class="text-muted">نشر في</span>
                            <span class="font-bold">15 مايو 2024</span>
                        </div>
                    </div>
                </div>

                {{-- Card 3: CTA --}}
                <div class="card text-center" style="background-color: var(--color-bg-white);">
                    <h3 class="text-lg font-bold mb-sm">قَدِّم عرضك الآن</h3>
                    <p class="text-sm text-muted mb-lg lh-lg">قدم أفضل عرض لديك واحصل على فرصة للتعاون مع هذا العميل.</p>
                    
                    <button class="btn btn--primary w-full mb-md text-md" style="justify-content: center; padding-top: var(--spacing-sm); padding-bottom: var(--spacing-sm);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                        قدم عرضاً للمشروع
                    </button>
                    
                    <button class="btn btn--outline w-full text-md" style="border-color: var(--color-border); color: var(--color-text-dark); background: transparent; justify-content: center; padding-top: var(--spacing-sm); padding-bottom: var(--spacing-sm);">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
                        احفظ للمشروع
                    </button>
                </div>

            </aside>

            {{-- ═══════════════════════════ MAIN CONTENT (LEFT in RTL) ═══════════════════════════ --}}
            <main class="main-content">
                
                {{-- Single Card for All Main Content --}}
                <div class="card" style="overflow: hidden;">
                    
                    {{-- Section 1: Header --}}
                    <div>
                        <div class="d-flex justify-between align-start mb-md">
                            <div>
                                <h1 class="text-xl font-bold mb-sm" style="color: #111;">تصميم موقع إلكتروني متكامل</h1>
                            </div>
                            <div class="d-flex align-center gap-sm">
                                <span class="badge-featured">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                                    مميز
                                </span>
                                <button class="btn btn--outline" style="padding: 10px; width: 44px; height: 44px;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                                </button>
                                <button class="btn btn--outline" style="padding: 10px; width: 44px; height: 44px;">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
                                </button>
                            </div>
                        </div>
                        
                        <p class="text-muted lh-lg text-sm mb-0" style="max-width: 90%;">
                            مطلوب مصمم/مطور لإنشاء موقع إلكتروني احترافي لشركة ناشئة في مجال التسويق العقاري، بحيث يبرز قيم واجهات الشركة. 
                            لدينا خبرة في تصميم واجهات عصرية، وتجربة مستخدم سلسة، وتحسين محركات البحث.
                        </p>
                    </div>

                    <div style="height: 1px; background-color: var(--color-bg); margin: var(--spacing-2xl) -var(--spacing-xl);"></div>

                    {{-- Section 2: Stats Row --}}
                    <div class="stats-row">
                        <div class="stats-row__item">
                            <span class="text-muted text-xs mb-xs">نشر في</span>
                            <span class="font-bold text-sm">15 مايو 2024</span>
                        </div>
                        <div class="stats-row__item">
                            <span class="text-muted text-xs mb-xs">الموعد النهائي</span>
                            <span class="font-bold text-sm">15 يونيو 2024 <span class="text-primary text-xs">(30 يوم متبقي)</span></span>
                        </div>
                        <div class="stats-row__item">
                            <span class="text-muted text-xs mb-xs">العروض</span>
                            <span class="font-bold text-sm">24 عرض</span>
                        </div>
                        <div class="stats-row__item">
                            <span class="text-muted text-xs mb-xs">الموازنة</span>
                            <span class="font-bold text-primary text-sm">$1,200 - $2,500</span>
                        </div>
                        <div class="stats-row__item">
                            <span class="text-muted text-xs mb-xs">نوع المشروع</span>
                            <span class="font-bold text-sm">ثابت</span>
                        </div>
                    </div>

                    <div style="height: 1px; background-color: var(--color-bg); margin: var(--spacing-2xl) -var(--spacing-xl);"></div>

                    {{-- Section 3: Description & Quick Stats --}}
                    <div class="grid grid-cols-2 gap-xl" style="align-items: start;">

                        {{-- Left Column (Stats Grid) --}}
                        <div style="border-right: 1px solid var(--color-bg); padding-right: var(--spacing-xl);">
                            <div class="d-flex flex-column gap-lg">
                                <div class="d-flex justify-between align-center">
                                    <span class="text-sm font-bold">متوسط</span>
                                    <div class="d-flex align-center gap-sm text-muted">
                                        <span class="text-sm">المستوى</span>
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20V10"></path><path d="M18 20V4"></path><path d="M6 20v-4"></path></svg>
                                    </div>
                                </div>
                                <div class="d-flex justify-between align-center">
                                    <span class="text-sm font-bold">تطوير وتصميم</span>
                                    <div class="d-flex align-center gap-sm text-muted">
                                        <span class="text-sm">نوع المشروع</span>
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                                    </div>
                                </div>
                                <div class="d-flex justify-between align-center">
                                    <span class="text-sm font-bold">24 فريلانسر</span>
                                    <div class="d-flex align-center gap-sm text-muted">
                                        <span class="text-sm">عدد المتقدمين</span>
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                    </div>
                                </div>
                                <div class="d-flex justify-between align-center">
                                    <span class="text-sm font-bold">عن بعد</span>
                                    <div class="d-flex align-center gap-sm text-muted">
                                        <span class="text-sm">الموقع</span>
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                    </div>
                                </div>
                                <div class="d-flex justify-between align-center">
                                    <span class="text-sm font-bold">2 - 5 سنوات</span>
                                    <div class="d-flex align-center gap-sm text-muted">
                                        <span class="text-sm">الخبرة المطلوبة</span>
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                                    </div>
                                </div>
                                <div class="d-flex justify-between align-center">
                                    <span class="text-sm font-bold">العربية</span>
                                    <div class="d-flex align-center gap-sm text-muted">
                                        <span class="text-sm">اللغة</span>
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                                    </div>
                                </div>
                                <div class="d-flex justify-between align-center">
                                    <span class="text-sm font-bold">دفعة واحدة</span>
                                    <div class="d-flex align-center gap-sm text-muted">
                                        <span class="text-sm">الدفع</span>
                                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Right Column (Description) --}}
                        <div>
                            <h2 class="text-md font-bold mb-md d-flex align-center gap-sm">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="3"></circle></svg>
                                وصف المشروع
                            </h2>
                            <div class="text-muted lh-lg text-sm mb-xl">
                                <p class="mb-sm">نحن شركة ناشئة في مجال الحلول التقنية، نبحث عن مصمم/مطور لإنشاء موقع إلكتروني احترافي يعكس هوية علامتنا التجارية.</p>
                                <p class="mb-sm">يجب أن يكون الموقع متجاوب مع جميع الأجهزة، سريع التحميل، وسهل الاستخدام.</p>
                                <p>نفضل من لديه سابقة أعمال قوية في تصميم مواقع الشركات الناشئة.</p>
                            </div>

                            <h2 class="text-md font-bold mb-md d-flex align-center gap-sm">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                المهام المطلوبة
                            </h2>
                            <ul class="d-flex flex-column gap-sm list-none text-sm text-muted">
                                <li class="d-flex align-center gap-sm">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 8 12 12 16 14"></polyline></svg>
                                    تصميم واجهات موقع عصرية وجذابة
                                </li>
                                <li class="d-flex align-center gap-sm">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 8 12 12 16 14"></polyline></svg>
                                    تطوير الموقع باستخدام WordPress
                                </li>
                                <li class="d-flex align-center gap-sm">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 8 12 12 16 14"></polyline></svg>
                                    تحسين محركات البحث (SEO)
                                </li>
                                <li class="d-flex align-center gap-sm">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 8 12 12 16 14"></polyline></svg>
                                    ربط الموقع بوسائل التواصل الاجتماعي
                                </li>
                                <li class="d-flex align-center gap-sm">
                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 8 12 12 16 14"></polyline></svg>
                                    تسليم لوحة تحكم سهلة لإدارة المحتوى
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div style="height: 1px; background-color: var(--color-bg); margin: var(--spacing-xl) -var(--spacing-xl);"></div>

                    {{-- Section 4: Skills --}}
                    <div>
                        <h2 class="text-md font-bold mb-md d-flex align-center gap-sm">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                            المهارات المطلوبة
                        </h2>
                        <div class="d-flex flex-wrap gap-md justify-start">
                            <span class="btn btn--outline" style="padding: 10px 20px; font-weight: 600; font-size: var(--font-size-sm); border-color: var(--color-border); color: var(--color-text-dark); background: transparent;">WordPress</span>
                            <span class="btn btn--outline" style="padding: 10px 20px; font-weight: 600; font-size: var(--font-size-sm); border-color: var(--color-border); color: var(--color-text-dark); background: transparent;">HTML/CSS</span>
                            <span class="btn btn--outline" style="padding: 10px 20px; font-weight: 600; font-size: var(--font-size-sm); border-color: var(--color-border); color: var(--color-text-dark); background: transparent;">JavaScript</span>
                            <span class="btn btn--outline" style="padding: 10px 20px; font-weight: 600; font-size: var(--font-size-sm); border-color: var(--color-border); color: var(--color-text-dark); background: transparent;">PHP</span>
                            <span class="btn btn--outline" style="padding: 10px 20px; font-weight: 600; font-size: var(--font-size-sm); border-color: var(--color-border); color: var(--color-text-dark); background: transparent;">UI/UX Design</span>
                            <span class="btn btn--outline" style="padding: 10px 20px; font-weight: 600; font-size: var(--font-size-sm); border-color: var(--color-border); color: var(--color-text-dark); background: transparent;">SEO</span>
                        </div>
                    </div>

                    <div style="height: 1px; background-color: var(--color-bg); margin: var(--spacing-xl) -var(--spacing-xl);"></div>

                    {{-- Section 5: Attachments --}}
                    <div>
                        <h2 class="text-md font-bold mb-md d-flex align-center gap-sm">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg>
                            الملفات المرفقة
                        </h2>
                        <div class="file-attachment" style="max-width: 400px; width: 100%;">
                            <div class="file-attachment__icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                            </div>
                            <div class="file-attachment__info text-left">
                                <span class="font-bold text-sm">متطلبات المشروع.pdf</span>
                                <span class="text-xs text-muted">1.2 MB</span>
                            </div>
                        </div>
                    </div>

                </div>

            </main>

        </div>
    </div>

</x-layouts.app>
