<x-layouts.app
    title="SAFQA - المنصة الشاملة للفريلانسرز"
    description="تواصل مع أفضل الفريلانسرز في جميع المجالات وأنجز أعمالك بسرعة وجودة عالية."
>

    <x-home-hero />

    {{-- Stats Section --}}
    <section class="section">
        <div class="container d-flex gap-xl" style="flex-wrap: wrap;">
            <x-stat-card value="+50K" label="فريلانسر نشط" color="primary">
                <x-slot name="icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </x-slot>
            </x-stat-card>
            <x-stat-card value="+20K" label="مشروع مكتمل" color="primary">
                <x-slot name="icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                </x-slot>
            </x-stat-card>
            <x-stat-card value="+15K" label="عميل سعيد" color="primary">
                <x-slot name="icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                </x-slot>
            </x-stat-card>
            <x-stat-card value="+98%" label="نسبة النجاح" color="primary">
                <x-slot name="icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                </x-slot>
            </x-stat-card>
        </div>
    </section>

    {{-- Categories Section --}}
    <section class="section section--bg">
        <div class="container">
            <h2 class="section__title">تصفح التصنيفات</h2>
            <div class="grid grid-cols-4 gap-xl">
                <x-category-card title="برمجة وتطوير">
                    <x-slot name="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                    </x-slot>
                </x-category-card>
                <x-category-card title="تصميم وجرافيك">
                    <x-slot name="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path><path d="M2 12h20"></path></svg>
                    </x-slot>
                </x-category-card>
                <x-category-card title="تسويق رقمي">
                    <x-slot name="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 19l7-7 3 3-7 7-3-3z"></path><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"></path><path d="M2 2l7.5 1.5"></path><path d="M7.6 7.6L2 2"></path></svg>
                    </x-slot>
                </x-category-card>
                <x-category-card title="كتابة وترجمة">
                    <x-slot name="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                    </x-slot>
                </x-category-card>
                <x-category-card title="فيديو وصوتيات">
                    <x-slot name="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M23 7l-7 5 7 5V7z"></path><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                    </x-slot>
                </x-category-card>
                <x-category-card title="أعمال وإدارة">
                    <x-slot name="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                    </x-slot>
                </x-category-card>
                <x-category-card title="استشارات">
                    <x-slot name="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                    </x-slot>
                </x-category-card>
                <x-category-card title="المزيد">
                    <x-slot name="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                    </x-slot>
                </x-category-card>
            </div>
        </div>
    </section>

    {{-- Featured Freelancers --}}
    <section class="section">
        <div class="container">
            <div class="d-flex justify-between align-center mb-xl">
                <h2 class="text-xl font-bold">فريلانسرز مميزون</h2>
                <a href="#" class="text-primary font-semibold">عرض الكل</a>
            </div>
            <div class="grid grid-cols-4 gap-lg">
                <x-freelancer-card 
                    name="أحمد محمد" 
                    title="مطور ويب" 
                    rating="5.0" 
                    avatar="https://i.pravatar.cc/150?u=a"
                    :skills="['PHP', 'Laravel', 'Vue.js']"
                />
                <x-freelancer-card 
                    name="سارة خالد" 
                    title="مصممة UI/UX" 
                    rating="4.9" 
                    avatar="https://i.pravatar.cc/150?u=s"
                    :skills="['Figma', 'UI Design', 'User Research']"
                />
                <x-freelancer-card 
                    name="محمد ب." 
                    title="مسوق رقمي" 
                    rating="5.0" 
                    avatar="https://i.pravatar.cc/150?u=m"
                    :skills="['SEO', 'Ads', 'Content']"
                />
                <x-freelancer-card 
                    name="ليلى ع." 
                    title="مترجمة محترفة" 
                    rating="4.8" 
                    avatar="https://i.pravatar.cc/150?u=l"
                    :skills="['Translation', 'English', 'Arabic']"
                />
            </div>
        </div>
    </section>

</x-layouts.app>
