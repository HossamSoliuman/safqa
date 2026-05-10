<x-layouts.app
    title="ملف الفريلانسر - أحمد محمد العتيبي"
    description="عرض الملف الشخصي للفريلانسر، المهارات، والأعمال السابقة."
>

    {{-- Breadcrumb --}}
    <div class="fls-breadcrumb">
        <div class="container">
            <nav class="fls-breadcrumb-nav">
                <a href="#">الرئيسية</a>
                <span class="fls-breadcrumb-sep">›</span>
                <a href="#">الفريلانسرز</a>
                <span class="fls-breadcrumb-sep">›</span>
                <span>أحمد محمد</span>
            </nav>
        </div>
    </div>

    {{-- Hero Header Card --}}
    <section class="fls-hero">
        <div class="container">
            <div class="fls-hero-card">

                {{-- Top Action Bar --}}
                <div class="fls-hero-actions">
                    <button class="btn btn--primary fls-btn-contact">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
                        تواصل
                    </button>
                    <button class="btn btn--outline fls-btn-save">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M19 21l-7-5-7 5V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2z"/></svg>
                        حفظ
                    </button>
                    <button class="btn btn--outline fls-btn-more">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="1"/><circle cx="19" cy="12" r="1"/><circle cx="5" cy="12" r="1"/></svg>
                    </button>
                </div>

                {{-- Profile Info --}}
                <div class="fls-hero-body">
                    {{-- Avatar --}}
                    <div class="fls-hero-avatar-wrap">
                        <div class="fls-hero-avatar-placeholder">
                            <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="#ccc" stroke-width="1.5"><circle cx="12" cy="8" r="4"/><path d="M4 20c0-4 3.6-7 8-7s8 3 8 7"/></svg>
                        </div>
                        <span class="fls-hero-online-dot"></span>
                    </div>
                    <div class="fls-hero-info">
                        
                        <div class="fls-hero-badge">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            فريلانسر مميز
                        </div>
                        <h1 class="fls-hero-name">أحمد محمد العتيبي</h1>
                        <div class="fls-hero-verified-row">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="#1d9bf0"><path d="M9 12l2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/></svg>
                        </div>
                        <p class="fls-hero-title">مطور ويب متخصص في Laravel و Vue.js</p>
                        <div class="fls-hero-meta">
                            <span class="fls-hero-meta-item">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                                الرياض، المملكة العربية السعودية
                            </span>
                            <span class="fls-hero-meta-item">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                                عضو منذ يناير 2023
                            </span>
                        </div>
                        <div class="fls-hero-rating">
                            <span class="fls-hero-rating-score">4.9</span>
                            <div class="fls-stars">
                                <span class="fls-star filled">★</span>
                                <span class="fls-star filled">★</span>
                                <span class="fls-star filled">★</span>
                                <span class="fls-star filled">★</span>
                                <span class="fls-star filled">★</span>
                            </div>
                            <span class="fls-hero-rating-count">(128 تقييم)</span>
                        </div>
                    </div>

                    
                </div>

                {{-- Stats Row --}}
                <div class="fls-hero-stats">
                    <div class="fls-hero-stat">
                        <div class="fls-hero-stat-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                        </div>
                        <span class="fls-hero-stat-val">$25K+</span>
                        <span class="fls-hero-stat-lbl">إجمالي الأرباح</span>
                    </div>
                    <div class="fls-hero-stat">
                        <div class="fls-hero-stat-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3H14z"/></svg>
                        </div>
                        <span class="fls-hero-stat-val">98%</span>
                        <span class="fls-hero-stat-lbl">نسبة النجاح</span>
                    </div>
                    <div class="fls-hero-stat">
                        <div class="fls-hero-stat-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/></svg>
                        </div>
                        <span class="fls-hero-stat-val">156</span>
                        <span class="fls-hero-stat-lbl">مشروع مكتمل</span>
                    </div>
                    <div class="fls-hero-stat">
                        <div class="fls-hero-stat-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                        </div>
                        <span class="fls-hero-stat-val">4</span>
                        <span class="fls-hero-stat-lbl">سنوات الخبرة</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Main Layout --}}
    <div class="container fls-layout">

       

        {{-- Main Content --}}
        <main class="fls-main">

            {{-- Tabs --}}
            <div class="fls-tabs">
                <div class="fls-tab fls-tab--active">نبذة عني</div>
                <div class="fls-tab">أعمالي</div>
                <div class="fls-tab">خدماتي</div>
                <div class="fls-tab">التقييمات (128)</div>
                <div class="fls-tab">المشاريع المكتملة</div>
                <div class="fls-tab">الأسئلة والأجوبة</div>
            </div>

            {{-- About --}}
            <section class="fls-card">
                <h2 class="fls-card-title">نبذة عني</h2>
                <div class="fls-about-text">
                    <p>مطور ويب متخصص في بناء تطبيقات ومواقع احترافية باستخدام Laravel و Vue.js.</p>
                    <p>أساعد الشركات والأفراد على تحويل أفكارهم إلى حلول رقمية فعالة وسريعة وآمنة.</p>
                    <p>أمتلك خبرة تزيد عن 4 سنوات في تطوير التطبيقات وإدارة المشاريع البرمجية.</p>
                </div>
                <div class="fls-skills">
                    <span class="fls-skill-tag">Laravel</span>
                    <span class="fls-skill-tag">Vue.js</span>
                    <span class="fls-skill-tag">PHP</span>
                    <span class="fls-skill-tag">JavaScript</span>
                    <span class="fls-skill-tag">MySQL</span>
                    <span class="fls-skill-tag">Tailwind CSS</span>
                    <span class="fls-skill-tag">API Integration</span>
                </div>
            </section>

            {{-- Portfolio + Reviews Row --}}
            <div class="fls-bottom-grid">

                

                {{-- Reviews --}}
                <section class="fls-card fls-card--reviews">
                    <div class="fls-card-header">
                        <h2 class="fls-card-title-inline">التقييمات</h2>
                        <a href="#" class="fls-view-all">عرض الكل</a>
                    </div>
                    <div class="fls-reviews-summary">
                        <div class="fls-reviews-score">4.9</div>
                        <div class="fls-reviews-stars">
                            <span class="fls-star filled">★</span>
                            <span class="fls-star filled">★</span>
                            <span class="fls-star filled">★</span>
                            <span class="fls-star filled">★</span>
                            <span class="fls-star filled">★</span>
                        </div>
                        <div class="fls-reviews-count">(128 تقييم)</div>
                    </div>
                    <div class="fls-rating-bars">
                        <div class="fls-rating-row">
                            <span class="fls-rating-label">5 نجوم</span>
                            <div class="fls-rating-bar-wrap"><div class="fls-rating-bar" style="width:86%"></div></div>
                            <span class="fls-rating-num">110</span>
                        </div>
                        <div class="fls-rating-row">
                            <span class="fls-rating-label">4 نجوم</span>
                            <div class="fls-rating-bar-wrap"><div class="fls-rating-bar fls-rating-bar--orange" style="width:11%"></div></div>
                            <span class="fls-rating-num">14</span>
                        </div>
                        <div class="fls-rating-row">
                            <span class="fls-rating-label">3 نجوم</span>
                            <div class="fls-rating-bar-wrap"><div class="fls-rating-bar fls-rating-bar--orange" style="width:2%"></div></div>
                            <span class="fls-rating-num">3</span>
                        </div>
                        <div class="fls-rating-row">
                            <span class="fls-rating-label">2 نجوم</span>
                            <div class="fls-rating-bar-wrap"><div class="fls-rating-bar fls-rating-bar--gray" style="width:0.8%"></div></div>
                            <span class="fls-rating-num">1</span>
                        </div>
                        <div class="fls-rating-row">
                            <span class="fls-rating-label">1 نجوم</span>
                            <div class="fls-rating-bar-wrap"><div class="fls-rating-bar fls-rating-bar--gray" style="width:0%"></div></div>
                            <span class="fls-rating-num">0</span>
                        </div>
                    </div>
                </section>
                {{-- Portfolio --}}
                <section class="fls-card fls-card--portfolio">
                    <div class="fls-card-header">
                        <h2 class="fls-card-title-inline">أعمالي المميزة</h2>
                        <a href="#" class="fls-view-all">عرض الكل</a>
                    </div>
                    <div class="fls-portfolio-list">

                        <div class="fls-portfolio-item">
                            <div class="fls-portfolio-thumb">
                                <div class="fls-img-placeholder"></div>
                            </div>
                            <div class="fls-portfolio-body">
                                <h3 class="fls-portfolio-name">لوحة إدارة متكاملة</h3>
                                <p class="fls-portfolio-desc">نظام إدارة شامل للشركات</p>
                                <div class="fls-portfolio-footer">
                                    <div class="fls-portfolio-tags">
                                        <span class="fls-tag">Laravel</span>
                                        <span class="fls-tag">Vue.js</span>
                                    </div>
                                    <span class="fls-portfolio-price">$2,500</span>
                                </div>
                            </div>
                        </div>

                        <div class="fls-portfolio-item">
                            <div class="fls-portfolio-thumb">
                                <div class="fls-img-placeholder"></div>
                            </div>
                            <div class="fls-portfolio-body">
                                <h3 class="fls-portfolio-name">تطبيق إدارة المهام</h3>
                                <p class="fls-portfolio-desc">تطبيق للمهام ومتابعة الفرق</p>
                                <div class="fls-portfolio-footer">
                                    <div class="fls-portfolio-tags">
                                        <span class="fls-tag">Flutter</span>
                                        <span class="fls-tag">Firebase</span>
                                    </div>
                                    <span class="fls-portfolio-price">$1,800</span>
                                </div>
                            </div>
                        </div>

                        <div class="fls-portfolio-item">
                            <div class="fls-portfolio-thumb">
                                <div class="fls-img-placeholder"></div>
                            </div>
                            <div class="fls-portfolio-body">
                                <h3 class="fls-portfolio-name">متجر إلكتروني متكامل</h3>
                                <p class="fls-portfolio-desc">متجر متعدد البائعين</p>
                                <div class="fls-portfolio-footer">
                                    <div class="fls-portfolio-tags">
                                        <span class="fls-tag">Laravel</span>
                                        <span class="fls-tag">MySQL</span>
                                    </div>
                                    <span class="fls-portfolio-price">$3,200</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- Carousel Arrows --}}
                    <div class="fls-carousel-nav">
                        <button class="fls-carousel-btn">‹</button>
                        <button class="fls-carousel-btn">›</button>
                    </div>
                </section>

            </div>

        </main>
         {{-- Sidebar --}}
        <aside class="fls-sidebar">
            <div class="fls-sidebar-card">
                <h3 class="fls-sidebar-title">معلومات سريعة</h3>
                <div class="fls-info-list">
                    <div class="fls-info-item">
                        <span class="fls-info-label">الاسم</span>
                        <span class="fls-info-value">أحمد محمد العتيبي</span>
                    </div>
                    <div class="fls-info-item">
                        <span class="fls-info-label">البلد</span>
                        <span class="fls-info-value">المملكة العربية السعودية</span>
                    </div>
                    <div class="fls-info-item">
                        <span class="fls-info-label">اللغة</span>
                        <span class="fls-info-value">العربية، الإنجليزية</span>
                    </div>
                    <div class="fls-info-item">
                        <span class="fls-info-label">الوقت المحلي</span>
                        <span class="fls-info-value">الرياض، GMT +3</span>
                    </div>
                    <div class="fls-info-item">
                        <span class="fls-info-label">البريد الإلكتروني</span>
                        <span class="fls-info-value">ahmed@example.com</span>
                    </div>
                    <div class="fls-info-item">
                        <span class="fls-info-label">رقم الجوال</span>
                        <span class="fls-info-value">+966 50 123 4567</span>
                    </div>
                </div>
            </div>

            <div class="fls-sidebar-card">
                <h3 class="fls-sidebar-title">توافر العمل</h3>
                <div class="fls-info-list">
                    <div class="fls-info-item">
                        <span class="fls-info-label">متاح الآن</span>
                        <span class="fls-info-value fls-available">● متاح الآن</span>
                    </div>
                    <div class="fls-info-item">
                        <span class="fls-info-label">نوع العمل</span>
                        <span class="fls-info-value">دوام كامل / جزئي</span>
                    </div>
                    <div class="fls-info-item">
                        <span class="fls-info-label">ساعات العمل</span>
                        <span class="fls-info-value">40 ساعة / أسبوع</span>
                    </div>
                    <div class="fls-info-item">
                        <span class="fls-info-label">الاستجابة</span>
                        <span class="fls-info-value">خلال ساعة</span>
                    </div>
                </div>
            </div>

            <div class="fls-sidebar-card">
                <h3 class="fls-sidebar-title">التحقق والموثوقية</h3>
                <div class="fls-verify-list">
                    <div class="fls-verify-item">
                        <span class="fls-verify-label">هوية موثقة</span>
                        <span class="fls-verify-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </span>
                    </div>
                    <div class="fls-verify-item">
                        <span class="fls-verify-label">بريد إلكتروني موثق</span>
                        <span class="fls-verify-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </span>
                    </div>
                    <div class="fls-verify-item">
                        <span class="fls-verify-label">رقم جوال موثق</span>
                        <span class="fls-verify-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </span>
                    </div>
                    <div class="fls-verify-item">
                        <span class="fls-verify-label">دفع آمن</span>
                        <span class="fls-verify-icon">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                        </span>
                    </div>
                </div>
            </div>
        </aside>
    </div>

    {{-- Why Choose Me --}}
    <section class="fls-why">
        <div class="container">
            <h2 class="fls-why-title">لماذا تختارني؟</h2>
            <div class="fls-why-grid">
                <div class="fls-why-item">
                    <div class="fls-why-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
                    </div>
                    <span class="fls-why-label">جودة عالية</span>
                    <span class="fls-why-desc">أضمن أعلى جودة في العمل</span>
                </div>
                <div class="fls-why-item">
                    <div class="fls-why-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <span class="fls-why-label">تسليم في الوقت</span>
                    <span class="fls-why-desc">ألتزم بالمواعيد النهائية</span>
                </div>
                <div class="fls-why-item">
                    <div class="fls-why-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
                    </div>
                    <span class="fls-why-label">دعم مستمر</span>
                    <span class="fls-why-desc">متابعة ودعم بعد التسليم</span>
                </div>
                <div class="fls-why-item">
                    <div class="fls-why-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <span class="fls-why-label">تواصل فعال</span>
                    <span class="fls-why-desc">تواصل واضح وسريع</span>
                </div>
                <div class="fls-why-item">
                    <div class="fls-why-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                    </div>
                    <span class="fls-why-label">رضا العملاء</span>
                    <span class="fls-why-desc">أهم أولوياتي دائماً</span>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
