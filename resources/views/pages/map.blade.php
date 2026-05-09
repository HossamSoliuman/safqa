<x-layouts.app
    title="تحديد الموقع - SAFQA"
    description="حدد موقعك أو موقع المشروع على الخريطة للوصول إلى أفضل الفريلانسرز القريبين."
>

    <div class="container" style="padding-top: var(--spacing-xl); padding-bottom: var(--spacing-2xl);">
        
        {{-- Breadcrumbs --}}
        <div class="d-flex justify-between align-center mb-xl">
            <div class="text-sm text-muted d-flex align-center gap-sm">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                <a href="{{ route('home') }}" class="text-muted hover:text-primary">الرئيسية</a> /
                <a href="#" class="text-muted hover:text-primary">نشر مشروع</a> /
                <span class="text-text-dark font-bold">تحديد الموقع</span>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 450px; gap: var(--spacing-xl); align-items: stretch;">
            
            {{-- ═══════════════════════════ MAIN CONTENT (MAP, RIGHT in RTL) ═══════════════════════════ --}}
            <main class="main-content" style="position: relative; height: 100%; display: flex; flex-direction: column; gap: var(--spacing-lg);">
                
                {{-- Map Container --}}
                <div class="card" style="flex: 1; padding: 0; position: relative; overflow: hidden; background-color: #e5e3df; background-image: url('data:image/svg+xml;utf8,<svg width=\"100%\" height=\"100%\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M0,100 L200,50 L400,150 L600,0 L800,200 L1000,100\" stroke=\"%23ffffff\" stroke-width=\"4\" fill=\"none\"/><path d=\"M0,300 L200,250 L400,350 L600,200 L800,400 L1000,300\" stroke=\"%23ffffff\" stroke-width=\"6\" fill=\"none\"/><path d=\"M100,0 L150,500\" stroke=\"%23ffffff\" stroke-width=\"4\" fill=\"none\"/><path d=\"M500,0 L550,500\" stroke=\"%23ffffff\" stroke-width=\"3\" fill=\"none\"/></svg>');">
                    
                    {{-- Search Overlay --}}
                    <div style="position: absolute; top: 20px; left: 20px; z-index: 10; background: white; padding: 12px 20px; border-radius: var(--radius-md); box-shadow: var(--shadow-sm); display: flex; align-items: center; gap: 12px; min-width: 300px;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        <span class="text-sm font-bold text-text-dark">الرياض، المملكة العربية السعودية</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#666" stroke-width="2" style="margin-left: auto;"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="3"></circle></svg>
                    </div>

                    {{-- Map Center Elements --}}
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 5;">
                        {{-- Radius Circle --}}
                        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 400px; height: 400px; background-color: rgba(243, 112, 33, 0.15); border: 2px solid rgba(243, 112, 33, 0.5); border-radius: 50%;"></div>
                        
                        {{-- Center Pin --}}
                        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -100%); color: var(--color-primary);">
                            <svg width="48" height="48" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path></svg>
                        </div>
                    </div>

                    {{-- Avatars on Map --}}
                    <div style="position: absolute; top: 30%; left: 35%; z-index: 6;">
                        <img src="https://i.pravatar.cc/40?u=a1" style="border-radius: 50%; border: 2px solid white; box-shadow: var(--shadow-sm); width: 36px; height: 36px;">
                    </div>
                    <div style="position: absolute; top: 60%; left: 45%; z-index: 6;">
                        <img src="https://i.pravatar.cc/40?u=a2" style="border-radius: 50%; border: 2px solid white; box-shadow: var(--shadow-sm); width: 36px; height: 36px;">
                    </div>
                    <div style="position: absolute; top: 40%; right: 30%; z-index: 6;">
                        <img src="https://i.pravatar.cc/40?u=a3" style="border-radius: 50%; border: 2px solid white; box-shadow: var(--shadow-sm); width: 36px; height: 36px;">
                    </div>
                    <div style="position: absolute; bottom: 25%; right: 45%; z-index: 6;">
                        <img src="https://i.pravatar.cc/40?u=a4" style="border-radius: 50%; border: 2px solid white; box-shadow: var(--shadow-sm); width: 36px; height: 36px;">
                    </div>

                    {{-- Map Controls (Bottom Right/Left) --}}
                    <div style="position: absolute; bottom: 120px; right: 20px; z-index: 10; display: flex; flex-direction: column; gap: 10px;">
                        <button class="btn btn--white" style="width: 40px; height: 40px; padding: 0; border-radius: 8px; box-shadow: var(--shadow-md); justify-content: center; font-size: 20px; font-weight: bold; color: #555;">+</button>
                        <button class="btn btn--white" style="width: 40px; height: 40px; padding: 0; border-radius: 8px; box-shadow: var(--shadow-md); justify-content: center; font-size: 20px; font-weight: bold; color: #555;">−</button>
                        <button class="btn btn--white" style="width: 40px; height: 40px; padding: 0; border-radius: 8px; box-shadow: var(--shadow-md); justify-content: center; margin-top: 10px; color: #555;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M12 2v2m0 16v2m10-10h-2M4 12H2m18 0a8 8 0 1 1-16 0 8 8 0 0 1 16 0z"></path></svg>
                        </button>
                    </div>

                    {{-- Stats Floating Card --}}
                    <div style="position: absolute; bottom: 20px; left: 20px; right: 20px; background: white; border-radius: var(--radius-md); padding: var(--spacing-lg); box-shadow: var(--shadow-lg); z-index: 10;">
                        <div class="grid grid-cols-4 gap-md text-center">
                            
                            {{-- Reversed order --}}
                            <div>
                                <div style="color: var(--color-primary); margin-bottom: var(--spacing-xs); display: flex; justify-content: center;">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle></svg>
                                </div>
                                <h4 class="font-bold text-md mb-xs">10 كم</h4>
                                <p class="text-xs text-muted">نطاق البحث الحالي</p>
                            </div>

                            <div style="border-right: 1px solid #eee;">
                                <div style="color: var(--color-primary); margin-bottom: var(--spacing-xs); display: flex; justify-content: center;">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                </div>
                                <h4 class="font-bold text-md mb-xs">24</h4>
                                <p class="text-xs text-muted">فريلانسر متاح</p>
                            </div>

                            <div style="border-right: 1px solid #eee;">
                                <div style="color: var(--color-primary); margin-bottom: var(--spacing-xs); display: flex; justify-content: center;">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                </div>
                                <h4 class="font-bold text-md mb-xs">57</h4>
                                <p class="text-xs text-muted">خدمة متاحة</p>
                            </div>

                            <div style="border-right: 1px solid #eee;">
                                <div style="color: var(--color-primary); margin-bottom: var(--spacing-xs); display: flex; justify-content: center;">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                                </div>
                                <h4 class="font-bold text-md mb-xs">الرياض</h4>
                                <p class="text-xs text-muted">الموقع الحالي</p>
                            </div>

                        </div>
                    </div>

                </div>

                {{-- Tips Box --}}
                <div style="background-color: #fffaf7; border: 1px solid #ffe8d6; border-radius: var(--radius-md); padding: var(--spacing-md) var(--spacing-xl); display: flex; align-items: center; justify-content: center; gap: var(--spacing-md);">
                    <div style="color: var(--color-primary);">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18h6"/><path d="M10 22h4"/><path d="M15.09 14c.18-.98.65-1.74 1.41-2.5A6 6 0 1 0 7.5 11.5c.76.76 1.23 1.52 1.41 2.5Z"/></svg>
                    </div>
                    <div class="d-flex gap-xs align-center">
                        <span class="font-bold text-sm text-text-dark">نصائح</span>
                        <span class="text-sm text-muted">كلما كان النطاق أصغر، كانت النتائج أكثر دقة وملاءمة لاحتياجاتك</span>
                    </div>
                </div>

            </main>

            {{-- ═══════════════════════════ SIDEBAR (LEFT in RTL) ═══════════════════════════ --}}
            <aside class="sidebar" style="border: none; background: transparent; box-shadow: none; gap: var(--spacing-lg);">
                
                <div class="card" style="padding: var(--spacing-2xl) var(--spacing-xl); display: flex; flex-direction: column; height: 100%;">
                    
                    {{-- Stepper (Reversed) --}}
                    <div class="d-flex align-center justify-between mb-2xl" style="position: relative;">
                        <div style="position: absolute; top: 15px; left: 10%; right: 10%; height: 2px; background: #eee; z-index: 1;"></div>
                        
                        <div class="d-flex flex-column align-center gap-sm" style="position: relative; z-index: 2;">
                            <div style="width: 32px; height: 32px; border-radius: 50%; background: white; color: #999; border: 1px solid #ccc; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 14px; box-shadow: 0 0 0 4px white;">3</div>
                            <span class="text-xs text-muted">مراجعة ونشر</span>
                        </div>
                        
                        <div class="d-flex flex-column align-center gap-sm" style="position: relative; z-index: 2;">
                            <div style="width: 32px; height: 32px; border-radius: 50%; background: white; color: #999; border: 1px solid #ccc; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 14px; box-shadow: 0 0 0 4px white;">2</div>
                            <span class="text-xs text-muted">تفاصيل الخدمة</span>
                        </div>

                        <div class="d-flex flex-column align-center gap-sm" style="position: relative; z-index: 2;">
                            <div style="width: 32px; height: 32px; border-radius: 50%; background: var(--color-primary); color: white; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 14px; border: 4px solid white;">1</div>
                            <span class="text-xs font-bold text-primary">تحديد الموقع</span>
                        </div>
                    </div>

                    {{-- Header --}}
                    <div class="text-center mb-xl">
                        <h1 class="text-xl font-bold mb-sm" style="color: #111;">حدد موقعك</h1>
                        <p class="text-muted text-sm">اختر الموقع الجغرافي لتظهر خدمات الفريلانسرز المتاحة بالقرب منك</p>
                    </div>

                    {{-- Search Input (Reversed Icon) --}}
                    <div class="input-group mb-xl flex-reverse" style="border-radius: var(--radius-md); padding: 4px;">
                        <svg class="input-group__icon" style="color: #aaa;" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        <input type="text" class="input-group__input" placeholder="ابحث عن مدينة أو منطقة أو عنوان..." style="font-size: 14px; border: none; background: transparent; padding-left: 10px;">
                    </div>

                    {{-- Selection Methods (Reversed) --}}
                    <div class="mb-xl">
                        <h3 class="text-md font-bold mb-md text-center">اختر طريقة تحديد الموقع</h3>
                        <div class="grid grid-cols-2 gap-md">
                            {{-- Method 2: Manual --}}
                            <div class="card text-center" style="padding: var(--spacing-lg) var(--spacing-sm); border: 1px solid var(--color-border); background-color: white; cursor: pointer; box-shadow: none;">
                                <div style="color: #666; margin-bottom: var(--spacing-sm); d-flex justify-center">
                                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin: 0 auto;"><polygon points="3 6 9 3 15 6 21 3 21 18 15 21 9 18 3 21 3 6"></polygon><line x1="9" y1="3" x2="9" y2="18"></line><line x1="15" y1="6" x2="15" y2="21"></line></svg>
                                </div>
                                <h4 class="font-bold text-sm mb-xs text-text-dark">اختيار موقع على الخريطة</h4>
                                <p class="text-xs text-muted" style="line-height: 1.5;">تحديد الموقع يدوياً على الخريطة</p>
                            </div>

                            {{-- Method 1: Current Location (Active) --}}
                            <div class="card text-center" style="padding: var(--spacing-lg) var(--spacing-sm); border: 2px solid var(--color-primary); background-color: #fffaf7; cursor: pointer; position: relative;">
                                <div style="position: absolute; top: 10px; right: 10px; color: var(--color-primary);">
                                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><circle cx="12" cy="12" r="10"></circle><path d="M10 15l-3-3 1.4-1.4 1.6 1.6 4.6-4.6L16 9z" fill="white"></path></svg>
                                </div>
                                <div style="color: var(--color-primary); margin-bottom: var(--spacing-sm); d-flex justify-center">
                                    <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin: 0 auto;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 1 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                </div>
                                <h4 class="font-bold text-sm mb-xs text-text-dark">موقعي الحالي</h4>
                                <p class="text-xs text-muted" style="line-height: 1.5;">استخدام الموقع الحالي لجهازك</p>
                            </div>
                        </div>
                    </div>

                    {{-- Range Slider (Reversed) --}}
                    <div class="mb-xl text-center">
                        <div class="d-flex align-center justify-center gap-xs mb-md flex-reverse">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#888" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                            <span class="text-sm font-bold text-muted">نطاق البحث</span>
                        </div>
                        
                        <div style="position: relative; padding: 20px 0 10px;">
                            {{-- Tooltip --}}
                            <div style="position: absolute; top: -10px; right: 40%; transform: translateX(50%); background: white; border: 1px solid #eee; padding: 4px 12px; border-radius: 4px; font-size: 12px; font-weight: bold; box-shadow: var(--shadow-sm); z-index: 2;">
                                10 كم
                            </div>
                            
                            {{-- Slider Track --}}
                            <div style="height: 6px; background: #eee; border-radius: 3px; position: relative;">
                                {{-- Active Track --}}
                                <div style="position: absolute; top: 0; left: 0; height: 100%; width: 40%; background: var(--color-primary); border-radius: 3px;"></div>
                                
                                {{-- Thumb --}}
                                <div style="position: absolute; top: 50%; right: 60%; transform: translate(50%, -50%); width: 20px; height: 20px; background: var(--color-primary); border-radius: 50%; border: 3px solid white; box-shadow: 0 2px 4px rgba(0,0,0,0.2); z-index: 2; cursor: pointer;"></div>
                            </div>
                        </div>
                        
                        {{-- Labels (Reversed) --}}
                        <div class="d-flex justify-between text-xs text-muted mt-sm flex-reverse">
                            <span>50 كم</span>
                            <span>25 كم</span>
                            <span style="font-weight: bold; color: #333;">10 كم</span>
                            <span>5 كم</span>
                            <span>1 كم</span>
                        </div>
                    </div>

                    {{-- Info Box (Reversed) --}}
                    <div style="background-color: #fff4ed; border-radius: var(--radius-md); padding: var(--spacing-lg); display: flex; align-items: center; justify-content: space-between; margin-top: auto; margin-bottom: var(--spacing-2xl); flex-direction: row-reverse;">
                        <div class="text-left">
                            <h4 class="font-bold text-md mb-xs" style="color: #c95d1d;">سيتم البحث في نطاق 10 كم</h4>
                            <p class="text-sm" style="color: #d8783e;">ستظهر لك الفريلانسرز والخدمات المتاحة في هذا النطاق الجغرافي</p>
                        </div>
                        <div style="color: var(--color-primary); margin-left: var(--spacing-md);">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="6"></circle><circle cx="12" cy="12" r="2"></circle><line x1="12" y1="2" x2="12" y2="4"></line><line x1="12" y1="20" x2="12" y2="22"></line><line x1="2" y1="12" x2="4" y2="12"></line><line x1="20" y1="12" x2="22" y2="12"></line></svg>
                        </div>
                    </div>

                    {{-- Buttons (Reversed) --}}
                    <div class="d-flex justify-between gap-md flex-reverse">
                        <button class="btn btn--outline flex-1 text-md flex-reverse" style="justify-content: center; padding: 12px; background: transparent; border-color: #ddd;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-right: 8px;"><path d="M5 12h14"></path><path d="M12 5l7 7-7 7"></path></svg>
                            رجوع
                        </button>
                        <button class="btn btn--primary flex-1 text-md flex-reverse" style="justify-content: center; padding: 12px; flex: 2;">
                            التالي
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-left: 8px;"><path d="M19 12H5"></path><path d="M12 19l-7-7 7-7"></path></svg>
                        </button>
                    </div>

                </div>

            </aside>

        </div>
    </div>

</x-layouts.app>
