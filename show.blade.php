<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $destination['province'] }} - TraveLand</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        /* Layout Constraints */
        .content-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        .grid-layout {
            display: grid;
            grid-template-columns: 1fr 360px; /* Gives text 2/3 width and sidebar fixed 360px */
            gap: 2rem;
            align-items: start;
        }

        /* Sidebar Styles */
        .sidebar {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        /* Responsive Fix for Mobile */
        @media (max-width: 768px) {
            .grid-layout {
                grid-template-columns: 1fr;
            }
        }

        :root {
            --primary-yellow: #ffc107;
            --primary-yellow-hover: #e0a800;
            --text-dark: #1e293b;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --bg-light: #ffffff;
            --teal: #008080;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
        }

        body {
            background-color: #f8fafc;
            color: var(--text-dark);
            width: 100vw;
            overflow-x: hidden;
            min-height: 100vh;
        }

        /* HERO IMAGE SECTION */
        .hero-section {
            position: relative;
            width: 100vw;
            height: 52vh;
            min-height: 380px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* HERO TOP ROW (BACK BUTTON) */
        .hero-top {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            padding: 32px 5% 0;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #ffffff;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            background: rgba(15, 23, 42, 0.6);
            padding: 10px 20px;
            border-radius: 30px;
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.2s ease;
        }

        .back-btn:hover {
            background: var(--primary-yellow);
            color: #000000;
            border-color: var(--primary-yellow);
        }

        .hero-bottom {
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            padding: 0 5% 32px;
        }

        .hero-title-wrapper {
            max-width: calc(66.66% - 24px);
        }

        .location-tag {
            display: inline-block;
            background: var(--primary-yellow);
            color: #000000;
            font-weight: 700;
            font-size: 0.75rem;
            padding: 4px 12px;
            border-radius: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 10px;
        }

        .hero-title {
            color: #ffffff;
            font-size: 2.8rem;
            font-weight: 800;
            letter-spacing: -0.5px;
            line-height: 1.15;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        /* MAIN CONTENT LAYOUT */
        .content-container {
            max-width: 1200px;
            margin: 40px auto 60px;
            padding: 0 5%;
        }

        .grid-layout {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 48px;
            align-items: start;
        }

        .main-content {
            padding: 0;
        }

        .section-heading {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 16px;
        }

        .description-text {
            font-size: 1.08rem;
            line-height: 1.85;
            color: #475569;
            margin-bottom: 20px;
        }

        .spots-box {
            background: #fffdf0;
            border-left: 5px solid var(--primary-yellow);
            padding: 20px 24px;
            border-radius: 12px;
            margin-top: 32px;
            margin-bottom: 32px;
        }

        .spots-box h4 {
            font-size: 1.05rem;
            color: var(--text-dark);
            margin-bottom: 6px;
        }

        .spots-box p {
            color: var(--teal);
            font-weight: 600;
            font-size: 1.05rem;
        }

        /* FAQ ACCORDION STYLING */
        .faq-section {
            margin-top: 20px;
        }

        .faq-item {
            border-bottom: 1px solid #e2e8f0;
        }

        .faq-question {
            width: 100%;
            background: none;
            border: none;
            outline: none;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-dark);
            text-align: left;
            cursor: pointer;
            transition: color 0.2s ease;
        }

        .faq-question:hover {
            color: var(--teal);
        }

        .faq-arrow {
            width: 28px;
            height: 28px;
            background: #f1f5f9;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.7rem;
            color: #64748b;
            transition: transform 0.3s ease, background 0.2s ease;
            flex-shrink: 0;
        }

        .faq-item.active .faq-arrow {
            transform: rotate(180deg);
            background: var(--primary-yellow);
            color: #000000;
        }

        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out, padding 0.3s ease-out;
        }

        .faq-answer p {
            font-size: 0.95rem;
            line-height: 1.6;
            color: #475569;
            padding-bottom: 12px;
        }

        /* RIGHT SIDEBAR COLUMN */
        .sidebar-column {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .sidebar-card {
            background: #ffffff;
            border-radius: 20px;
            padding: 32px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
            width: 100%;
        }

        .info-row {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 24px;
        }

        .info-icon {
            width: 44px;
            height: 44px;
            background: #f1f5f9;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .info-text h5 {
            font-size: 0.85rem;
            color: var(--text-muted);
            text-transform: uppercase;
        }

        .info-text p {
            font-size: 1rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        .book-now-btn {
            width: 100%;
            padding: 16px;
            background-color: var(--primary-yellow);
            color: #000000;
            border: none;
            border-radius: 10px;
            font-size: 1.05rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .book-now-btn:hover {
            background-color: var(--primary-yellow-hover);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 193, 7, 0.3);
        }

        /* STYLED EXPLORE GALLERY CARD */
        .slider-card {
            background: #ffffff;
            border-radius: 24px;
            padding: 28px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
            width: 100%;
        }

        .slider-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .slider-header h3 {
            font-size: 1.35rem;
            font-weight: 800;
            color: #000000;
        }

        .slider-nav {
            display: flex;
            gap: 10px;
        }

        .nav-btn {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            border: 2px solid #000000;
            background: #ffffff;
            color: #000000;
            font-size: 1.2rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .nav-btn:hover {
            background: #000000;
            color: #ffffff;
        }

        .slider-container {
            position: relative;
            width: 100%;
            height: 240px;
            border-radius: 16px;
            overflow: hidden;
            background-color: #cbd5e1;
        }

        .slide-img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0;
            transition: opacity 0.4s ease-in-out;
        }

        .slide-img.active {
            opacity: 1;
        }

        @media (max-width: 900px) {
            .hero-title-wrapper {
                max-width: 100%;
            }

            .grid-layout {
                grid-template-columns: 1fr;
            }

            .hero-title {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>

<!-- Check Active System Language -->
@php 
    $lang = app()->getLocale(); 
@endphp

<!-- HERO IMAGE WITH INTEGRATED TOP BAR -->
<header class="hero-section" style="position: relative; height: 350px; display: flex; flex-direction: column; justify-content: flex-end; padding: 2rem; box-sizing: border-box; background: linear-gradient(to top, rgba(0, 0, 0, 0.45) 0%, rgba(0, 0, 0, 0.05) 50%, rgba(0, 0, 0, 0.1) 100%), url('{{ asset($destination['image']) }}') center/cover no-repeat;">    
    <a href="{{ url('/') }}" class="back-btn" data-key="back_btn" style="position: absolute; top: 20px; left: 100px; display: inline-block; width: fit-content; text-decoration: none;">
        {{ $lang === 'km' ? '← ត្រឡប់ទៅទំព័រដើម' : '← Back to Home' }}
    </a>

    <div class="hero-bottom">
        <div class="hero-title-wrapper">
            <span class="location-tag" data-key="category_tag">{{ $lang === 'km' ? 'តំបន់ទេសចរណ៍កម្ពុជា' : 'Cambodia Destination' }}</span>
            <h1 class="hero-title">📍 {{ $lang === 'km' ? ($destination['kh_province'] ?? $destination['province']) : $destination['province'] }}</h1>
        </div>
    </div>
</header>

<!-- CONTENT BODY -->
<main class="content-container">
    <div class="grid-layout">
        <!-- MAIN CONTENT -->
        <div class="main-content">
            <h3 class="section-heading" data-key="overview_title">{{ $lang === 'km' ? 'ទិដ្ឋភាពទូទៅ និង បទពិសោធន៍' : 'Overview & Experience' }}</h3>

            <!-- SMART PARAGRAPH SWITCHER WITH BUILT-IN FALLBACKS -->
            @if($lang === 'km')
                @if(isset($destination['kh_paragraphs']) && is_array($destination['kh_paragraphs']))
                    @foreach($destination['kh_paragraphs'] as $paragraph)
                        <p class="description-text">{{ $paragraph }}</p>
                    @endforeach
                @elseif(isset($destination['kh_description']))
                    <p class="description-text">{{ $destination['kh_description'] }}</p>
                @else
                    <!-- Hardcoded fallback specific to Siem Reap if database strings aren't matching yet -->
                    <p class="description-text">ឈានជើងចូលទៅក្នុងពិភពនៃប្រវត្តិសាស្ត្រដ៏រស់រវើក ដែលកំពូលប្រាសាទថ្មបុរាណលេចចេញពីលើព្រៃក្រាស់។ ខេត្តសៀមរាបគឺជាក្លោងទ្វារដ៏អស្ចារ្យបំផុតទៅកាន់អាណាចក្រខ្មែរដ៏ល្បីល្បាញ ដោយផ្តល់ជូននូវទិដ្ឋភាពថ្ងៃរះដ៏ស្រស់ស្អាតគួរឱ្យកោតសរសើរនៅលើកំពូលប្រាសាទអង្គរវត្ត និងប្រាសាទបុរាណដែលគ្របដណ្តប់ដោយស្លែព័ទ្ធជុំវិញដោយឫសឈើធំៗ។</p>
                    <p class="description-text">ក្រៅពីប្រាសាទបុរាណដ៏ពិសិដ្ឋទាំងនេះ សូមជ្រមុជខ្លួនអ្នកនៅក្នុងទឹកធ្លាក់ភ្នំដ៏ត្រជាក់ស្រស់ស្រាយនៅឧទ្យានជាតិភ្នំគូលែន និងស្វែងរកភូមិបណ្តែតទឹកដ៏រស់រវើកតាមបណ្តោយបឹងទន្លេសាប។ ទេសភាពជនបទជុំវិញបង្ហាញពីវប្បធម៌ជនបទពិតប្រាកដ និងសម្រស់ធម្មជាតិនៅគ្រប់ជ្រុងជ្រោយ។</p>
                    <p class="description-text">នៅពេលល្ងាច ទីប្រជុំជនកាន់តែមានភាពរស់រវើកជាមួយនឹងផ្សាររាត្រីសិប្បកម្មចម្រុះពណ៌ អាហារដ្ឋានខ្មែរលំដាប់ពិភពលោក និងទិដ្ឋភាពសង្គមក្នុងតំបន់ដ៏រស់រវើក។ ខេត្តសៀមរាបសន្យាថានឹងផ្តល់នូវដំណើរកម្សាន្តដ៏គួរឱ្យរំភើប និងមិនអាចបំភ្លេចបាន ដែលនឹងស្ថិតនៅក្នុងបេះដូងរបស់អ្នកជារៀងរហូត។</p>
                @endif
            @else
                @if(isset($destination['paragraphs']) && is_array($destination['paragraphs']))
                    @foreach($destination['paragraphs'] as $paragraph)
                        <p class="description-text">{{ $paragraph }}</p>
                    @endforeach
                @elseGood
                    <p class="description-text">{{ $destination['description'] ?? '' }}</p>
                @endif
            @endif

            <div class="spots-box">
                <h4 data-key="highlights_title">{{ $lang === 'km' ? 'ទីតាំងសំខាន់ៗមិនគួររំលង' : 'Must-Visit Highlights' }}</h4>
                <p>
                    ✨ 
                    @if($lang === 'km')
                        {{ $destination['kh_spots'] ?? 'ប្រាសាទអង្គរវត្ត, ភ្នំគូលែន, បឹងទន្លេសាប' }}
                    @else
                        {{ $destination['spots'] ?? 'Angkor Wat, Phnom Kulen, Tonle Sap Lake' }}
                    @endif
                </p>
            </div>

            <!-- PEOPLE ALSO ASK ACCORDION SECTION -->
            <div class="faq-section">
                <h3 class="section-heading" data-key="faq_title" style="margin-bottom: 8px;">{{ $lang === 'km' ? 'សំណួរដែលគេច្រើនសួរ' : 'People also ask' }}</h3>

                <!-- FAQ Item 1 -->
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>{{ $lang === 'km' ? 'តើវាមានសុវត្ថិភាពទេក្នុងការទៅកម្សាន្តនៅ '.($destination['kh_province'] ?? $destination['province']).' នៅពេលនេះ?' : 'Is it safe to go to '.$destination['province'].' now?' }}</span>
                        <span class="faq-arrow">▼</span>
                    </button>
                    <div class="faq-answer">
                        <p>
                            {{ $lang === 'km' 
                                ? 'បាទ/ចាស ជាទូទៅខេត្ត '.($destination['kh_province'] ?? $destination['province']).' គឺមានសុវត្ថិភាពខ្លាំងណាស់សម្រាប់ភ្ញៀវទេសចរ។ វាគឺជាគោលដៅទេសចរណ៍កំពូលមួយរបស់ប្រទេសកម្ពុជា ជាមួយនឹងបរិយាកាសស្វាគមន៍ ប្រជាជនក្នុងតំបន់មានភាពរាក់ទាក់ និងមានវត្តមានប៉ូលីសទេសចរណ៍ការពារយ៉ាងត្រឹមត្រូវ។'
                                : 'Yes, '.$destination['province'].' is generally very safe for travelers. It is one of Cambodia\'s top tourist destinations with a welcoming atmosphere, friendly locals, and a well-established tourism police presence.' }}
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>{{ $lang === 'km' ? 'តើលោកស្រី Angelina Jolie ស្នាក់នៅកន្លែងណាខ្លះនៅប្រទេសកម្ពុជា?' : 'Where did Angelina Jolie stay in Cambodia?' }}</span>
                        <span class="faq-arrow">▼</span>
                    </button>
                    <div class="faq-answer">
                        <p>
                            {{ $lang === 'km' 
                                ? 'ក្នុងអំឡុងពេលថតខ្សែភាពយន្តរឿង Tomb Raider លោកស្រី Angelina Jolie បានស្នាក់នៅសណ្ឋាគារលំដាប់ប្រវត្តិសាស្ត្រ Raffles Grand Hotel d\'Angkor ក្នុងខេត្តសៀមរាប។ គាត់ក៏តែងតែទៅលំហែកាយនៅ Elephant Bar ដែលស្ថិតនៅក្នុងសណ្ឋាគារនោះផងដែរ។'
                                : 'During the filming of Tomb Raider, Angelina Jolie famously stayed at the iconic Raffles Grand Hotel d\'Angkor in Siem Reap. She also frequented the Elephant Bar located inside the hotel.' }}
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>{{ $lang === 'km' ? 'តើត្រូវប្រុងប្រយ័ត្នលើអ្វីខ្លះពេលទៅកម្សាន្តនៅ '.($destination['kh_province'] ?? $destination['province']).'?' : 'What to be careful of in '.$destination['province'].'?' }}</span>
                        <span class="faq-arrow">▼</span>
                    </button>
                    <div class="faq-answer">
                        <p>
                            {{ $lang === 'km' 
                                ? 'សូមប្រយ័ត្នចំពោះការឡើងកំដៅខ្លាំង និងត្រូវញ៉ាំទឹកឱ្យបានច្រើន។ ប្រុងប្រយ័ត្នចំពោះការឆក់កាបូបពេលជិះរុំណាំង ឬកង់បីក្នុងកន្លែងអ៊ូអរ ស្លៀកពាក់ឱ្យបានសមរម្យនៅតាមប្រាសាទសក្ការៈ (គ្របស្មា និងជង្គង់) និងត្រូវព្រមព្រៀងលើតម្លៃសេវាធ្វើដំណើរមុនពេលចេញដំណើរ។'
                                : 'Be mindful of heat exhaustion and stay hydrated. Watch out for basic bag-snatching in crowded tuk-tuks, dress respectfully at sacred temples (covered shoulders and knees), and agree on tuk-tuk fares before starting your trip.' }}
                        </p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)">
                        <span>{{ $lang === 'km' ? 'តើខេត្ត '.($destination['kh_province'] ?? $destination['province']).' ពិតជាគួរឱ្យទៅកម្សាន្តដែរឬទេ?' : 'Is '.$destination['province'].' worth visiting?' }}</span>
                        <span class="faq-arrow">▼</span>
                    </button>
                    <div class="faq-answer">
                        <p>
                            {{ $lang === 'km' 
                                ? 'ពិតជាគួរឱ្យទៅកម្សាន្តខ្លាំងណាស់។ ទីនេះជាទីតាំងនៃអច្ឆរិយវត្ថុបុរាណល្បីៗលើពិភពលោកដូចជា អង្គរវត្ត អាហារក្នុងស្រុកដ៏ឈ្ងុយឆ្ងាញ់ ផ្សាររាត្រីដ៏រស់រវើក និងវប្បធម៌ខ្មែរដ៏សម្បូរបែប ដែលធ្វើឱ្យវាក្លាយជាគោលដៅមិនអាចរំលងបានសម្រាប់អ្នកដំណើរជុំវិញពិភពលោក។'
                                : 'Absolutely. It is home to world-renowned ancient wonders like Angkor Wat, incredible local food, vibrant night markets, and rich Cambodian culture, making it a bucket-list destination for global travelers.' }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT SIDEBAR COLUMN -->
        <div class="sidebar-column">
            <!-- TRIP INFORMATION BOX -->
            <div class="sidebar-card">
                <h3 class="section-heading" style="margin-bottom: 24px;">
                    {{ $lang === 'km' ? 'ព័ត៌មានអំពីដំណើរកម្សាន្ត' : 'Trip Information' }}
                </h3>
                
                <!-- Best Time info block -->
                <div class="info-row">
                    <div class="info-icon">☀️</div>
                    <div class="info-text">
                        <h5>{{ $lang === 'km' ? 'ពេលវេលាល្អបំផុតសម្រាប់ទស្សនា' : 'Best Time to Visit' }}</h5>
                        <p>
                            @if($lang === 'km')
                                {{ $destination['kh_best_time'] ?? 'ខែវិច្ឆិកា – ខែកុម្ភៈ' }}
                            @else
                                {{ $destination['best_time'] ?? 'November – February' }}
                            @endif
                        </p>
                    </div>
                </div>

                <!-- Travel vibe info block -->
                <div class="info-row">
                    <div class="info-icon">🧭</div>
                    <div class="info-text">
                        <h5>{{ $lang === 'km' ? 'បរិយាកាសនៃការធ្វើដំណើរ' : 'Travel Vibe' }}</h5>
                        <p>
                            @if($lang === 'km')
                                {{ $destination['kh_vibe'] ?? 'បែបវប្បធម៌ និងធម្មជាតិ' }}
                            @else
                                {{ $destination['vibe'] ?? 'Cultural & Scenic' }}
                            @endif
                        </p>
                    </div>
                </div>

<button class="book-now-btn" onclick="alert('{{ $lang === 'km' ? 'មុខងារកក់ដំណើរកម្សាន្តនឹងមកដល់ក្នុងពេលឆាប់ៗនេះ!' : 'Booking feature coming soon!' }}')">
    {{ $lang === 'km' ? 'រៀបចំគម្រោងធ្វើដំណើរទីនេះ' : 'Plan a Trip Here' }}
</button>
            </div>

            <!-- IMAGE SLIDER BOX (EXPLORE GALLERY) -->
            <div class="slider-card">
                <div class="slider-header">
                    <h3>{{ $lang === 'km' ? 'រូបភាពវិចិត្រសាល' : 'Explore Gallery' }}</h3>
                    <div class="slider-nav">
                        <button class="nav-btn" onclick="moveSlide(-1)">‹</button>
                        <button class="nav-btn" onclick="moveSlide(1)">›</button>
                    </div>
                </div>
                
                <div class="slider-container">
                    @if(isset($destination['images']) && !empty($destination['images']))
                        @foreach($destination['images'] as $index => $image)
                            <img src="{{ asset($image) }}" alt="Gallery Image {{ $index + 1 }}" class="slide-img {{ $loop->first ? 'active' : '' }}">
                        @endforeach
                    @else
                        <!-- Direct default local images fallback if array is empty -->
                        <img src="{{ asset('image/Siemreap.tour.jpg') }}" alt="Photo 1" class="slide-img active">
                        <img src="{{ asset('image/Angkorwat.blog.jpg') }}" alt="Photo 2" class="slide-img">
                        <img src="{{ asset('image/sacredphnomkulen.blog.jpg') }}" alt="Photo 3" class="slide-img">
                    @endif
                </div>
            </div>
        </div> <!-- Closes sidebar column -->
    </div> <!-- Closes grid layout -->
</main> <!-- Closes content container wrapper cleanly -->
    <!-- SCRIPTS -->
    <script>
        // Read stored language selection
        const currentLang = localStorage.getItem('selectedLanguage') || 'en';

        // Translations
        const detailTranslations = {
            en: {
                back_btn: "← Back to Home",
                category_tag: "CAMBODIA DESTINATION",
                overview_title: "Overview & Experience",
                highlights_title: "Must-Visit Highlights",
                faq_title: "People also ask",
                trip_info: "Trip Information",
                best_time_label: "BEST TIME TO VISIT",
                travel_vibe_label: "TRAVEL VIBE",
                plan_btn: "Plan a Trip Here",
                gallery_title: "Explore Gallery"
            },
            kh: {
                back_btn: "← ត្រឡប់ទៅទំព័រដើម",
                category_tag: "តំបន់ទេសចរណ៍កម្ពុជា",
                overview_title: "ទិដ្ឋភាពទូទៅ និង បទពិសោធន៍",
                highlights_title: "ទីតាំងសំខាន់ៗមិនគួររំលង",
                faq_title: "សំណួរដែលសួរញឹកញាប់",
                trip_info: "ព័ត៌មានអំពីដំណើរទេសចរណ៍",
                best_time_label: "ពេលវេលាល្អបំផុតក្នុងការទស្សនា",
                travel_vibe_label: "បរិយាកាសទេសចរណ៍",
                plan_btn: "រៀបចំផែនការកម្សាន្តនៅទីនេះ",
                gallery_title: "រូបភាពបន្ថែម"
            }
        };

        function applyLanguage() {
            const labels = detailTranslations[currentLang];
            document.querySelectorAll('[data-key]').forEach(el => {
                const key = el.getAttribute('data-key');
                if (labels && labels[key]) {
                    el.innerText = labels[key];
                }
            });
        }

        document.addEventListener('DOMContentLoaded', applyLanguage);

        /* GALLERY SLIDER NAVIGATION */
        let currentSlide = 0;

        function moveSlide(direction) {
            const slides = document.querySelectorAll('.slide-img');
            if (slides.length <= 1) return;

            slides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + direction + slides.length) % slides.length;
            slides[currentSlide].classList.add('active');
        }

        /* FAQ ACCORDION TOGGLE */
        function toggleFaq(button) {
            const faqItem = button.parentElement;
            const faqAnswer = faqItem.querySelector('.faq-answer');

            if (faqItem.classList.contains('active')) {
                faqItem.classList.remove('active');
                faqAnswer.style.maxHeight = null;
            } else {
                document.querySelectorAll('.faq-item').forEach(item => {
                    item.classList.remove('active');
                    item.querySelector('.faq-answer').style.maxHeight = null;
                });

                faqItem.classList.add('active');
                faqAnswer.style.maxHeight = faqAnswer.scrollHeight + "px";
            }
        }
    </script>
</body>
</html>