<?php

namespace App\Http\Controllers;

class OnlineCoursesController extends Controller
{
    public function index()
    {
        return view('paket.index', [
            // --- 1. Data Paket Produk Digital SKD & Tryout ---
            'pricingPlans' => [
                [
                    'id' => 1,
                    'title' => 'Paket Starter SKD',
                    'badge' => 'Pemula',
                    'badge_color' => 'light-info text-info',
                    'description' => 'Persiapan dasar konsep materi TWK, TIU, dan TKP.',
                    'original_price' => 199000,
                    'discount_price' => 99000,
                    'features' => [
                        'Video Pembelajaran TWK, TIU, TKP (Akses 3 Bulan)',
                        'Modul & Ringkasan PDF / Formula Cepat TIU',
                        '3x Simulasi Tryout CAT System + Pembahasan'
                    ],
                    'is_popular' => false,
                ],
                [
                    'id' => 2,
                    'title' => 'Paket Pro SKD Mastery',
                    'badge' => 'Best Seller',
                    'badge_color' => 'light-success text-success',
                    'description' => 'Bimbingan intensif soal HOTS lengkap dengan simulasi tryout terstruktur.',
                    'original_price' => 499000,
                    'discount_price' => 249000,
                    'features' => [
                        'Full Modul Video Basic to Advanced HOTS (Akses 12 Bulan)',
                        'E-Book & Bank Soal 1.000+ Soal + Kunci Jawaban',
                        '15x Simulasi Tryout Premium CAT SKD',
                        'Ranking Nasional & Analisis Kelemahan',
                        'Grup Komunitas Diskusi Telegram'
                    ],
                    'is_popular' => true,
                ],
                [
                    'id' => 3,
                    'title' => 'Paket Ultimate Mentoring',
                    'badge' => 'Komplit',
                    'badge_color' => 'light-warning text-warning',
                    'description' => 'Akses selamanya dengan bimbingan Live Class Zoom interaktif.',
                    'original_price' => 999000,
                    'discount_price' => 499000,
                    'features' => [
                        'Semua Fasilitas Paket Pro (Akses Selamanya)',
                        '12x Sesi Live Class / Webinar Zoom Interaktif',
                        '30x Simulasi Tryout Premium CAT SKD',
                        'Preview Materi SKB & Mentoring Wawancara',
                        'Rekaman Video Live Class (VOD)'
                    ],
                    'is_popular' => false,
                ],
            ],

            // --- 2. Data Statistik & Dashboard Metronic ---
            'taskCount'   => 4,
            'bonusPoints' => 2300,

            'courseStats' => [
                ['icon' => 'ki-flask', 'value' => '37',  'label' => 'Courses'],
                ['icon' => 'ki-bank',  'value' => '6',   'label' => 'Certificates'],
                ['icon' => 'ki-award', 'value' => '4,7', 'label' => 'Avg. Score', 'paths' => 3],
                ['icon' => 'ki-timer', 'value' => '822', 'label' => 'Hours Learned', 'paths' => 3],
            ],

            'todayCourses' => [
                ['title' => 'Penalaran Analitis TIU', 'topics' => 3, 'speakers' => 1, 'minutes' => 50, 'students' => 120],
                ['title' => 'Trik Cepat Math TIU',    'topics' => 4, 'speakers' => 1, 'minutes' => 45, 'students' => 95],
                ['title' => 'Pendalaman UUD 1945 TWK', 'topics' => 2, 'speakers' => 1, 'minutes' => 60, 'students' => 210],
            ],

            'todayEvents' => [
                ['title' => 'Live Bedah Soal HOTS SKD', 'icon' => 'ki-abstract-24', 'color' => 'success', 'topics' => 5,  'speakers' => 1, 'minutes' => 60, 'students' => 137],
                ['title' => 'Tryout Akbar CAT Nasional', 'icon' => 'ki-abstract-25', 'color' => 'danger',  'topics' => 12, 'speakers' => 1, 'minutes' => 100, 'students' => 540],
                ['title' => 'Mentoring Strategi TKP',    'icon' => 'ki-abstract-36', 'color' => 'primary', 'topics' => 3,  'speakers' => 1, 'minutes' => 50, 'students' => 88],
            ],

            'recommended' => [
                ['name' => 'Tes Wawasan Kebangsaan (TWK)',  'courses' => '40+',  'initial' => 'T', 'color' => 'danger'],
                ['name' => 'Tes Intelegensia Umum (TIU)',   'courses' => '60+',  'initial' => 'I', 'color' => 'success'],
                ['name' => 'Tes Karakteristik Pribadi (TKP)', 'courses' => '35+',  'initial' => 'K', 'color' => 'info'],
                ['name' => 'Psikotes & Wawancara',          'courses' => '20+',  'initial' => 'P', 'color' => 'primary'],
            ],

            'lessons' => [
                ['name' => 'Deret Angka & Huruf',   'desc' => 'Materi TIU', 'logo' => 'bootstrap5.svg', 'progress' => 85, 'color' => 'success'],
                ['name' => 'Pancasila & UUD 45',    'desc' => 'Materi TWK', 'logo' => 'laravel-2.svg',  'progress' => 65, 'color' => 'primary'],
                ['name' => 'Pelayanan Publik',      'desc' => 'Materi TKP', 'logo' => 'vue-9.svg',      'progress' => 90, 'color' => 'warning'],
            ],
        ]);
    }

