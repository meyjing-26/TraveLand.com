<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exploring the Sacred Waterfalls of Phnom Kulen</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --card-accent: #16a34a; /* Forest / Emerald Green */
            --primary: #0284c7;
            --primary-soft: #e0f2fe;
            --accent-tag: #15803d;
            --accent-soft: #dcfce7;
            --bg-main: #f8fafc;
            --card-bg: #ffffff;
            --text-dark: #0f172a;
            --text-body: #334155;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --radius-lg: 16px;
            --radius-md: 12px;
            --shadow-sm: 0 2px 8px rgba(15, 23, 42, 0.04);
            --shadow-md: 0 10px 25px -5px rgba(15, 23, 42, 0.08);
            --transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        }

        * {
            box-sizing: border-box;
        }

        body.blog-body {
            background-color: var(--bg-main);
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
            color: var(--text-body);
            margin: 0;
            padding: 0;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        .blog-detail-container {
            max-width: 900px;
            margin: 20px auto 60px auto;
            padding: 0 24px;
        }

        /* Top Header Navigation Row */
        .blog-header-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 16px;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--primary);
            background-color: #ffffff;
            border: 1px solid var(--border-color);
            padding: 8px 16px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.88rem;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
        }

        .back-link:hover {
            transform: translateX(-4px);
            background-color: var(--primary-soft);
            border-color: var(--primary-soft);
        }

        .blog-category {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: var(--accent-soft);
            color: var(--accent-tag);
            font-size: 0.75rem;
            font-weight: 800;
            padding: 6px 14px;
            border-radius: 30px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .blog-detail-header h1 {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--text-dark);
            line-height: 1.25;
            letter-spacing: -0.02em;
            margin: 0 0 12px 0;
        }

        .blog-meta-bar {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            color: var(--text-muted);
            font-size: 0.88rem;
            font-weight: 500;
            padding-bottom: 16px;
            border-bottom: 1px solid var(--border-color);
            margin-bottom: 24px;
        }

        .blog-meta-bar span {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* Widescreen Hero Banner */
        .blog-detail-hero {
            position: relative;
            width: 100%;
            height: 420px;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-md);
            margin-bottom: 30px;
            background-color: #cbd5e1;
        }

        .blog-detail-hero img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            display: block;
        }

        .hero-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 16px 20px;
            background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(15, 23, 42, 0.85) 100%);
            color: #ffffff;
            font-size: 0.88rem;
            font-weight: 500;
        }

        /* Lead Intro Box */
        .intro-lead {
            font-size: 1.15rem;
            line-height: 1.8;
            color: var(--text-dark);
            font-weight: 500;
            background-color: #ffffff;
            padding: 24px 28px;
            border-radius: var(--radius-md);
            border: 1px solid var(--border-color);
            border-left: 5px solid var(--primary);
            box-shadow: var(--shadow-sm);
            margin-bottom: 32px;
        }

        /* Card Layout */
        .tip-cards-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .tip-card {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            background: var(--card-bg);
            padding: 24px;
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-sm);
            border: 1px solid var(--border-color);
            border-bottom: 5px solid var(--card-accent);
            overflow: hidden;
            transition: var(--transition);
        }

        .tip-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-md);
            border-color: #cbd5e1;
            border-bottom-color: var(--card-accent);
        }

        .tip-number {
            font-size: 1.2rem;
            font-weight: 800;
            color: var(--primary);
            background: var(--primary-soft);
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .tip-body h3 {
            margin: 0 0 6px 0;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        .tip-body p {
            margin: 0;
            color: var(--text-body);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Pro Tip Callout Box */
        .pro-tip-box {
            display: flex;
            align-items: flex-start;
            gap: 18px;
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
            border: 1px solid #bbf7d0;
            padding: 24px;
            border-radius: var(--radius-md);
            margin: 32px 0;
            box-shadow: var(--shadow-sm);
        }

        .pro-tip-icon {
            font-size: 1.4rem;
            color: #ffffff;
            background-color: #16a34a;
            width: 44px;
            height: 44px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .pro-tip-box h4 {
            margin: 0 0 4px 0;
            color: #14532d;
            font-size: 1.05rem;
            font-weight: 700;
        }

        .pro-tip-box p {
            margin: 0;
            color: #166534;
            font-size: 0.95rem;
        }

        @media (max-width: 768px) {
            .blog-detail-header h1 {
                font-size: 1.85rem;
            }

            .blog-detail-hero {
                height: 260px;
            }

            .tip-card {
                flex-direction: column;
                gap: 14px;
                padding: 20px;
            }
        }
    </style>
</head>
<body class="blog-body">

    <article class="blog-detail-container">
        <!-- Compact Header Section -->
        <header class="blog-detail-header">
            <div class="blog-header-top">
                <a href="{{ url('/') }}" class="back-link">
                    <i class="fa-solid fa-arrow-left"></i> Back to Home
                </a>
                <span class="blog-category">
                    <i class="fa-solid fa-tree"></i> Nature & Adventure
                </span>
            </div>

            <h1>Exploring the Sacred Waterfalls of Phnom Kulen</h1>
            
            <div class="blog-meta-bar">
                <span><i class="fa-regular fa-calendar"></i> September 24, 2026</span>
                <span><i class="fa-regular fa-clock"></i> 5 min read</span>
                <span><i class="fa-solid fa-location-dot"></i> Phnom Kulen National Park, Cambodia</span>
            </div>
        </header>

        <!-- Horizontal Widescreen Hero Image -->
        <div class="blog-detail-hero">
            <img src="{{ asset('image/sacredphnomkulen.blog.jpg') }}" alt="Phnom Kulen Waterfall">
            <div class="hero-caption">The roaring lower cascade of Phnom Kulen, considered a sacred site in Cambodian history</div>
        </div>

        <!-- Content Body -->
        <div class="blog-detail-content">
            <p class="intro-lead">
                Located roughly 50km north of Siem Reap, Phnom Kulen is considered the birthplace of the ancient Khmer Empire. Beyond its lush jungles and refreshing waterfalls, this sacred mountain holds deeply revered spiritual sites.
            </p>

            <div class="tip-cards-grid">

                <div class="tip-card">
                    <div class="tip-number">01</div>
                    <div class="tip-body">
                        <h3>Swim at the Twin Tier Waterfalls</h3>
                        <p>The upper tier is a gentle 4-meter drop, while the massive lower waterfall plunges 15–20 meters into a large pool perfect for swimming.</p>
                    </div>
                </div>

                <div class="tip-card">
                    <div class="tip-number">02</div>
                    <div class="tip-body">
                        <h3>Witness Kbal Spean (River of a Thousand Lingas)</h3>
                        <p>Walk along the riverbed where hundreds of intricate carvings are etched into the sandstone rocks, sanctifying the water as it flows down to Siem Reap.</p>
                    </div>
                </div>

                <div class="tip-card">
                    <div class="tip-number">03</div>
                    <div class="tip-body">
                        <h3>Visit Preah Ang Thom Reclining Buddha</h3>
                        <p>Climb the grand stairway to Wat Preah Ang Thom to view Cambodia's largest 16th-century Reclining Buddha carved directly into a massive natural boulder.</p>
                    </div>
                </div>

            </div>

            <!-- Pro Tip Callout Box -->
            <div class="pro-tip-box">
                <div class="pro-tip-icon"><i class="fa-solid fa-lightbulb"></i></div>
                <div>
                    <h4>Important Visitor Tip</h4>
                    <p>Vehicles can only drive <strong>UP</strong> the mountain before 11:00 AM and <strong>DOWN</strong> after 12:00 PM due to the narrow one-way mountain road. Plan an early morning departure!</p>
                </div>
            </div>

            <div class="tip-cards-grid">

                <div class="tip-card">
                    <div class="tip-number">04</div>
                    <div class="tip-body">
                        <h3>Bring Proper Footwear and Modest Clothes</h3>
                        <p>Pack comfortable trekking sandals or shoes for walking over wet rocks. Bring a cover-up for visiting the sacred pagoda temples on the mountain peak.</p>
                    </div>
                </div>

                <div class="tip-card">
                    <div class="tip-number">05</div>
                    <div class="tip-body">
                        <h3>Rent a Picnic Hut by the River</h3>
                        <p>Join the local tradition by renting a wooden shaded hut along the riverbank to relax, enjoy fresh grilled chicken, and sip fresh coconut water.</p>
                    </div>
                </div>

            </div>

        </div>
    </article>

</body>
</html>