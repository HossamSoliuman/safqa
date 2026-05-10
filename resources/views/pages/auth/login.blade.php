<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول - SAFQA</title>
    <meta name="description" content="سجّل دخولك إلى منصة SAFQA للعمل الحر في العالم العربي">
    <link rel="stylesheet" href="{{ asset('styles/main.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="lp-body">

    {{-- ═══════════════════════════ PAGE WRAPPER ═══════════════════════════ --}}
    <div class="lp-wrapper">

       

        {{-- ── MARKETING SIDE (RIGHT in RTL layout) ──────────────────────── --}}
        <section class="lp-marketing-side" aria-label="مميزات المنصة">

            {{-- Floating avatars --}}
            <div class="lp-avatar lp-avatar--top-right" aria-hidden="true">
                <div class="lp-avatar-placeholder lp-avatar-placeholder--1"></div>
            </div>
            <div class="lp-avatar lp-avatar--mid-right" aria-hidden="true">
                <div class="lp-avatar-placeholder lp-avatar-placeholder--2"></div>
            </div>

            {{-- Heading --}}
            <div class="lp-mkt-heading">
                <h2 class="lp-mkt-title">
                    كل المهارات.<br>
                    <span class="lp-mkt-title-highlight">كل المشاريع.</span> مكان واحد
                </h2>
                <p class="lp-mkt-subtitle">
                    انضم إلى آلاف الفريلانسرز وأصحاب المشاريع في المنصة الأولى للعمل الحر في العالم العربي.
                </p>
            </div>

            {{-- Features grid (left half) + Person image (right half) --}}
            <div class="lp-mkt-content">