    public function list()
    {
        return view('dashboard.online-courses', [
            // --- Data Paket Produk Digital (Course & Tryout SKD) ---
            'pricingPlans' => [
                [
                    'id' => 1,
                    'title' => 'Paket Starter SKD',
                    'badge' => 'Pemula',
                    'badge_color' => 'light-info text-info',
                    'description' => 'Cocok untuk persiapan dasar materi TWK, TIU, dan TKP.',
                    'original_price' => 199000,
                    'discount_price' => 99000,
                    'features' => [
                        'Video Pembelajaran TWK, TIU, TKP (Akses 3 Bulan)',
                        'Modul & Ringkasan PDF / Formula Cepat TIU',
                        '3x Simulasi Tryout CAT System + Pembahasan'
                    ],
                    'is_popular' => false,
                ],
                [
                    'id' => 2,
                    'title' => 'Paket Pro SKD Mastery',
                    'badge' => 'Best Seller',
                    'badge_color' => 'light-success text-success',
                    'description' => 'Bimbingan intensif soal HOTS lengkap dengan latihan tryout terstruktur.',
                    'original_price' => 499000,
                    'discount_price' => 249000,
                    'features' => [
                        'Full Modul Video Basic to Advanced HOTS (Akses 12 Bulan)',
                        'E-Book & Bank Soal 1.000+ Soal + Kunci Jawaban',
                        '15x Simulasi Tryout Premium CAT SKD',
                        'Ranking Nasional & Analisis Kelemahan',
                        'Grup Komunitas Diskusi Telegram'
                    ],
                    'is_popular' => true,
                ],
                [
                    'id' => 3,
                    'title' => 'Paket Ultimate Mentoring',
                    'badge' => 'Komplit',
                    'badge_color' => 'light-warning text-warning',
                    'description' => 'Akses selamanya dengan bimbingan Live Class Zoom interaktif.',
                    'original_price' => 999000,
                    'discount_price' => 499000,
                    'features' => [
                        'Semua Fasilitas Paket Pro (Akses Selamanya)',
                        '12x Sesi Live Class / Webinar Zoom Interaktif',
                        '30x Simulasi Tryout Premium CAT SKD',
                        'Preview Materi SKB & Mentoring Wawancara',
                        'Rekaman Video Live Class (VOD)'
                    ],
                    'is_popular' => false,
                ],
            ],

            // --- Data Bawaan Dashboard Online Courses ---
            'taskCount'   => 4,
            'bonusPoints' => 2300,

            'courseStats' => [
                ['icon' => 'ki-flask', 'value' => '37',  'label' => 'Courses'],
                ['icon' => 'ki-bank',  'value' => '6',   'label' => 'Certificates'],
                ['icon' => 'ki-award', 'value' => '4,7', 'label' => 'Avg. Score', 'paths' => 3],
                ['icon' => 'ki-timer', 'value' => '822', 'label' => 'Hours Learned', 'paths' => 3],
            ],

            'todayCourses' => [
                ['title' => 'Ruby on Rails', 'topics' => 3, 'speakers' => 1, 'minutes' => 50, 'students' => 72],
                ['title' => 'Ruby on Rails', 'topics' => 3, 'speakers' => 1, 'minutes' => 50, 'students' => 72],
                ['title' => 'Ruby on Rails', 'topics' => 3, 'speakers' => 1, 'minutes' => 50, 'students' => 72],
            ],

            'todayEvents' => [
                ['title' => 'Ruby on Rails', 'icon' => 'ki-abstract-24', 'color' => 'success', 'topics' => 5,  'speakers' => 1, 'minutes' => 60, 'students' => 137],
                ['title' => 'Ruby on Rails', 'icon' => 'ki-abstract-25', 'color' => 'danger',  'topics' => 12, 'speakers' => 1, 'minutes' => 50, 'students' => 72],
                ['title' => 'Ruby on Rails', 'icon' => 'ki-abstract-36', 'color' => 'primary', 'topics' => 3,  'speakers' => 1, 'minutes' => 50, 'students' => 72],
            ],

            'recommended' => [
                ['name' => 'UI/UX Design',     'courses' => '40+',  'initial' => 'M', 'color' => 'danger'],
                ['name' => 'QA Analysis',      'courses' => '18',   'initial' => 'Q', 'color' => 'success'],
                ['name' => 'Web Development',  'courses' => '120+', 'initial' => 'W', 'color' => 'info'],
                ['name' => 'Marketing',        'courses' => '50+',  'initial' => 'M', 'color' => 'primary'],
                ['name' => 'Philosophy',       'courses' => '24+',  'initial' => 'P', 'color' => 'warning'],
                ['name' => 'Mathematics',      'courses' => '24+',  'initial' => 'M', 'color' => 'dark'],
            ],

            'lessons' => [
                ['name' => 'Laravel',     'desc' => 'PHP Framework', 'logo' => 'laravel-2.svg',     'progress' => 65, 'color' => 'success'],
                ['name' => 'Vue 3',       'desc' => 'JS Framework',  'logo' => 'vue-9.svg',          'progress' => 87, 'color' => 'warning'],
                ['name' => 'Bootstrap 5', 'desc' => 'CSS Framework', 'logo' => 'bootstrap5.svg',     'progress' => 44, 'color' => 'primary'],
                ['name' => 'Angular 16',  'desc' => 'JS Framework',  'logo' => 'angular-icon.svg',   'progress' => 70, 'color' => 'info'],
                ['name' => 'Spring',      'desc' => 'Java Framework', 'logo' => 'spring-3.svg',       'progress' => 56, 'color' => 'danger'],
                ['name' => 'TypeScript',  'desc' => 'Better Tooling', 'logo' => 'typescript-1.svg',   'progress' => 82, 'color' => 'success'],
            ],
        ]);
    }
}
