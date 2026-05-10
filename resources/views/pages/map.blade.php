<x-layouts.app
    title="تحديد الموقع - SAFQA"
    description="حدد موقعك أو موقع المشروع على الخريطة للوصول إلى أفضل الفريلانسرز القريبين."
>

    <div class="container map-page-container">
        
        {{-- Breadcrumbs --}}
        <div class="d-flex justify-between align-center mb-xl">
            <div class="text-sm text-muted d-flex align-center gap-sm">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                <a href="{{ route('home') }}" class="text-muted hover:text-primary">الرئيسية</a> /
                <a href="#" class="text-muted hover:text-primary">نشر مشروع</a> /
                <span class="text-text-dark font-bold">تحديد الموقع</span>
            </div>
        </div>

        <div class="map-page-layout">

        <main class="map-page-main">
                
                <div class="map-page-card" style="background-image: url('data:image/svg+xml;utf8,<svg width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M0,100 L200,50 L400,150 L600,0 L800,200 L1000,100\" stroke=\"%23ffffff\" stroke-width=\"4\" fill=\"none\"/><path d=\"M0,300 L200,250 L400,350 L600,200 L800,400 L1000,300\" stroke=\"%23ffffff\" stroke-width=\"6\" fill=\"none\"/><path d=\"M100,0 L150,500\" stroke=\"%23ffffff\" stroke-width=\"4\" fill=\"none\"/><path d=\"M500,0 L550,500\" stroke=\"%23ffffff\" stroke-width=\"3\" fill=\"none\"/></svg>');">
                    
                    {{-- Search Overlay --}}
                    <div class="map-page-search-overlay">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        <span class="text-sm font-bold text-text-dark">الرياض، المملكة العربية السعودية</span>
                    </div>

                    {{-- Map Center Elements --}}
                    <div class="map-page-center-pin-wrapper">
                        <div class="map-page-radius-circle"></div>
                        <div class="map-page-center-pin">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path></svg>
                        </div>
                    </div>

                    {{-- Avatars on Map (Placeholders) --}}
                    <div style="position: absolute; top: 30%; left: 35%; z-index: 6;">
                        <img src="https://i.pravatar.cc/40?u=a1" class="map-page-user-avatar">
                    </div>
                    <div style="position: absolute; top: 60%; left: 45%; z-index: 6;">
                        <img src="https://i.pravatar.cc/40?u=a2" class="map-page-user-avatar">
                    </div>
                    <div style="position: absolute; top: 40%; right: 30%; z-index: 6;">
                        <img src="https://i.pravatar.cc/40?u=a3" class="map-page-user-avatar">
                    </div>

                    {{-- Map Controls --}}
                    <div class="map-page-controls">
                        <button class="map-page-control-btn">+</button>
                        <button class="map-page-control-btn">−</button>
                        <button class="map-page-control-btn" style="margin-top: 10px;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M12 2v2m0 16v2m10-10h-2M4 12H2m18 0a8 8 0 1 1-16 0 8 8 0 0 1 16 0z"></path></svg>
                        </button>
                    </div>

                    {{-- Stats Floating Card --}}
                    <div class="map-page-stats-card">
                        <div class="map-page-stats-grid">
                            <div class="map-page-stat-item">
                                <div style="color: var(--color-primary); margin-bottom: 8px;">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                </div>
                                <h4 class="font-bold text-md mb-xs">10 كم</h4>
                                <p class="text-xs text-muted">نطاق البحث</p>
                            </div>

                            <div class="map-page-stat-item">
                                <div style="color: var(--color-primary); margin-bottom: 8px;">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg>
                                </div>
                                <h4 class="font-bold text-md mb-xs">24</h4>
                                <p class="text-xs text-muted">فريلانسر</p>
                            </div>

                            <div class="map-page-stat-item">
                                <div style="color: var(--color-primary); margin-bottom: 8px;">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path></svg>
                                </div>
                                <h4 class="font-bold text-md mb-xs">57</h4>
                                <p class="text-xs text-muted">خدمة</p>
                            </div>

                            <div class="map-page-stat-item">
                                <div style="color: var(--color-primary); margin-bottom: 8px;">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                                </div>
                                <h4 class="font-bold text-md mb-xs">الرياض</h4>
                                <p class="text-xs text-muted">الموقع</p>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Tips Box --}}
                <div class="map-page-tips">
                    <div style="color: var(--color-primary);">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 18h6"/><path d="M10 22h4"/><path d="M15.09 14c.18-.98.65-1.74 1.41-2.5A6 6 0 1 0 7.5 11.5c.76.76 1.23 1.52 1.41 2.5Z"/></svg>
                    </div>
                    <div class="d-flex gap-xs align-center">
                        <span class="font-bold text-sm text-text-dark">نصائح:</span>
                        <span class="text-sm text-muted">كلما كان النطاق أصغر، كانت النتائج أكثر دقة وملاءمة لاحتياجاتك</span>
                    </div>
                </div>

            </main>
            
            {{-- ═══════════════════════════ SIDEBAR (RIGHT in RTL) ═══════════════════════════ --}}
            <aside class="map-page-sidebar">
                <div class="map-page-sidebar-inner">
                    
                    {{-- Stepper (Right to Left) --}}
                    <div class="map-page-stepper">
                        <div class="map-page-stepper-line"></div>
                         <div class="map-page-step map-page-step--active">
                            <div class="map-page-step-circle">1</div>
                            <span class="text-xs font-bold text-primary">تحديد الموقع</span>
                        </div>
                       
                        
                        <div class="map-page-step">
                            <div class="map-page-step-circle">2</div>
                            <span class="text-xs text-muted">تفاصيل الخدمة</span>
                        </div>

                       
                         <div class="map-page-step">
                            <div class="map-page-step-circle">3</div>
                            <span class="text-xs text-muted">مراجعة ونشر</span>
                        </div>
                    </div>

                    {{-- Header --}}
                    <div class="text-center mb-xl">
                        <h1 class="text-xl font-bold mb-sm" style="color: #111;">حدد موقعك</h1>
                        <p class="text-muted text-sm">اختر الموقع الجغرافي لتظهر خدمات الفريلانسرز المتاحة بالقرب منك</p>
                    </div>

                    {{-- Search Input --}}
                    <div class="input-group mb-xl" style="border-radius: 12px; padding: 4px; flex-direction: row-reverse;">
                        <svg class="input-group__icon" style="color: #aaa;" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        <input type="text" class="input-group__input" placeholder="ابحث عن مدينة أو منطقة أو عنوان..." style="font-size: 14px; border: none; background: transparent; padding-right: 10px; text-align: right;">
                    </div>

                    {{-- Selection Methods --}}
                    <div class="mb-xl">
                        <h3 class="text-md font-bold mb-md text-center">اختر طريقة تحديد الموقع</h3>
                        <div class="map-page-methods">
                            {{-- Method 2: Manual --}}
                            <div class="map-page-method-card">
                                <div style="color: #666; margin-bottom: 12px;">
                                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin: 0 auto;"><polygon points="3 6 9 3 15 6 21 3 21 18 15 21 9 18 3 21 3 6"></polygon><line x1="9" y1="3" x2="9" y2="18"></line><line x1="15" y1="6" x2="15" y2="21"></line></svg>
                                </div>
                                <h4 class="font-bold text-sm mb-xs text-text-dark">اختيار موقع على الخريطة</h4>
                                <p class="text-xs text-muted" style="line-height: 1.5;">تحديد الموقع يدوياً على الخريطة</p>
                            </div>

                            {{-- Method 1: Current Location (Active) --}}
                            <div class="map-page-method-card map-page-method-card--active">
                                <div style="position: absolute; top: 10px; right: 10px; color: var(--color-primary);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"></circle><path d="M10 15l-3-3 1.4-1.4 1.6 1.6 4.6-4.6L16 9z" fill="white"></path></svg>
                                </div>
                                <div style="color: var(--color-primary); margin-bottom: 12px;">
                                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin: 0 auto;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                </div>
                                <h4 class="font-bold text-sm mb-xs text-text-dark">موقعي الحالي</h4>
                                <p class="text-xs text-muted" style="line-height: 1.5;">استخدام الموقع الحالي لجهازك</p>
                            </div>
                        </div>
                    </div>

                    {{-- Range Slider --}}
                    <div class="map-page-range-slider">
                        <div class="d-flex align-center justify-center gap-xs mb-md">
                            <span class="text-sm font-bold text-muted">نطاق البحث</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                        </div>
                        
                        <div class="map-page-slider-wrapper">
                            {{-- Tooltip --}}
                            <div style="position: absolute; top: -10px; right: 40%; transform: translateX(50%); background: white; border: 1px solid #eee; padding: 4px 12px; border-radius: 4px; font-size: 12px; font-weight: bold; box-shadow: var(--shadow-sm); z-index: 2;">
                                10 كم
                            </div>
                            
                            <div class="map-page-slider-track">
                                <div class="map-page-slider-active"></div>
                                <div class="map-page-slider-thumb"></div>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-between text-xs text-muted mt-sm">
                            <span>1 كم</span>
                            <span>5 كم</span>
                            <span style="font-weight: bold; color: #333;">10 كم</span>
                            <span>25 كم</span>
                            <span>50 كم</span>
                        </div>
                    </div>

                    {{-- Summary Box --}}
                    <div class="map-page-summary-box">
                        <div style="color: var(--color-primary);">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle><line x1="12" y1="2" x2="12" y2="4"></line><line x1="12" y1="20" x2="12" y2="22"></line><line x1="2" y1="12" x2="4" y2="12"></line><line x1="20" y1="12" x2="22" y2="12"></line></svg>
                        </div>
                        <div class="text-right">
                            <h4 class="font-bold text-md mb-xs" style="color: #c95d1d;">سيتم البحث في نطاق 10 كم</h4>
                            <p class="text-sm" style="color: #d8783e;">ستظهر لك الفريلانسرز والخدمات المتاحة في هذا الجغرافي</p>
                        </div>
                    </div>

                    {{-- Buttons --}}
                    <div class="d-flex justify-between gap-md">
                        <button class="btn btn--outline flex-1 text-md" style="justify-content: center; padding: 12px; border-radius: 12px;">
                            رجوع
                        </button>
                        <button class="btn btn--primary flex-1 text-md" style="justify-content: center; padding: 12px; flex: 2; border-radius: 12px;">
                            التالي
                        </button>
                    </div>

                </div>
            </aside>

            {{-- ═══════════════════════════ MAIN CONTENT (MAP, LEFT in RTL) ═══════════════════════════ --}}
            

        </div>
    </div>

</x-layouts.app>
