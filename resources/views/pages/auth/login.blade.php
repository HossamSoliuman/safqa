<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول - SAFQA</title>
    <link rel="stylesheet" href="{{ asset('styles/main.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/auth.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
<body class="auth-page">

    {{-- ═══════════════════════════ LEFT SIDE (FORM) ═══════════════════════════ --}}
    <main class="auth-content">
        <div class="login-form-container">
            {{-- Logo --}}
            <div class="d-flex justify-center mb-xl">
                <a href="{{ route('home') }}" class="logo d-flex align-center gap-sm">
                    <svg width="40" height="40" viewBox="0 0 32 32" fill="none">
                        <path d="M16 0C7.163 0 0 7.163 0 16s7.163 16 16 16 16-7.163 16-16S24.837 0 16 0zm-1.5 24.5l-8.5-8.5 2.121-2.121 6.379 6.379 10.379-10.379 2.121 2.121-12.5 12.5z" fill="#f37021" />
                    </svg>
                    <span class="font-bold text-2xl" style="letter-spacing: -1px;">SAFQA</span>
                </a>
            </div>

            {{-- Welcome Text --}}
            <div class="text-center mb-xl">
                <h1 class="text-2xl font-bold mb-xs">مرحباً بك في SAFQA</h1>
                <p class="text-muted text-sm">المنصة الشاملة للفريلانسرز وأصحاب المشاريع</p>
            </div>

            {{-- Tabs --}}
            <div class="login-tabs">
                <div class="login-tab">إنشاء حساب</div>
                <div class="login-tab login-tab--active">تسجيل الدخول</div>
            </div>

            {{-- Form --}}
            <form action="#">
                <div class="form-group">
                    <label class="form-label">البريد الإلكتروني</label>
                    <div class="input-group">
                        <svg class="input-group__icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        <input type="email" class="input-group__input" placeholder="name@example.com">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">كلمة المرور</label>
                    <div class="input-group">
                        <svg class="input-group__icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                        <input type="password" class="input-group__input" placeholder="••••••••••••">
                        <svg class="input-group__icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                    </div>
                    <div style="text-align: left; margin-top: 8px;">
                        <a href="#" class="text-primary text-xs font-bold">نسيت كلمة المرور؟</a>
                    </div>
                </div>

                <button type="submit" class="btn btn--primary w-full py-md text-md" style="border-radius: var(--radius-md);">تسجيل الدخول</button>
            </form>

            <div class="divider-text">
                <span>أو تسجيل الدخول باستخدام</span>
            </div>

            <div class="social-login">
                <div class="social-btn">
                    <svg width="24" height="24" viewBox="0 0 24 24"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l3.66-2.84z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/></svg>
                </div>
                <div class="social-btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.989C18.343 21.129 22 16.99 22 12c0-5.523-4.477-10-10-10z"></path></svg>
                </div>
                <div class="social-btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003zM7.12 20.452H3.558V8.995H7.12v11.457zM5.34 7.433a2.064 2.064 0 1 1 0-4.128 2.066 2.066 0 0 1 0 4.128zm15.119 13.019h-3.557v-5.569c0-1.328-.024-3.037-1.852-3.037-1.852 0-2.136 1.445-2.136 2.939v5.667H9.356V8.995h3.413v1.561h.047c.475-.9 1.636-1.852 3.37-1.852 3.605 0 4.27 2.372 4.27 5.457v6.291z"></path></svg>
                </div>
            </div>

            <div class="text-center mt-xl">
                <p class="text-sm text-muted">ليس لديك حساب؟ <a href="#" class="text-primary font-bold">إنشاء حساب جديد</a></p>
            </div>
        </div>
    </main>

    {{-- ═══════════════════════════ RIGHT SIDE (MARKETING) ═══════════════════════════ --}}
    <aside class="auth-sidebar">
        {{-- Background Decoration --}}
        <div style="position:absolute; top:-100px; right:-100px; width:300px; height:300px; background:var(--color-primary); border-radius:50%; opacity:0.1; z-index:0;"></div>
        <div style="position:absolute; top:40px; right:40px; z-index:0;">
            <svg width="100" height="100" viewBox="0 0 100 100" fill="none">
                <circle cx="10" cy="10" r="2" fill="var(--color-border)" />
                <circle cx="30" cy="10" r="2" fill="var(--color-border)" />
                <circle cx="50" cy="10" r="2" fill="var(--color-border)" />
                <circle cx="10" cy="30" r="2" fill="var(--color-border)" />
                <circle cx="30" cy="30" r="2" fill="var(--color-border)" />
                <circle cx="50" cy="30" r="2" fill="var(--color-border)" />
                <circle cx="10" cy="50" r="2" fill="var(--color-border)" />
                <circle cx="30" cy="50" r="2" fill="var(--color-border)" />
                <circle cx="50" cy="50" r="2" fill="var(--color-border)" />
            </svg>
        </div>

        <div class="auth-sidebar__header" style="position:relative; z-index:2;">
            <h2 class="auth-sidebar__title">كل المهارات. <br> <span>كل المشاريع. مكان واحد</span></h2>
            <p class="auth-sidebar__subtitle">انضم إلى آلاف الفريلانسرز وأصحاب المشاريع في المنصة الأولى للعمل الحر في العالم العربي.</p>
        </div>

        <div class="auth-features" style="position:relative; z-index:2;">
            <div class="auth-feature-item">
                <div class="auth-feature-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                </div>
                <div class="auth-feature-text">
                    <h3>مشاريع موثوقة</h3>
                    <p>نضمن جودة كل مشروع من خلال نظام تقييمات دقيق</p>
                </div>
            </div>
            <div class="auth-feature-item">
                <div class="auth-feature-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2" ry="2"></rect><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                </div>
                <div class="auth-feature-text">
                    <h3>مدفوعات آمنة</h3>
                    <p>نظام دفع محمي وضمان حقوق الفريلانسر وأصحاب المشاريع</p>
                </div>
            </div>
            <div class="auth-feature-item">
                <div class="auth-feature-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div>
                <div class="auth-feature-text">
                    <h3>مجتمع احترافي</h3>
                    <p>تواصل مع أفضل الخبراء في جميع المجالات</p>
                </div>
            </div>
            <div class="auth-feature-item">
                <div class="auth-feature-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                </div>
                <div class="auth-feature-text">
                    <h3>دعم على مدار الساعة</h3>
                    <p>فريق دعم متخصص لمساعدتك في أي وقت</p>
                </div>
            </div>
        </div>



        {{-- Stats Bar --}}
        <div class="auth-stats-bar">
            <div class="text-center">
                <span class="d-block font-bold text-lg">+50K</span>
                <span class="text-xs text-muted">فريلانسر نشط</span>
            </div>
            <div class="text-center">
                <span class="d-block font-bold text-lg">+20K</span>
                <span class="text-xs text-muted">مشروع مكتمل</span>
            </div>
            <div class="text-center">
                <span class="d-block font-bold text-lg">+15K</span>
                <span class="text-xs text-muted">عميل سعيد</span>
            </div>
            <div class="text-center">
                <span class="d-block font-bold text-lg">+98%</span>
                <span class="text-xs text-muted">نسبة النجاح</span>
            </div>
        </div>

        <footer style="margin-top: var(--spacing-xl); text-align: center; color: var(--color-text-muted); font-size: var(--font-size-xs); z-index: 2;">
            جميع الحقوق محفوظة. SAFQA 2024 ©
        </footer>
    </aside>

</body>
</html>