{{-- Person image placeholder --}}
                <div class="lp-person-image" aria-hidden="true">
                    <div class="lp-person-placeholder">
                        <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="rgba(243,112,33,0.3)" stroke-width="1">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                        <div class="lp-laptop-placeholder">
                            <svg width="48" height="32" viewBox="0 0 24 16" fill="none" stroke="rgba(243,112,33,0.4)" stroke-width="1">
                                <rect x="1" y="1" width="22" height="12" rx="1"/>
                                <line x1="0" y1="15" x2="24" y2="15"/>
                            </svg>
                        </div>
                        <div class="lp-safqa-watermark">
                            <svg width="28" height="28" viewBox="0 0 32 32" fill="none">
                                <rect width="32" height="32" rx="8" fill="#f37021" opacity="0.2"/>
                                <path d="M10 16.5l4.5 4.5 8-9" stroke="#f37021" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>

                {{-- Features list --}}
                <div class="lp-features">
                    <div class="lp-feature-item">
                       
                        <div class="lp-feature-text">
                            <h3>مشاريع موثوقة</h3>
                            <p>نضمن جودة كل مشروع<br>من خلال نظام تقييمات دقيق</p>
                        </div>
                         <div class="lp-feature-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="lp-feature-item">
                        
                        <div class="lp-feature-text">
                            <h3>مدفوعات آمنة</h3>
                            <p>نظام دفع محمي وضمان حقوق<br>الفريلانسر وأصحاب المشاريع</p>
                        </div>
                        <div class="lp-feature-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                                <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/>
                                <line x1="12" y1="12" x2="12" y2="16"/>
                                <line x1="10" y1="14" x2="14" y2="14"/>
                            </svg>
                        </div>
                    </div>
                    <div class="lp-feature-item">
                        
                        <div class="lp-feature-text">
                            <h3>مجتمع احترافي</h3>
                            <p>تواصل مع أفضل الخبراء في<br>جميع المجالات</p>
                        </div>
                        <div class="lp-feature-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                        </div>
                       
                    </div>
                    <div class="lp-feature-item">
                        
                        <div class="lp-feature-text">
                            <h3>دعم على مدار الساعة</h3>
                            <p>فريق دعم متخصص لمساعدتك<br>في أي وقت</p>
                        </div>
                        <div class="lp-feature-icon">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                                <line x1="12" y1="8" x2="12" y2="12"/>
                                <line x1="12" y1="16" x2="12.01" y2="16"/>
                            </svg>
                        </div>
                    
                    </div>
                </div>

                

            </div>{{-- /.lp-mkt-content --}}

            {{-- Stats bar --}}
            <div class="lp-stats">
                <div class="lp-stat">
                    <div class="lp-stat-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    </div>
                    <div>
                        <span class="lp-stat-value">+50K</span>
                        <span class="lp-stat-label">فريلانسر نشط</span>
                    </div>
                </div>
                <div class="lp-stat">
                    <div class="lp-stat-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                        </svg>
                    </div>
                    <div>
                        <span class="lp-stat-value">+20K</span>
                        <span class="lp-stat-label">مشروع مكتمل</span>
                    </div>
                </div>
                <div class="lp-stat">
                    <div class="lp-stat-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="8" r="4"/>
                            <path d="M6 20v-2a4 4 0 0 1 4-4h4a4 4 0 0 1 4 4v2"/>
                        </svg>
                    </div>
                    <div>
                        <span class="lp-stat-value">+15K</span>
                        <span class="lp-stat-label">عميل سعيد</span>
                    </div>
                </div>
                <div class="lp-stat">
                    <div class="lp-stat-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                            <polyline points="22 4 12 14.01 9 11.01"/>
                        </svg>
                    </div>
                    <div>
                        <span class="lp-stat-value">+98%</span>
                        <span class="lp-stat-label">نسبة النجاح</span>
                    </div>
                </div>
            </div>{{-- /.lp-stats --}}

        </section>{{-- /.lp-marketing-side --}}
         {{-- ── FORM SIDE (LEFT in RTL layout) ────────────────────────────── --}}
        <section class="lp-form-side">

            {{-- Decorative dots top-left --}}
            <div class="lp-dots lp-dots--top-left" aria-hidden="true">
                <div class="lp-dots-circle lp-dots-circle--orange"></div>
                <div class="lp-dots-grid"></div>
            </div>

            {{-- Card --}}
            <div class="lp-card">

                {{-- Logo --}}
                <div class="lp-logo-wrap">
                    <a href="{{ route('home') }}" class="lp-logo" style="text-decoration:none;">
                        {{-- SAFQA icon --}}
                        <div class="lp-logo-icon">
                            <svg width="36" height="36" viewBox="0 0 32 32" fill="none">
                                <rect width="32" height="32" rx="8" fill="#f37021"/>
                                <path d="M10 16.5l4.5 4.5 8-9" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span class="lp-logo-text">SAFQA</span>
                    </a>
                </div>

                {{-- Welcome heading --}}
                <div class="lp-welcome">
                    <h1 class="lp-welcome-title">مرحباً بك في SAFQA</h1>
                    <p class="lp-welcome-sub">المنصة الشاملة للفريلانسرز وأصحاب المشاريع</p>
                </div>

                {{-- Tabs --}}
                <div class="lp-tabs" role="tablist">
                    <a href="#" class="lp-tab lp-tab--active" role="tab" aria-selected="true" id="tab-login">تسجيل الدخول</a>
                    <a href="#" class="lp-tab" role="tab" aria-selected="false" id="tab-register">إنشاء حساب</a>
                </div>

                {{-- Login Form --}}
                <form action="#" method="POST" class="lp-form" id="login-form">
                    @csrf

                    {{-- Email --}}
                    <div class="lp-field">
                        <label class="lp-label" for="email">البريد الإلكتروني</label>
                        <div class="lp-input-wrap">
                            <span class="lp-input-icon lp-input-icon--right">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                    <polyline points="22,6 12,13 2,6"/>
                                </svg>
                            </span>
                            <input type="email" id="email" name="email" class="lp-input" placeholder="name@example.com" autocomplete="email">
                        </div>
                    </div>

                    {{-- Password --}}
                    <div class="lp-field">
                        <label class="lp-label" for="password">كلمة المرور</label>
                        <div class="lp-input-wrap">
                            <span class="lp-input-icon lp-input-icon--right">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                                </svg>
                            </span>
                            <input type="password" id="password" name="password" class="lp-input lp-input--has-left-icon" placeholder="••••••••••••" autocomplete="current-password">
                            <button type="button" class="lp-input-icon lp-input-icon--left lp-eye-btn" id="toggle-password" aria-label="إظهار كلمة المرور">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                            </button>
                        </div>
                        <div class="lp-forgot">
                            <a href="#" class="lp-forgot-link" id="forgot-password-link">نسيت كلمة المرور؟</a>
                        </div>
                    </div>

                    {{-- Submit --}}
                    <button type="submit" class="lp-submit" id="login-submit-btn">تسجيل الدخول</button>
                </form>

                {{-- Divider --}}
                <div class="lp-divider"><span>أو تسجيل الدخول باستخدام</span></div>

                {{-- Social buttons --}}
                <div class="lp-social" role="group" aria-label="تسجيل الدخول الاجتماعي">
                    <button class="lp-social-btn" id="login-google" aria-label="تسجيل الدخول بـ Google">
                        <svg width="22" height="22" viewBox="0 0 24 24">
                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/>
                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
                        </svg>
                    </button>
                    <button class="lp-social-btn" id="login-apple" aria-label="تسجيل الدخول بـ Apple">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.8-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/>
                        </svg>
                    </button>
                    <button class="lp-social-btn" id="login-other" aria-label="تسجيل الدخول بطريقة أخرى">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                            <path d="M2 17l10 5 10-5"/>
                            <path d="M2 12l10 5 10-5"/>
                        </svg>
                    </button>
                </div>

                <div class="lp-divider"></div>


                {{-- Register link --}}
                <p class="lp-register-link">
                    ليس لديك حساب؟
                    <a href="#" id="goto-register" class="lp-register-anchor">إنشاء حساب جديد</a>
                </p>

            </div>{{-- /.lp-card --}}

        </section>{{-- /.lp-form-side --}}

    </div>{{-- /.lp-wrapper --}}

    {{-- Footer --}}
    <footer class="lp-footer">
        <p>جميع الحقوق محفوظة. SAFQA &copy; 2024</p>
    </footer>

    <script>
        // Password visibility toggle
        const toggleBtn = document.getElementById('toggle-password');
        const passwordInput = document.getElementById('password');
        if (toggleBtn && passwordInput) {
            toggleBtn.addEventListener('click', () => {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                toggleBtn.setAttribute('aria-label', type === 'password' ? 'إظهار كلمة المرور' : 'إخفاء كلمة المرور');
            });
        }
    </script>

</body>
</html>
