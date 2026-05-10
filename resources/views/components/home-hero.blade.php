<section class="home-hero">
    <div class="container">
        <div class="home-hero-inner">

         {{-- Right Image Placeholder (RTL) --}}
            <div class="home-hero-image">
                <div class="home-hero-placeholder">
                    <div class="placeholder-pattern"></div>
                    <span class="placeholder-text">صورة المنصة (Dashboard)</span>
                </div>
            </div>
            
            
            {{-- Left Content (RTL) --}}
            <div class="home-hero-content">
                <h1 class="home-hero-title">
                    <span class="home-hero-title-dark">المنصة الشاملة</span> <br> 
                    <span class="home-hero-title-primary">للفريلانسرز وأصحاب المشاريع</span>
                </h1>
                
                <p class="home-hero-subtitle">
                    تواصل مع أفضل الفريلانسرز في جميع المجالات.<br>
                    أنجز أعمالك بسرعة وجودة عالية وموثوقية تامة.
                </p>
                
                <div class="home-hero-actions">
                   
                    <a href="{{ route('map') }}" class="btn btn--outline btn--lg" style="background: white;">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 10px;"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        انشر مشروعك
                    </a>
                     <button class="btn btn--primary btn--lg">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" style="margin-left: 10px;"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        ابحث عن عمل
                    </button>
                </div>

                <div class="home-hero-stats-mini">
                    <div class="avatars">
                        <img src="https://i.pravatar.cc/40?u=1" alt="User">
                        <img src="https://i.pravatar.cc/40?u=2" alt="User">
                        <img src="https://i.pravatar.cc/40?u=3" alt="User">
                        <img src="https://i.pravatar.cc/40?u=4" alt="User">
                    </div>
                    <p class="home-hero-stats-text">+50K عميل حول العالم يثقون بنا</p>
                </div>

                <div class="home-hero-features">
                    <div class="home-hero-feature-item">
                        <div class="feature-icon-circle">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                        </div>
                        <span>مدفوعات آمنة</span>
                    </div>
                    <div class="home-hero-feature-item">
                        <div class="feature-icon-circle">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        </div>
                        <span>دعم على مدار الساعة</span>
                    </div>
                    <div class="home-hero-feature-item">
                        <div class="feature-icon-circle">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        </div>
                        <span>فريلانسرز موثوقون</span>
                    </div>
                </div>
            </div>

           
        </div>
    </div>
</section>
