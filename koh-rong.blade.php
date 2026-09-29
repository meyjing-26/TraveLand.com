<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10 Things You Must Know Before Visiting Koh Rong</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        :root {
            --primary: #0284c7;
            --primary-hover: #0369a1;
            --primary-soft: #e0f2fe;
            --accent: #d97706;
            --accent-soft: #fef3c7;
            --bg-main: #f8fafc;
            --card-bg: #ffffff;
            --text-dark: #0f172a;
            --text-body: #334155;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --radius-lg: 20px;
            --radius-md: 14px;
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

        /* Reduce container top margin */
        .blog-detail-container {
            max-width: 900px;
            margin: 20px auto 60px auto; /* Reduced top margin from 40px to 20px */
            padding: 0 24px;
        }

        /* Align back button and category tag side-by-side */
        .blog-header-top {
            display: flex;
            align-items: center;
            justify-content: space-between; /* Pushes button left, badge right */
            margin-bottom: 16px;
        }
        .back-link {
            margin-bottom: 0; /* Removes bottom margin since it's aligned horizontally */
        }

        .blog-category {
            margin-bottom: 0;
        }

        /* Tighten title spacing */
        .blog-detail-header h1 {
            font-size: 2.5rem;
            margin: 0 0 12px 0; /* Tightened margin under heading */
        }

        /* Streamline meta bar */
        .blog-meta-bar {
            padding-bottom: 16px;
            margin-bottom: 24px; /* Reduced space above hero image */
        }

        .blog-detail-hero {
            margin-bottom: 30px;
        }
        /* Top Header Navigation & Meta */
        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--primary);
            background-color: #ffffff;
            border: 1px solid var(--border-color);
            padding: 8px 18px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 24px;
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
            color: var(--accent);
            font-size: 0.75rem;
            font-weight: 800;
            padding: 6px 14px;
            border-radius: 30px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 16px;
        }

        .blog-detail-header h1 {
            font-size: 2.75rem;
            font-weight: 800;
            color: var(--text-dark);
            line-height: 1.2;
            letter-spacing: -0.02em;
            margin: 0 0 20px 0;
        }

        .blog-meta-bar {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            color: var(--text-muted);
            font-size: 0.9rem;
            font-weight: 500;
            padding-bottom: 24px;
            border-bottom: 1px solid var(--border-color);
            margin-bottom: 32px;
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
            height: 440px;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-md);
            margin-bottom: 40px;
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
            padding: 20px 24px;
            background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(15, 23, 42, 0.85) 100%);
            color: #ffffff;
            font-size: 0.9rem;
            font-weight: 500;
            backdrop-filter: blur(2px);
        }

        /* Lead Intro Box */
        .intro-lead {
            font-size: 1.2rem;
            line-height: 1.8;
            color: var(--text-dark);
            font-weight: 500;
            background-color: #ffffff;
            padding: 28px 32px;
            border-radius: var(--radius-md);
            border: 1px solid var(--border-color);
            border-left: 5px solid var(--primary);
            box-shadow: var(--shadow-sm);
            margin-bottom: 40px;
        }

        /* Tip Grid Container */
        .tip-cards-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

       /* Updated Tip Card Style */
        .tip-card {
            display: flex;
            align-items: flex-start;
            gap: 24px;
            background: #ffffff;
            padding: 28px;
            border-radius: 14px;
            box-shadow: 0 2px 8px rgba(15, 23, 42, 0.04);
            border: 1px solid #e2e8f0;
            
            /* Teal bottom border accent */
            border-bottom: 5px #b5c6e8 solid;
            overflow: hidden; 
            
            transition: all 0.25s ease;
        }
        .tip-card:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-md);
            border-color: #cbd5e1;
        }

        .tip-number {
            font-size: 1.25rem;
            font-weight: 800;
            color: var(--primary);
            background: var(--primary-soft);
            width: 52px;
            height: 52px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .tip-body h3 {
            margin: 0 0 8px 0;
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        .tip-body p {
            margin: 0;
            color: var(--text-body);
            font-size: 0.98rem;
            line-height: 1.65;
            border-line: 1.5;
        }

        /* Pro Tip Highlight Callout */
        .pro-tip-box {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
            border: 1px solid #bbf7d0;
            padding: 28px;
            border-radius: var(--radius-md);
            margin: 36px 0;
            box-shadow: var(--shadow-sm);
        }

        .pro-tip-icon {
            font-size: 1.5rem;
            color: #ffffff;
            background-color: #16a34a;
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            box-shadow: 0 4px 12px rgba(22, 163, 74, 0.25);
        }

        .pro-tip-box h4 {
            margin: 0 0 6px 0;
            color: #14532d;
            font-size: 1.1rem;
            font-weight: 700;
        }

        .pro-tip-box p {
            margin: 0;
            color: #166534;
            font-size: 0.98rem;
            line-height: 1.6;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .blog-detail-header h1 {
                font-size: 2rem;
            }

            .blog-detail-hero {
                height: 280px;
            }

            .tip-card {
                flex-direction: column;
                gap: 16px;
                padding: 20px;
            }

            .pro-tip-box {
                flex-direction: column;
                gap: 16px;
                padding: 20px;
            }
        }
    </style>
</head>
<body class="blog-body">

    <article class="blog-detail-container">
        <!-- Header -->
        <header class="blog-detail-header">
            <div class="blog-header-top">
                <a href="{{ url('/') }}" class="back-link">
                    <i class="fa-solid fa-arrow-left"></i> Back to Home
                </a>
                <span class="blog-category">
                    <i class="fa-solid fa-compass"></i> Travel Guide
                </span>
            </div>

            <h1>10 Things You Must Know Before Visiting Koh Rong</h1>
            
            <div class="blog-meta-bar">
                <span><i class="fa-regular fa-calendar"></i> September 24, 2026</span>
                <span><i class="fa-regular fa-clock"></i> 5 min read</span>
                <span><i class="fa-solid fa-location-dot"></i> Koh Rong, Cambodia</span>
            </div>
        </header>       
<!-- Horizontal Widescreen Hero Image Frame -->
        <div class="blog-detail-hero">
            <img src="{{ asset('image/Kohrong.tour.webp') }}" alt="Koh Rong Beach">
            <div class="hero-caption">White sand beaches and crystal waters on Koh Rong Island</div>
        </div>

        <!-- Content Body -->
        <div class="blog-detail-content">
            <p class="intro-lead">
                Koh Rong is one of Cambodia's most picturesque islands, famous for its white-sand beaches, turquoise waters, and vibrant island atmosphere. Here is everything you need to know to make your trip effortless.
            </p>

            <div class="tip-cards-grid">

                <div class="tip-card">
                    <div class="tip-number">01</div>
                    <div class="tip-body">
                        <h3>Book Your Ferry in Advance</h3>
                        <p>Speed ferries run daily from Sihanoukville Autonomous Port to main piers like Koh Touch and Long Set Beach. Tickets sell out fast during weekends.</p>
                    </div>
                </div>

                <div class="tip-card">
                    <div class="tip-number">02</div>
                    <div class="tip-body">
                        <h3>Bring Enough Cash</h3>
                        <p>ATMs can be unreliable or run out of cash. Bring sufficient US Dollars or Cambodian Riel for food, transport, and stays.</p>
                    </div>
                </div>

                <div class="tip-card">
                    <div class="tip-number">03</div>
                    <div class="tip-body">
                        <h3>Choose the Right Beach for Your Vibe</h3>
                        <p>Koh Touch is energetic with beach bars, while Long Set (4K) Beach and Sok San Beach offer peaceful, secluded tropical relaxation.</p>
                    </div>
                </div>

                <div class="tip-card">
                    <div class="tip-number">04</div>
                    <div class="tip-body">
                        <h3>Pack Mosquito Repellent & Sunscreen</h3>
                        <p>Sandflies and mosquitoes are active near the water during dusk and dawn. Carry eco-friendly reef-safe sunscreen and insect repellent.</p>
                    </div>
                </div>

            </div>

            <!-- Pro Tip Callout Box -->
            <div class="pro-tip-box">
                <div class="pro-tip-icon"><i class="fa-solid fa-lightbulb"></i></div>
                <div>
                    <h4>Pro Traveler Tip</h4>
                    <p>Experience the bioluminescent plankton! Book a short evening boat trip on a moonless night to swim in glowing turquoise ocean waves.</p>
                </div>
            </div>

            <div class="tip-cards-grid">

                <div class="tip-card">
                    <div class="tip-number">05</div>
                    <div class="tip-body">
                        <h3>Spotty Mobile Data & Wi-Fi</h3>
                        <p>Cell coverage works around major piers, but internet speeds drop during evening peak hours or rainstorms.</p>
                    </div>
                </div>

                <div class="tip-card">
                    <div class="tip-number">06</div>
                    <div class="tip-body">
                        <h3>Respect Local Village Dress Codes</h3>
                        <p>While swimwear is fine on the beach, cover your shoulders and knees when walking through local fishing villages.</p>
                    </div>
                </div>

                <div class="tip-card">
                    <div class="tip-number">07</div>
                    <div class="tip-body">
                        <h3>Stay Hydrated with Bottled or Filtered Water</h3>
                        <p>Tap water on the island is not drinkable. Most resorts and local shops offer bottled water or refill stations to reduce plastic waste.</p>
                    </div>
                </div>

                <div class="tip-card">
                    <div class="tip-number">08</div>
                    <div class="tip-body">
                        <h3>Rent a Scooter or Taxi Boat to Explore</h3>
                        <p>Paved roads connect several main beaches across the island. Renting a scooter or hiring a local taxi boat is the best way to beach-hop efficiently.</p>
                    </div>
                </div>

                <div class="tip-card">
                    <div class="tip-number">09</div>
                    <div class="tip-body">
                        <h3>Beware of Sandflies on Quiet Beaches</h3>
                        <p>Sandfly bites can itch for days. Avoid lying directly on dry sand without a towel or mat, and apply coconut oil or repellent before sunbathing.</p>
                    </div>
                </div>

                <div class="tip-card">
                    <div class="tip-number">10</div>
                    <div class="tip-body">
                        <h3>Respect the Island Environment</h3>
                        <p>Help preserve Koh Rong’s natural beauty by disposing of trash responsibly, avoiding single-use plastics, and keeping off fragile coral reefs while snorkeling.</p>
                    </div>
                </div>

            </div>

        </div>
    </article>

</body>
</html>