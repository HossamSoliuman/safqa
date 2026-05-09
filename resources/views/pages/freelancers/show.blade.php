<x-layouts.app
    title="ملف الفريلانسر - أحمد محمد"
    description="عرض الملف الشخصي للفريلانسر، المهارات، والأعمال السابقة."
>

    <section class="profile-header">
        <div class="container">
            <div class="d-flex justify-between align-center" style="gap:var(--spacing-2xl); flex-wrap:wrap;">
                <div class="d-flex align-center gap-xl">
                    <div style="position:relative;">
                        <img src="https://i.pravatar.cc/120?u=a" alt="Freelancer" style="width:120px; height:120px; border-radius:50%; border:4px solid #fff; box-shadow:var(--shadow-md);">
                        <span style="position:absolute; bottom:10px; left:10px; width:20px; height:20px; background:#4caf50; border:3px solid #fff; border-radius:50%;"></span>
                    </div>
                    <div>
                        <div class="d-flex align-center gap-sm mb-xs">
                            <h1 class="text-2xl font-bold">أحمد محمد العتيبي</h1>
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="var(--color-primary)" style="color:var(--color-primary);"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path></svg>
                        </div>
                        <p class="text-lg text-muted mb-sm">مطور ويب متخصص في Laravel و Vue.js</p>
                        <div class="d-flex gap-md text-sm text-muted">
                            <span class="d-flex align-center gap-xs"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> الرياض، المملكة العربية السعودية</span>
                            <span class="d-flex align-center gap-xs"><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> عضو منذ يناير 2023</span>
                        </div>
                    </div>
                </div>
                <div class="d-flex gap-sm">
                    <button class="btn btn--primary">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg>
                        تواصل
                    </button>
                    <button class="btn btn--outline">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"></path></svg>
                        حفظ
                    </button>
                    <button class="btn btn--outline"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></button>
                </div>
            </div>

            <div class="d-flex gap-2xl mt-xl pt-xl" style="border-top:1px solid var(--color-border);">
                <div class="text-center">
                    <span class="d-block font-bold text-xl">$25K+</span>
                    <span class="text-xs text-muted">إجمالي الأرباح</span>
                </div>
                <div class="text-center">
                    <span class="d-block font-bold text-xl">98%</span>
                    <span class="text-xs text-muted">نسبة النجاح</span>
                </div>
                <div class="text-center">
                    <span class="d-block font-bold text-xl">156</span>
                    <span class="text-xs text-muted">مشروع مكتمل</span>
                </div>
                <div class="text-center">
                    <span class="d-block font-bold text-xl">4</span>
                    <span class="text-xs text-muted">سنوات الخبرة</span>
                </div>
                <div class="text-center" style="margin-right:auto;">
                    <span class="d-block font-bold text-xl text-primary">4.9</span>
                    <span class="text-xs text-muted">التقييم (128)</span>
                </div>
            </div>
        </div>
    </section>

    <div class="container page-layout">
        
        <main class="main-content">
            <div class="profile-tabs">
                <div class="profile-tab profile-tab--active">نبذة عني</div>
                <div class="profile-tab">أعمالي</div>
                <div class="profile-tab">خدماتي</div>
                <div class="profile-tab">التقييمات (128)</div>
                <div class="profile-tab">المشاريع المكتملة</div>
                <div class="profile-tab">الأسئلة والأجوبة</div>
            </div>

            <section class="card mb-xl">
                <h2 class="text-lg font-bold mb-md">نبذة عني</h2>
                <div class="text-muted lh-lg">
                    <p>مطور ويب متخصص في بناء تطبيقات ومواقع احترافية باستخدام Laravel و Vue.js.</p>
                    <p>أساعد الشركات والأفراد على تحويل أفكارهم إلى حلول رقمية فعالة وسريعة وآمنة.</p>
                    <p>أمتلك خبرة تزيد عن 4 سنوات في تطوير التطبيقات وإدارة المشاريع البرمجية.</p>
                </div>
                <div class="d-flex flex-wrap gap-sm mt-md">
                    <x-tag>Laravel</x-tag>
                    <x-tag>Vue.js</x-tag>
                    <x-tag>PHP</x-tag>
                    <x-tag>JavaScript</x-tag>
                    <x-tag>MySQL</x-tag>
                    <x-tag>Tailwind CSS</x-tag>
                    <x-tag>API Integration</x-tag>
                </div>
            </section>

            <section>
                <div class="d-flex justify-between align-center mb-md">
                    <h2 class="text-lg font-bold">أعمالي المميزة</h2>
                    <a href="#" class="text-primary font-semibold text-sm">عرض الكل</a>
                </div>
                <div class="portfolio-grid">
                    <div class="portfolio-item">
                        <img src="https://picsum.photos/400/300?random=1" alt="Work" class="portfolio-item__img">
                        <div class="portfolio-item__body">
                            <h3 class="portfolio-item__title">لوحة إدارة متكاملة</h3>
                            <p class="text-xs text-muted">نظام إدارة شامل للشركات</p>
                            <div class="d-flex justify-between align-center mt-sm">
                                <div class="d-flex gap-xs"><x-tag>Laravel</x-tag><x-tag>Vue.js</x-tag></div>
                                <span class="font-bold text-sm">$2,500</span>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item">
                        <img src="https://picsum.photos/400/300?random=2" alt="Work" class="portfolio-item__img">
                        <div class="portfolio-item__body">
                            <h3 class="portfolio-item__title">تطبيق إدارة المهام</h3>
                            <p class="text-xs text-muted">تطبيق للمهام ومتابعة الفرق</p>
                            <div class="d-flex justify-between align-center mt-sm">
                                <div class="d-flex gap-xs"><x-tag>Flutter</x-tag><x-tag>Firebase</x-tag></div>
                                <span class="font-bold text-sm">$1,800</span>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-item">
                        <img src="https://picsum.photos/400/300?random=3" alt="Work" class="portfolio-item__img">
                        <div class="portfolio-item__body">
                            <h3 class="portfolio-item__title">متجر إلكتروني متكامل</h3>
                            <p class="text-xs text-muted">متجر متعدد البائعين</p>
                            <div class="d-flex justify-between align-center mt-sm">
                                <div class="d-flex gap-xs"><x-tag>Laravel</x-tag><x-tag>MySQL</x-tag></div>
                                <span class="font-bold text-sm">$3,200</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <aside class="sidebar" style="border:none; background:transparent; box-shadow:none; gap:var(--spacing-xl);">
            <div class="card">
                <h3 class="text-md font-bold mb-md">معلومات سريعة</h3>
                <div class="info-list">
                    <div class="info-item">
                        <span class="info-item__label">الاسم</span>
                        <span class="info-item__value">أحمد محمد العتيبي</span>
                    </div>
                    <div class="info-item">
                        <span class="info-item__label">البلد</span>
                        <span class="info-item__value">المملكة العربية السعودية</span>
                    </div>
                    <div class="info-item">
                        <span class="info-item__label">اللغة</span>
                        <span class="info-item__value">العربية، الإنجليزية</span>
                    </div>
                    <div class="info-item">
                        <span class="info-item__label">الوقت المحلي</span>
                        <span class="info-item__value">الرياض، GMT +3</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <h3 class="text-md font-bold mb-md">توافر العمل</h3>
                <div class="info-list">
                    <div class="info-item">
                        <span class="info-item__label">متاح الآن</span>
                        <span class="info-item__value text-primary">● متاح الآن</span>
                    </div>
                    <div class="info-item">
                        <span class="info-item__label">نوع العمل</span>
                        <span class="info-item__value">دوام كامل / جزئي</span>
                    </div>
                    <div class="info-item">
                        <span class="info-item__label">ساعات العمل</span>
                        <span class="info-item__value">40 ساعة / أسبوع</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <h3 class="text-md font-bold mb-md">التحقق والموثوقية</h3>
                <div class="info-list">
                    <div class="info-item">
                        <span class="info-item__label">هوية موثقة</span>
                        <span class="info-item__value text-primary">✓</span>
                    </div>
                    <div class="info-item">
                        <span class="info-item__label">بريد إلكتروني موثق</span>
                        <span class="info-item__value text-primary">✓</span>
                    </div>
                    <div class="info-item">
                        <span class="info-item__label">رقم جوال موثق</span>
                        <span class="info-item__value text-primary">✓</span>
                    </div>
                    <div class="info-item">
                        <span class="info-item__label">دفع آمن</span>
                        <span class="info-item__value text-primary">✓</span>
                    </div>
                </div>
            </div>
        </aside>

    </div>

</x-layouts.app>
