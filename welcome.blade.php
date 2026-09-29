<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Font Awesome CDN Link -->
<link rel="stylesheet" href="https://cloudflare.com">
@php
    $currentLang = app()->getLocale();
@endphp
    <title>TraveLand - Discover Cambodia</title>
    <style>
        :root {
            --primary-yellow: #ffc107;
            --primary-yellow-hover: #e0a800;
            --teal: #008080;
            --card-bg: #ffffff;
            --text-dark: #1e293b;
            --text-muted: #71717a !important;
            --border-color: #e2e8f0;
        }

        /* RESET MARGINS & EDGE-TO-EDGE CANVAS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }

        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            overflow-x: hidden;
            background-color: #ffffff;
            color: var(--text-dark);
        }

        /* HEADER WITH BOTTOM BORDER FRAME */
        .main-header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 24px 80px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            background-color: transparent;
            border-bottom: 1px solid rgba(255, 255, 255, 0.25);
            transition: all 0.3s ease-in-out;
        }

        /* LOGO STYLING */
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 2rem;
            font-weight: 800;
            color: #ffffff;
            text-decoration: none;
            letter-spacing: -0.5px;
            transition: color 0.3s ease;
        }

        .logo-icon {
            width: 32px;
            height: 32px;
            fill: var(--primary-yellow);
        }

        /* NAVIGATION LINKS */
        .nav-links {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .nav-links a {
            text-decoration: none;
            color: #ffffff;
            font-weight: 500;
            font-size: 0.95rem;
            position: relative;
            padding-bottom: 8px; 
            transition: color 0.3s ease;
        }

        .nav-links a.active {
            color: var(--primary-yellow);
        }

        .nav-links a.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: var(--primary-yellow);
            border-radius: 2px 2px 0 0;
        }
        /* Language Dropdown Container */
        .custom-dropdown {
            position: relative;
            user-select: none;
            font-family: inherit;
        }

        /* Main Clickable Selector */
        .dropdown-selected {
            background: #ffffff;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            padding: 6px 12px;
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            color: #1e293b;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .dropdown-selected img, .dropdown-option img {
            width: 20px;
            height: 14px;
            object-fit: cover;
            border-radius: 2px;
            border: 1px solid #e2e8f0;
        }

        .dropdown-arrow {
            font-size: 0.65rem;
            color: #64748b;
            margin-left: 4px;
            transition: transform 0.2s ease;
        }

        /* Open Menu Container */
        .dropdown-menu {
            position: absolute;
            top: calc(100% + 4px);
            right: 0;
            width: 100%;
            min-width: 130px;
            background: #ffffff;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            z-index: 1001;
        }

        /* Dropdown Menu Item */
        .dropdown-option {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 8px 12px;
            font-size: 0.88rem;
            color: #1e293b;
            font-weight: 500;
            cursor: pointer;
            border-bottom: 1px solid #f1f5f9;
            transition: background 0.15s ease;
        }

        .dropdown-option:last-child {
            border-bottom: none;
        }

        .dropdown-option:hover {
            background-color: #f8fafc;
        }
        /* SCROLLED HEADER STATE */
        .main-header.scrolled {
            background-color: #ffffff;
            padding: 16px 80px;
            border-bottom: 1px solid var(--border-color);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .main-header.scrolled .logo {
            color: #000000;
        }

        .main-header.scrolled .nav-links a {
            color: #333333;
        }

        .main-header.scrolled .nav-links a.active {
            color: var(--primary-yellow);
        }

        .main-header.scrolled .lang-switcher {
            background: #f1f5f9;
            border-color: #e2e8f0;
        }

        /* HERO BANNER */
        .hero-banner {
            width: 100vw;
            height: 100vh;
            background: linear-gradient(rgba(15, 23, 42, 0.45), rgba(15, 23, 42, 0.55)),
                        url('image/AKW1.jpg') center/cover no-repeat;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 0 10%;
            box-sizing: border-box;
            /* FOR CURVED BORDER */
            border-bottom-left-radius: 130px;
            overflow: hidden;
        }

        .hero-banner h1 {
            font-size: 4rem;
            font-weight: 800;
            color: #ffffff;
            max-width: 750px;
            line-height: 1.15;
            margin-bottom: 20px;
        }

        .hero-banner h1 span {
            color: var(--primary-yellow);
        }

        .hero-banner p {
            color: #e2e8f0;
            font-size: 1.1rem;
            max-width: 580px;
            line-height: 1.6;
            margin-bottom: 32px;
        }

        .book-btn {
            background-color: var(--primary-yellow);
            color: #000000;
            padding: 14px 32px;
            font-size: 1rem;
            font-weight: 700;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .book-btn:hover {
            background-color: var(--primary-yellow-hover);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 193, 7, 0.3);
        }

        /* ABOUT US SECTION */
       .about-section {
            width: 100%;
            padding: 40px 8% 60px; /* Reduced top padding */
            background-color: #ffffff;
            display: flex;
            align-items: flex-start; /* Change from center to flex-start */
            justify-content: space-between;
            gap: 60px;
            box-sizing: border-box;
            margin-top: 40px;
        }

        .about-image-container {
            flex: 1;
            max-width: 50%;
            height: 520px;
            position: relative;
            border-top-right-radius: 140px;
            overflow: hidden;
        }

        .about-image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .about-content {
            flex: 1;
            max-width: 50%;
        }

        .about-content h4 {
            font-size: 2rem;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 20px;
            text-transform: uppercase;
            underline: 2px solid var(--primary-yellow);
        }

        .about-content h2 {
            font-size: 2.6rem;
            font-weight: 800;
            color: #1e2735;
            margin-bottom: 20px;
        }

        .about-content h2 span {
            color: var(--primary-yellow);
        }

        .about-content p {
            color: #64748b;
            font-size: 0.98rem;
            line-height: 1.7;
            margin-bottom: 28px;
        }

        .read-more-btn {
            background-color: var(--primary-yellow);
            color: #ffffff;
            padding: 12px 28px;
            font-size: 0.95rem;
            font-weight: 700;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin-bottom: 40px;
            transition: background-color 0.2s ease;
        }

        .read-more-btn:hover {
            background-color: var(--primary-yellow-hover);
        }

        /* Container holding both stat cards */
        .stats-container {
            display: flex;
            gap: 32px; /* Adjust spacing between the two boxes */
            align-items: center;
            margin-top: 24px;
        }

        /* Individual Stat Box Card */
        .stat-card {
            background-color: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 20px 28px;
            min-width: 160px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
        }

        /* Stat Number */
        .stat-card h3 {
            font-size: 2.25rem;
            font-weight: 800;
            color: #1e293b;
            margin: 0 0 4px 0;
            line-height: 1.1;
        }

        /* Stat Label Text */
        .stat-card p {
            font-size: 0.9rem;
            font-weight: 600;
            color: #64748b;
            margin: 0;
            white-space: nowrap;
        }        
         /* Initial hidden state (shifted down) */
        .stat-box {
            opacity: 0;
            transform: translateY(40px);
            transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1), 
                        opacity 0.8s ease-out;
        }

        /* Delay second card slightly for staggered animation */
        .stat-box:nth-child(2) {
            transition-delay: 0.15s;
        }

        /* Triggered state when scrolled into view */
        .stat-box.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .stat-box h3 {
            font-size: 2.2rem;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 4px;
        }

        .stat-box p {
            font-size: 0.88rem;
            color: #64748b;
            font-weight: 600;
            margin: 0;
        }

        /* MAIN CONTENT CONTAINER */
        #destinations.main-content {
            max-width: 1400px;
            margin: 0 auto;
            padding:20px 20px 80px;
            background-color: #ffffff;
        }
        #destinations h2{
            font-size: 2rem;
            font-weight: 800;
            color: #1e293b;
            margin-bottom: 20px;
            text-transform: uppercase;
            text-align: center;
            border-top:  1px solid #e2e8f0; 
            padding-top: 60px;
        }
       #destinations p {
            color: #718096;
            max-width: 900px;
            font-size: 1.1rem;
            line-height: 1.6;
            margin: 0 auto 40px; /* centers the block horizontally while keeping bottom margin */
            padding: 0 20px;
            text-align: center;
        }
        #destinations {
            text-align: center;
        }
        .destinations-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        .card-image {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 14px;
            display: block;
            background-color: #e2e8f0;
        }

        .recommendation-card {
            background: #f8fafc;
            border: 1px solid var(--border-color);
            border-left: 5px solid var(--teal);
            padding: 16px 20px;
            border-radius: 12px;
            margin-bottom: 16px;
        }

        .recommendation-card h3 {
            font-size: 1.15rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 8px;
        }

        .recommendation-card .spots-text {
            font-size: 0.85rem;
            color:var(--text-dark);
            margin-bottom: 2px;
            line-height: 1.3;
        }

        .recommendation-card .desc-text {
            font-size: 0.85rem;
            color: var(--text-dark);
            margin: 0;
            line-height: 1.35;
        }        
    /* MODAL OVERLAY & CARD */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(10, 15, 26, 0.75);
            backdrop-filter: blur(8px);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2000;
            opacity: 1;
            visibility: visible;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .modal-overlay.hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        .card {
            background: var(--card-bg);
            border-radius: 20px;
            padding: 32px 35px;
            width: 90%;
            max-width: 650px;
            max-height: 85vh;
            display: flex;
            flex-direction: column;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
        }

        .close-btn {
            position: absolute;
            top: 18px;
            right: 22px;
            background: transparent;
            border: none;
            font-size: 1.8rem;
            color: var(--text-muted);
            cursor: pointer;
        }

        .progress-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--text-muted);
        }

        .progress-track {
            width: 100%;
            height: 8px;
            background: #f1f5f9;
            border-radius: 999px;
            overflow: hidden;
            margin-bottom: 32px;
        }

        .progress-fill {
            height: 100%;
            width: 14%;
            background: linear-gradient(90deg, #ffc107, #e0a800);
            transition: width 0.4s ease;
        }

        .question-title {
            font-size: 1.4rem;
            color: var(--text-dark);
            font-weight: 700;
            margin-bottom: 24px;
        }

        .options-list {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .option-card {
            background: #f8fafc;
            border: 2px solid var(--border-color);
            padding: 18px 24px;
            border-radius: 12px;
            font-size: 1.05rem;
            font-weight: 500;
            color: var(--text-dark);
            cursor: pointer;
            text-align: left;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.2s ease;
        }

        .option-card:hover {
            border-color: var(--primary-yellow);
            background: #fffdf0;
            transform: translateY(-2px);
        }

        .explore-btn {
            width: 100%;
            padding: 16px;
            background: #f8fafc;
            border: 2px solid var(--teal);
            color: var(--teal);
            border-radius: 12px;
            font-size: 1.05rem;
            font-weight: 700;
            cursor: pointer;
            margin-top: 8px;
            transition: all 0.2s ease;
        }

        .explore-btn:hover {
            background: var(--teal);
            color: white;
        }

        #results-section {
            display: flex;
            flex-direction: column;
            max-height: 100%;
            overflow: hidden;
        }

        #recommendations-list {
            overflow-y: auto;
            padding-right: 6px;
            margin-bottom: 16px;
        }

        .hidden {
            display: none !important;
        }

        @media (max-width: 1200px) {
            .destinations-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 992px) {
            .about-section {
                flex-direction: column;
                padding: 60px 5%;
            }
            
            .about-image-container,
            .about-content {
                max-width: 100%;
                width: 100%;
            }
        }

        @media (max-width: 600px) {
            .destinations-grid {
                grid-template-columns: 1fr;
            }
            .main-header {
                padding: 16px 20px;
            }
            .nav-links {
                gap: 14px;
            }
        }
        body {
        font-family: 'Kantumruy Pro', sans-serif;
    }

/* Custom CSS Grid Rules */
.card-grid {
    display: grid;
    grid-template-columns: repeat(1, minmax(0, 1fr));
    gap: 1.5rem;
    align-items: start; /* FIXED: Changed from 'stretch' to let cards size to content */
}

@media (min-width: 640px) {
    .card-grid {
        grid-template-columns: repeat(2, minmax(0, 1fr));
    }
}

@media (min-width: 768px) {
    .card-grid {
        grid-template-columns: repeat(4, minmax(0, 1fr));
    }
}

/* Custom Card Style */
.destination-card {
    background-color: #ffffff;
    border-radius: 1rem;
    padding: 1rem;
    height: auto; /* FIXED: Changed from 100% so cards aren't forced long */
    display: flex;
    flex-direction: column;
    justify-content: flex-start; /* FIXED: Prevents content from stretching to top/bottom */
    border: 1px solid #f1f5f9;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    text-align: left; /* FIXED: Forces left alignment */
}

.destination-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-radius: 0.75rem;
    margin-bottom: 0.75rem;
}

/* Ensure grid items align equal height across rows */
.destinations-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    align-items: start; /* FIXED: Prevents row stretching */
}

/* Force link element to occupy height normally */
.destination-card-link {
    text-decoration: none;
    color: inherit;
    display: flex;
    flex-direction: column;
    height: auto;
}

/* Ensure the recommendation card inside shrinks to content */
.recommendation-card.grid-card {
    display: flex;
    flex-direction: column;
    height: auto;
    margin-bottom: 0;
    cursor: pointer;
    text-align: left; /* FIXED: Forces left alignment */
}

/* Container for title + description */
.card-body {
    display: flex;
    flex-direction: column;
    flex-grow: 0; /* FIXED: Stopped container from forcefully expanding down */
    padding: 14px;
    text-align: left; /* FIXED: Forces text inside body left */
    align-items: flex-start; /* FIXED: Ensures child elements align to the left edge */
}

/* Force titles to take up 2 lines of vertical height so all paragraphs line up */
.card-body h3 {
    font-size: 1.15rem;
    font-weight: 700;
    color: var(--text-dark);
    display: flex;
    align-items: left;
    text-align: left; /* FIXED: Left aligns title text */
    justify-content: flex-start;
    width: 100%;
} 

/* Let the paragraph wrap naturally across 2 lines */
.card-body p {
    font-size: 0.9rem;
    line-height: 1.45;
    color: #71717a;
    margin: 0;
    text-align: left; /* FIXED: Left aligns paragraph text */
    width: 100%;
}

/* Fixed image dimensions to prevent layout shifting */
.card-image {
    width: 100%;
    height: 180px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 14px;
    flex-shrink: 0;
}

/* Services section with top border touching the skyline */
.services-section {
    background-color: #f1f5f9;
    max-width: 1400px;
    border-top: 1px solid #e2e8f0; 
    border-bottom: 1px solid #e2e8f0; 
    margin-top: 40px;
    margin-bottom: 40px;
    padding-left: 55px;
    padding-right: 55px;
    padding-bottom: 60px;
    text-align: center;
    width: 100%;
    box-sizing: border-box;
}
/* Header Adjustments */
.services-header {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    margin-bottom: 30px;
    margin-top: 40px;
}

.services-header h2 {
    font-size: 2rem;
    font-weight: 800;
    color: #1e293b;
    margin-bottom: 20px;
    margin-top: 30px;
    text-transform: uppercase;

}
.services-header p {
    color: #718096;
    max-width: 700px;
    margin: 0 auto;
    font-size: 1.1rem;
    line-height: 1.6;
}

/* Card Grid Adjustments */
.services-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 30px;
}

.service-card {
    
    padding: 40px 24px;
    border-radius: 12px;
    background: #f1f5f9;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
}
.service-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.07);
}

/* Base Circle Setup */
.icon-circle {
    width: 90px;
    height: 90px;
    border-radius: 50%;
    border: 2px solid #f1c40f;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 24px;
    background-color: transparent;
    transition: background-color 0.3s ease, border-color 0.3s ease;
}

.icon-circle svg {
    width: 42px;
    height: 42px;
    stroke: #f1c40f; /* Yellow icon stroke by default */
    transition: stroke 0.3s ease;
}

.service-card {
    background: #f1f5f9;
    padding: 40px 24px;
    border-radius: 12px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    cursor: pointer;
}
.service-card p {
    color: #718096 !important;
    font-size: 1rem;
    line-height: 1.6;
    margin: 0;
}

/* Hover Effect: Fills circle yellow & turns icon white */
.service-card:hover .icon-circle {
    background-color: #f1c40f;
    border-color: #f1c40f;
}

.service-card:hover .icon-circle svg {
    stroke: #ffffff; /* Turns icon white on hover */
}    
/* Container Grid Setup */
.blog-grid-overlay {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-template-rows: 220px 220px;
    gap: 20px;
    width: 100%;
    max-width: 1100px;
    margin: 20px auto 0 auto;
    margin-top: 40px;
}
/* Header Section Container */
.blog-header {
    text-align: center;
    margin-bottom: 20px; /* Adds clean spacing before the card grid starts */
}

/* "Latest from Our Blog" Heading */
.blog-header h2 {
    font-size: 2rem;
    font-weight: 800;
    color: #1e293b;
    margin-bottom: 20px;
    margin-top: 60px;
    text-transform:uppercase;
}

/* Description Text Line Below */
.blog-header p {
    color: #718096;
    max-width: 700px;
    margin: 0 auto;
    font-size: 1.1rem;
    line-height: 1.6;
    margin-bottom: 10px;

}

/* Master Card Setup */
.blog-card-overlay {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    overflow: hidden;
    text-decoration: none;
    cursor: pointer;
    text-align: center;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
}

/* Background Image Layer */
.blog-img-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    z-index: 0;
    transition: transform 0.4s ease;
}

/* Hover Effect */
.blog-card-overlay:hover .blog-img-bg {
    transform: scale(1.05);
}

/* Yellow Bottom Bar Container */
.blog-overlay-content {
    position: relative;
    z-index: 2;
    background-color: var(--primary-yellow); /* Fallback to golden yellow if CSS variable is not defined */
    padding: 12px 16px;
    width: 100%;
    box-sizing: border-box;
    transition: background-color 0.3s ease;
}

/* Slight gold shade shift on hover */
.blog-card-overlay:hover .blog-overlay-content {
    background-color: var(--primary-yellow);
    filter: brightness(0.95);
}

/* Title Typography inside Yellow Box */
.blog-overlay-content h3 {
    font-size: 0.85rem;
    font-weight: 450;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #ffffff;
    margin: 0;
    line-height: 1.3;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

/* Card Grid Positioning */
.blog-card-overlay.featured {
    grid-column: 1;
    grid-row: 1 / span 2;
}

.blog-card-overlay.top-right {
    grid-column: 2 / span 2;
    grid-row: 1;
}

.blog-card-overlay.bottom-mid {
    grid-column: 2;
    grid-row: 2;
}

.blog-card-overlay.bottom-right {
    grid-column: 3;
    grid-row: 2;
}
/* Section Background & Layout */
/* 1. Main Container: Holds the gray background and the top divider border */
.tour-prices-section {
    background-color: #f1f5f9;      /* Gray background */
    border-top: 1px solid #e5e7eb;  /* Top divider border */
    border-bottom: 1px solid #e5e7eb; /* 👈 Bottom divider border where gray stops */
    margin-top: 60px;
    margin-bottom: 60px;            /* Space below the gray section before next elements */
    padding-top: 60px;
    padding-bottom: 60px;
    padding-left: 20px;
    padding-right: 20px;
    text-align: center;
    width: 100%;
    box-sizing: border-box;
}
/* 2. Heading Title Only */
.tour-prices-section .section-title {
    font-size: 2rem;
    font-weight: 800;
    color: #1e293b;
    letter-spacing: 2px;
    margin-top: 0;
    margin-bottom: 40px;
    text-transform: uppercase;
}
/* 4-Column Grid Layout */
.tour-prices-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    max-width: 1200px;
    margin: 0 auto;
}

/* Individual Card Container */
.tour-price-card {
    display: flex;
    flex-direction: column;
    text-decoration: none;
}

/* Destination Name Above Image */
.destination-name {
    font-size: 0.95rem;
    font-weight: 600;
    color: #334155;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    margin-bottom: 12px;
    text-align: center;
}

/* Square Image Box */
.card-image-box {
    position: relative;
    width: 100%;
    aspect-ratio: 1 / 1; /* Keeps cards perfectly square */
    background-size: cover;
    background-position: center;
    border-radius: 0; /* Flat clean rectangle edges */
    overflow: hidden;
}

/* Yellow Price Tag Top-Right */
.price-badge {
    position: absolute;
    top: 0;
    right: 0;
    background-color: var(--primary-yellow);
    color: #ffffff;
    font-size: 1.1rem;
    font-weight: 700; 
    padding: 6px 16px;
}
/* Base Section Setup */
.contact-section {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    /* CHANGE THIS: Set top padding to 40px and side padding to 20px */
    padding: 10px 20px 40px 20px; 
    max-width: 1100px;
    margin: 0 auto;
    color: #1e293b;
}

/* Section Main Title */
.contact-main-title {
    text-align: center;
    font-size: 2rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #1e293b;
    margin-bottom: 50px;
    margin-top: 0px;

}

/* Info Grid Layout (3 Columns) */
.contact-info-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    text-align: center;
    margin-bottom: 60px;
}

.info-block h3 {
    font-size: 1.3rem;
    font-weight: 600;
    letter-spacing: 1px;
    text-transform: capitalize;
    font-family: Montserrat, sans-serif;
    margin: 10px 0;
    margin-bottom: 20px;
    color: #334155;
}

.info-block p {
    color: #64748b;
    font-size: 1.1rem;
    line-height: 1.6;
    margin: 0;
}

.info-icon {
    font-size: 1.8rem;
    color: #eab308; /* Match the gold accent tone */
}

/* Bottom Container (2 Columns) */
.contact-bottom-container {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    align-items: center;
}

/* Form Shadow Box Container */
.contact-form-box {
    background: #ffffff;
    padding: 40px;
    border-radius: 4px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
}

.form-group {
    margin-bottom: 20px;
}

/* Inputs and Textarea Styling */
.contact-form-box input,
.contact-form-box textarea {
    width: 100%;
    padding: 14px 18px;
    border: none;
    background-color: #f8fafc;
    border-radius: 4px;
    font-size: 0.95rem;
    color: #334155;
    box-sizing: border-box;
    outline: none;
    transition: background-color 0.2s ease;
}

.contact-form-box input:focus,
.contact-form-box textarea:focus {
    background-color: #f1f5f9;
}

.contact-form-box textarea {
    resize: none;
}

/* Gold Send Button */
.btn-send {
    width: 100%;
    padding: 14px;
    background-color: var(--primary-yellow);
    color: #ffffff;
    border: none;
    border-radius: 4px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    text-transform: capitalize;
    transition: background-color 0.2s ease;
}

.btn-send:hover {
    background-color: #ca8a04;
}

/* Right Illustration Box Placeholder */
.contact-graphic-box {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 100%;
}

/* Update this container to seamlessly drop the dashed placeholder border */
.graphic-placeholder {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Add this new class to make sure the image scales beautifully without breaking the container limits */
.contact-img {
    width: 100%;
    max-width: 500px; /* Adjust this value to match your desired image layout size */
    height: auto;
    object-fit: contain;
}

/* Mobile Responsiveness Rules */
@media (max-width: 768px) {
    .contact-info-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .contact-bottom-container {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .contact-graphic-box {
        order: -1; /* Puts graphic above form on mobile if preferred */
        min-height: 250px;
    }
}
/* General Footer Layout */
.site-footer {
    background-color: #343d46; /* Matching the dark slate blue color */
    color: #ffffff;
    padding: 60px 0;
    font-family: 'Poppins', sans-serif; /* Change to your project font */
}

.footer-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    display: flex;
    justify-content: space-between;
    align-items: flex-start; /* Keeps columns aligned perfectly at the top */
}
/* Base Column Override: Removes uniform scaling */
.footer-col {
    flex: initial; 
}
/* Column 1: Expanded to 35% to allow text to spread out naturally */
.brand-col {
    width: 35%;
}
/* Column 2 (Quick Link): Sized and shifted slightly right to balance space */
.footer-container .footer-col:nth-child(2) {
    width: 15%;
    padding-left: 20px; /* Gently pushes the column closer to Support */
}
/* Column 3 (Support): Balanced width allocation */
.footer-container .footer-col:nth-child(3) {
    width: 18%;
}

/* Column 4 (Newsletter): Maintained compact styling for the form */
.newsletter-col {
    width: 25%;
}
/* Responsive fix: Stacks vertically cleanly on smaller mobile layouts */
@media (max-width: 992px) {
    .footer-container {
        flex-direction: column;
        gap: 40px;
    }
    .brand-col, 
    .footer-container .footer-col:nth-child(2), 
    .footer-container .footer-col:nth-child(3), 
    .newsletter-col {
        width: 100%;
        padding-left: 0;
    }
}

/* Brand Column Details */
.footer-logo {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 20px;
}

.footer-logo h2 {
    font-size: 2rem;
    font-weight: 700;
    margin: 0;
}

.brand-desc {
    font-size: 0.9rem;
    line-height: 1.6;
    color: #eff2f6;
    margin-bottom: 25px;
}

/* Social Media Buttons */
.social-links {
    display: flex;
    gap: 12px;
}

.social-icon {
    width: 36px;
    height: 36px;
    border-radius: 4px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    text-decoration: none;
    transition: filter 0.2s ease;
}

.social-icon:hover {
    filter: brightness(1.2);
}

.facebook { background-color: #3b5998; }
.twitter { background-color: #55acee; }
.instagram { background-color: #e1306c; }
.linkedin { background-color: #0077b5; }

/* Headers inside Links Columns */
.footer-col h3 {
    font-size: 1.25rem;
    font-weight: 600;
    margin-top: 0;
    margin-bottom: 25px;
}

/* List Link Adjustments */
.footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links li {
    margin-bottom: 15px;
}

.footer-links a {
    color: #eff2f6;
    text-decoration: none;
    font-size: 0.95rem;
    transition: color 0.2s ease;
}

.footer-links a:hover {
    color: #f59e0b; /* Yellow highlight color on hover */
}

/* Newsletter Input Form */
.newsletter-col p {
    font-size: 0.9rem;
    line-height: 1.5;
    color: #eff2f6;
    margin-bottom: 20px;
}

.newsletter-form {
    display: flex;
    background-color: #ffffff;
    border-radius: 4px;
    padding: 6px;
    align-items: center;
    max-width: 320px;
}

.newsletter-form input {
    border: none;
    outline: none;
    padding: 10px 12px;
    width: 100%;
    font-size: 0.95rem;
    color: #333;
}

.newsletter-form button {
    background-color: var(--primary-yellow);
    color: white;
    border: none;
    width: 36px;
    height: 36px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1.2rem;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background 0.2s ease;
}

.newsletter-form button:hover {
    background-color: var(--primary-yellow);

}

/* Mobile Responsiveness Rules */
@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
        gap: 30px;
    }
}
.social-icon {
    width: 36px;
    height: 36px;
    border-radius: 4px;
    
    /* Center the SVG icon perfectly inside the box */
    display: flex;
    align-items: center;
    justify-content: center;
    
    transition: filter 0.2s ease;
}
/* 1. Main Grid: Forces all items to have uniform heights across the row */
.card-grid, 
.destinations-grid {
    display: grid !important;
    grid-template-columns: repeat(4, 1fr) !important;
    gap: 24px !important;
    align-items: stretch !important; /* FIXED: Restores perfectly uniform card heights */
}

@media (max-width: 992px) {
    .card-grid, .destinations-grid {
        grid-template-columns: repeat(2, 1fr) !important;
    }
}
@media (max-width: 640px) {
    .card-grid, .destinations-grid {
        grid-template-columns: 1fr !important;
    }
}

/* 2. Link & Outer Card Container */
.destination-card-link,
.recommendation-card.grid-card {
    text-decoration: none !important;
    color: inherit !important;
    display: flex !important;
    flex-direction: column !important;
    height: 100% !important;
}

/* 3. The Custom Card Layout Style */
.destination-card {
    background-color: #ffffff !important;
    border-radius: 1rem !important;
    padding: 1rem !important;
    height: 100% !important; /* Spans full cell height beautifully */
    display: flex !important;
    flex-direction: column !important;
    border: 1px solid #f1f5f9 !important;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1) !important;
    text-align: left !important;
}

/* 4. The Card Body: Expands to push padding naturally */
.card-body {
    display: flex !important;
    flex-direction: column !important;
    flex-grow: 1 !important; /* Crucial: Fills space so card padding stays tight at the bottom */
    padding: 14px 0 0 0 !important;
    text-align: left !important;
    align-items: flex-start !important; /* Snaps contents to the left border edge */
}

/* 5. Destination Titles Settings */
.card-body h3,
.destination-card h3 {
    font-size: 1.15rem !important;
    font-weight: 700 !important;
    margin-top: 0 !important;
    margin-bottom: 8px !important;
    text-align: left !important;
    width: 100% !important;
    display: flex !important;
    align-items: center !important;
    justify-content: flex-start !important;
}

/* 6. Descriptions: Absolute Left Alignment Override */
.card-body p,
.destination-card p {
    font-size: 0.9rem !important;
    line-height: 1.45 !important;
    color: #71717a !important;
    margin: 0 !important;
    padding: 0 !important;
    text-align: left !important; /* FIXED: Overrides global center rules */
    width: 100% !important;
}

/* 7. Image Rules */
.card-image,
.destination-card img {
    width: 100% !important;
    height: 180px !important;
    object-fit: cover !important;
    border-radius: 8px !important;
    margin-bottom: 0px !important;
    flex-shrink: 0 !important;
}
/* Smooth scroll behavior with header offset padding built-in */
html {
    scroll-behavior: smooth;
    scroll-padding-top: 100px; /* Adjust this value if your nav header is taller/shorter */
}
.hidden {
    display: none !important;
}
/* Container alignment */
#welcome-section {
    text-align: center;
    padding: 10px 15px;
}

/* Button Base Styles */
.welcome-btn {
    padding: 12px 24px;
    border-radius: 12px;
    font-size: 0.95rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
    border: none;
    outline: none;
}

/* Primary "I'd like your help" Button */
.btn-accept {
    background-color: var(--primary, #ffc107);
    color: #1e293b; /* Dark text for good contrast against yellow */
    box-shadow: 0 4px 12px rgba(245, 158, 11, 0.25);
}

.btn-accept:hover {
    background-color: var(--primary-dark, #ffc107);
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(245, 158, 11, 0.35);
}

.btn-accept:active {
    transform: translateY(0);
}

/* Secondary "No thanks" Button */
.btn-decline {
    background-color: #f1f5f9;
    color: #64748b;
    border: 1px solid #e2e8f0;
}

.btn-decline:hover {
    background-color: #e2e8f0;
    color: #334155;
    transform: translateY(-2px);
}

.btn-decline:active {
    transform: translateY(0);
}
</style>
</head>
<body>
@php
    // Forces Laravel to declare the state value once globally for all sections below
    $currentLang = app()->getLocale();
@endphp

<!-- MAIN PAGE HEADER -->
<header class="main-header" id="navbar">
    <a href="#" class="logo">
        <svg class="logo-icon" viewBox="0 0 24 24">
            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
        </svg>
        TraveLand
    </a>
    <nav class="nav-links">
        <a href="#home" class="active">{{ __('messages.nav_home') }}</a>
        <a href="#about">{{ __('messages.nav_about') }}</a>
        <a href="#services">{{ __('messages.nav_services') }}</a>
        <a href="#blog">{{ __('messages.nav_blog') }}</a>
        <a href="#contact">{{ __('messages.nav_contact') }}</a>
    </nav>

<script>
</script>

        
    </nav>
</header>
<!-- HERO BANNER -->
<section class="hero-banner" id="home">
    <h1 id="hero-title">
        {{ $currentLang === 'km' ? 'ស្វែងយល់ពីកម្ពុជាជាមួយ' : 'Explore Cambodia with' }} <span>TraveLand</span>
    </h1>
    <p id="hero-desc">
        {{ $currentLang === 'km' 
            ? 'ស្វែងរកគោលដៅទេសចរណ៍ដែលបានជ្រើសរើសយ៉ាងសម្រិតសម្រាំង ប្រពៃណីក្នុងតំបន់ និងទេសភាពដ៏ស្រស់ត្រកាលនៃប្រទេសកម្ពុជាដែលរៀបចំឡើងជាពិសេសសម្រាប់រសជាតិធ្វើដំណើររបស់អ្នក។' 
            : 'Discover handpicked destinations, local traditions, and unforgettable Cambodian landscapes tailored directly to your traveling taste.' }}
    </p>
    <button class="book-btn" id="hero-btn" onclick="openQuiz()">
        {{ $currentLang === 'km' ? 'កក់ឥឡូវនេះ' : 'Book Now' }}
    </button>
</section>

<!-- ABOUT US SECTION -->
<section class="about-section" id="about">
    <div class="about-image-container">
        <img src="image/AboutUS.jpeg" alt="TraveLand Exploration">
    </div>

    <div class="about-content">
        <h4 id="about-sub">{{ $currentLang === 'km' ? 'អំពីយើង' : 'About Us' }}</h4>
        <h2 id="about-title">
            TraveLand {{ $currentLang === 'km' ? 'គិតជា' : 'in' }} <span>{{ $currentLang === 'km' ? 'តួលេខ' : 'Numbers' }}</span>
        </h2>
        
        <p id="about-desc">
            {{ $currentLang === 'km' 
                ? 'យើងរៀបចំដំណើរកម្សាន្តនៅក្នុងប្រទេសកម្ពុជាដែលតម្រូវទៅតាមចំណង់ចំណូលចិត្តតែមួយគត់របស់អ្នក។ ចាប់ពីប្រាសាទប្រវត្តិសាស្ត្រ និងកោះឆ្នេរសមុទ្រ រហូតដល់តំបន់ខ្ពង់រាបដ៏ស្ងប់ស្ងាត់ គោលដៅរបស់យើងគឺភ្ជាប់អ្នកដំណើរជាមួយបទពិសោធន៍ក្នុងតំបន់ពិតប្រាកដ ធម្មជាតិដ៏បរិសុទ្ធ និងបេតិកភណ្ឌវប្បធម៌ដែលមិនអាចបំភ្លេចបាន។' 
                : 'We curate handpicked Cambodian journeys tailored to your unique preferences. From historic temples and coastal islands to serene highland regions, our goal is to connect travelers with authentic local experiences, pristine nature, and unforgettable cultural heritage.' }}
        </p>

        <button class="read-more-btn" id="about-btn">
            {{ $currentLang === 'km' ? 'អានបន្ថែម' : 'Read More' }}
        </button>
        <div class="stats-container">
            <div class="stat-card slide-up">
                <h3>534</h3>
                <p id="stat-trips-label">Trips Done</p>
            </div>
            <div class="stat-card slide-up">
                <h3>424</h3>
                <p id="stat-clients-label">Corporate Clients</p>
            </div>
        </div>        
    </div>        
        </div>        
        </div>
    </div>
</section>
    <!-- DYNAMIC DESTINATIONS -->
    <main class="main-content" id="destinations">
        <h2>{{ __('messages.blog_title') }}</h2>
        <p>{{ __('messages.blog_desc') }}</p>
    <div class="destinations-grid" id="main-destinations-list" data-lang="{{ app()->getLocale() }}"></div>
    </main>
    
    @php 
        $lang = app()->getLocale(); 
    @endphp
    
<!-- SERVICE SECTION -->
    <section class="services-section" id="services">
    <div class="services-header">
<h2 data-key="services_title">SERVICE WE PROVIDE</h2>        <p>
<p data-key="services_desc">Discover our range of travel services designed to make your journey through Cambodia smooth, comfortable, and unforgettable.</p>        </p>
    </div>
    <div class="services-grid" id="services">
        <!-- Hotel Booking -->
        <div class="service-card">
            <div class="icon-circle">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#f1c40f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect>
                    <path d="M9 22v-4h6v4"></path>
                    <path d="M8 6h.01M16 6h.01M8 10h.01M16 10h.01M8 14h.01M16 14h.01"></path>
                </svg>
            </div>
            <h3 data-key="hotel_title">Hotel Booking</h3>
            <p data-key="hotel_desc">Easily reserve top-rated hotels, boutique stays, and luxury resorts tailored to your budget and style.</p>        </p>
        </div>

        <!-- Flight Booking -->
        <div class="service-card">
            <div class="icon-circle">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#f1c40f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M17.8 19.2 16 11l3.5-3.5C21 6 21.5 4 21 3c-1-.5-3 0-4.5 1.5L13 8 4.8 6.2c-.5-.1-.9.1-1.1.5l-.3.5c-.2.5-.1 1 .3 1.3L9 12l-2 3H4l-1 1 3 2 2 3 1-1v-3l3-2 3.7 5.2c.3.4.8.5 1.3.3l.5-.3c.4-.2.6-.6.5-1.1z"></path>
                </svg>
            </div>
<h3 data-key="flight_title">Flight Booking</h3>
<p data-key="flight_desc">Find and book domestic and international flights quickly with flexible options and great rates.</p>            </p>
        </div>

        <!-- Ship Booking -->
        <div class="service-card">
            <div class="icon-circle">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#f1c40f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M2 21c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1 .6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"></path>
                    <path d="M19.38 20A11.6 11.6 0 0 0 21 14l-9-4-9 4c0 2.9.94 5.34 2.81 7.76"></path>
                    <path d="M12 10V4"></path>
                    <path d="M12 4 8 7"></path>
                </svg>
            </div>
<h3 data-key="ship_title">Ship Booking</h3>
<p data-key="ship_desc">Book ferry tickets and scenic boat cruises across rivers and island destinations with ease.</p>            </p>
        </div>

        <!-- Car Booking -->
        <div class="service-card">
            <div class="icon-circle">
                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#f1c40f" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M19 17h2c.6 0 1-.4 1-1v-3c0-.9-.7-1.7-1.5-1.9C18.7 10.6 16 10 16 10s-1.3-1.4-2.2-2.3c-.5-.4-1.1-.7-1.8-.7H5c-.6 0-1.1.4-1.4.9l-1.4 2.9A3.7 3.7 0 0 0 2 12v4c0 .6.4 1 1 1h2"></path>
                    <circle cx="7" cy="17" r="2"></circle>
                    <circle cx="17" cy="17" r="2"></circle>
                </svg>
            </div>
<h3 data-key="car_title">Car Booking</h3>
<p data-key="car_desc">Rent comfortable private cars, vans, or taxi transfers with reliable local drivers anytime.</p>        </div>
    </div>
</section>

<!-- Blog Section with Text Overlay Grid -->
<section class="blog-section" id="blog">
    <div class="blog-header">
        <h2 data-key="blog_title">LATEST FROM OUR BLOG</h2>
        <p data-key="blog_desc">
            Get the best travel tips, hidden gems, and local insights for your next adventure.
        </p>
    </div>

    <div class="blog-grid-overlay">
<!-- Card 1: Featured Left (Spans 2 rows) -->
<a href="{{ url('/blog/koh-rong') }}" target="_blank" class="blog-card-overlay featured">
    <div class="blog-img-bg" style="background-image: url('image/kohrong.blog.webp');"></div>
    <div class="blog-overlay-content">
        <h3>10 Things You Must Know Before Visiting Koh Rong</h3>
    </div>
</a>

<!-- Card 2: Top Right (Spans 2 columns across the top) -->
<a href="{{ url('/blog/angkor-wat') }}" target="_blank" class="blog-card-overlay top-right">
    <div class="blog-img-bg" style="background-image: url('image/Angkorwat.blog.jpg');"></div>
    <div class="blog-overlay-content">
        <h3>The Ultimate Guide to Exploring Angkor Wat at Sunrise</h3>
    </div>
</a>

<!-- Card 3: Bottom Middle -->
<a href="{{ url('/blog/street-food') }}" target="_blank" class="blog-card-overlay">
    <div class="blog-img-bg" style="background-image: url('image/streetfood.blog.jpg');"></div>
    <div class="blog-overlay-content">
        <h3>5 Street Foods in Phnom Penh You Cannot Miss</h3>
    </div>
</a>

<!-- Card 4: Bottom Right -->
<a href="{{ url('/blog/phnom-kulen') }}" target="_blank" class="blog-card-overlay">
    <div class="blog-img-bg" style="background-image: url('image/sacredphnomkulen.blog.jpg');"></div>
    <div class="blog-overlay-content">
        <h3>Exploring the Sacred Waterfalls of Phnom Kulen</h3>
    </div>
</a>   
 </div>
</section>

<!-- TOUR PRICES -->
<section class="tour-prices-section">
    <h2 class="section-title">{{ $lang === 'km' ? 'តម្លៃដំណើរកម្សាន្ត' : 'TOUR PRICES' }}</h2>

    <div class="tour-prices-grid">
        <!-- Item 1 -->
        <a href="/tours/siem-reap" class="tour-price-card">
            <span class="destination-name">{{ $lang === 'km' ? 'សៀមរាប' : 'SIEM REAP' }}</span>
            <div class="card-image-box" style="background-image: url('image/Siemreap.tour.jpg');">
                <div class="price-badge">$150</div>
            </div>
        </a>

        <!-- Item 2 -->
        <a href="/tours/koh-rong" class="tour-price-card">
            <span class="destination-name">{{ $lang === 'km' ? 'កោះរ៉ុង' : 'KOH RONG' }}</span>
            <div class="card-image-box" style="background-image: url('image/Kohrong.tour.webp');">
                <div class="price-badge">$220</div>
            </div>
        </a>

        <!-- Item 3 -->
        <a href="/tours/phnom-penh" class="tour-price-card">
            <span class="destination-name">{{ $lang === 'km' ? 'ភ្នំពេញ' : 'PHNOM PENH' }}</span>
            <div class="card-image-box" style="background-image: url('image/Phnompenh.tour.jpg');">
                <div class="price-badge">$120</div>
            </div>
        </a>

        <!-- Item 4 -->
        <a href="/tours/kampot" class="tour-price-card">
            <span class="destination-name">{{ $lang === 'km' ? 'កំពត' : 'KAMPOT' }}</span>
            <div class="card-image-box" style="background-image: url('image/Kampot.tour.webp');">
                <div class="price-badge">$180</div>
            </div>
        </a>
    </div>
</section>

<!-- CONTACT SECTION -->
<section class="contact-section" id="contact">
    <!-- Top Information Blocks -->
    <h2 class="contact-main-title">{{ $lang === 'km' ? 'ទាក់ទងមកយើងខ្ញុំ' : 'Get in Touch With Us' }}</h2>
    
    <div class="contact-info-grid">
        <!-- Location Block -->
        <div class="info-block">
            <div class="info-icon">
                <svg xmlns="http://w3.org" viewBox="0 0 24 24" fill="#eab308" width="36px" height="36px">
                    <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                </svg>
            </div>
            <h3>{{ $lang === 'km' ? 'ទីតាំង' : 'Location' }}</h3>
            <p>TraveLand<br>{{ $lang === 'km' ? 'សៀមរាប ប្រទេសកម្ពុជា' : 'Siem Reap, Cambodia' }}</p>
        </div>
        
        <!-- Phone & Email Block -->
        <div class="info-block">
            <div class="info-icon">
                <svg xmlns="http://w3.org" viewBox="0 0 24 24" fill="none" stroke="#eab308" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" width="36px" height="36px">
                    <path d="M22 6C22 4.9 21.1 4 20 4H4C2.9 4 2 4.9 2 6V18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V6Z" fill="none"/>
                    <path d="M22 6L12 13L2 6"/>
                    <path d="M12 7V10M12 10L10 8.5M12 10L14 8.5"/>
                </svg>
            </div>
            <h3>{{ $lang === 'km' ? 'ទូរស័ព្ទ & អ៊ីមែល' : 'Phone & Email' }}</h3>
            <p>+(855) 679 166 63<br>TraveLand@cambodia.com</p>
        </div>
        
        <!-- Branches Block -->
        <div class="info-block">
            <div class="info-icon">
                <svg xmlns="http://w3.org" viewBox="0 0 24 24" fill="#eab308" width="36px" height="36px">
                    <path d="M19 2H5c-1.1 0-2 .9-2 2v18h18V4c0-1.1-.9-2-2-2zM9 19H7v-2h2v2zm0-4H7v-2h2v2zm0-4H7V9h2v2zm0-4H7V5h2v2zm4 12h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V9h2v2zm0-4h-2V5h2v2zm4 12h-2v-2h2v2zm0-4h-2v-2h2v2zm0-4h-2V9h2v2zm0-4h-2V5h2v2z"/>
                </svg>
            </div>
            <h3>{{ $lang === 'km' ? 'សាខារបស់យើង' : 'Our Branches' }}</h3>
            <p>{{ $lang === 'km' ? 'សៀមរាប ប្រទេសកម្ពុជា' : 'Siem Reap, Cambodia' }}</p>
        </div>
    </div>

    <!-- Bottom Form & Illustration Split Section -->
    <div class="contact-bottom-container">
        <!-- Contact Form Box -->
        <div class="contact-form-box">
            <form action="#" method="POST">
                <div class="form-group">
                    <input type="text" placeholder="{{ $lang === 'km' ? 'ឈ្មោះ' : 'Name' }}" required>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="{{ $lang === 'km' ? 'អ៊ីមែល' : 'Email' }}" required>
                </div>
                <div class="form-group">
                    <input type="tel" placeholder="{{ $lang === 'km' ? 'លេខទូរស័ព្ទ' : 'Phone' }}">
                </div>
                <div class="form-group">
                    <textarea placeholder="{{ $lang === 'km' ? 'សារ ឬមតិយោបល់' : 'Message' }}" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn-send">{{ $lang === 'km' ? 'ផ្ញើ' : 'Send' }}</button>
            </form>
        </div>

        <!-- Illustration Holder -->
        <div class="contact-graphic-box">
            <div class="graphic-placeholder">
                <img src="image/ContactUs.jpg" alt="Contact Illustration" class="contact-img">
            </div>
        </div>
    </div>
</section>
<!-- QUIZ MODAL -->
<div class="modal-overlay hidden" id="quizModal">
    <div class="card">
        <button class="close-btn" onclick="closeQuiz()">&times;</button>

        <!-- 1. WELCOME SECTION (Visible by default when modal opens) -->
        <div id="welcome-section" style="text-align: center; padding: 20px 10px;">
            <h2 id="welcome-title" style="font-size: 1.65rem; margin-bottom: 12px; color: var(--text-dark, #1e293b); font-weight: 700;">
                Welcome to TraveLand!<br>Shall we help you find your next destination?
            </h2>
            <p id="welcome-desc" style="color: var(--text-muted, #64748b); font-size: 0.95rem; margin-bottom: 28px; line-height: 1.5;">
                Answer a few quick questions and we'll match you with the perfect spots in Cambodia!
            </p>

            <div style="display: flex; gap: 12px; justify-content: center;">
                <button class="welcome-btn btn-accept" onclick="startQuiz()">I'd like your help</button>
                <button class="welcome-btn btn-decline" onclick="closeQuiz()">No thanks</button>
            </div>
        </div>

        <!-- 2. QUIZ SECTION (MUST HAVE class="hidden" HERE) -->
        <div id="quiz-section" class="hidden">
            <div class="progress-header">
                <span id="quiz-header-title">Cambodia Travel Matcher</span>
                <span id="step-indicator">Step 1 of 7</span>
            </div>
            <div class="progress-track">
                <div class="progress-fill" id="progress-bar"></div>
            </div>

            <h2 class="question-title" id="question-text">Loading...</h2>
            <div class="options-list" id="options-container"></div>
        </div>

        <!-- 3. RESULTS SECTION -->
        <div id="results-section" class="hidden">
            <div style="text-align: center; margin-bottom: 24px;">
                <h2 id="results-title" style="font-size: 1.75rem; margin-bottom: 6px;">Your Custom Itinerary</h2>
                <p id="results-desc" style="color: var(--text-muted);">Curated based on your answers:</p>
            </div>
            <div id="recommendations-list"></div>
            <button class="explore-btn" id="results-explore-btn" onclick="closeQuiz()">Explore These Destinations</button>
        </div>
    </div>
</div>
<script>
    
    
    // HEADER SCROLL TRANSITION
    window.addEventListener('scroll', function() {
        const navbar = document.getElementById('navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    let currentLang = localStorage.getItem('selectedLanguage') || 'en';    let currentQuestionIndex = 0;
    let selectedTags = [];

const translations = {
    en: {
        // Navigation
        nav_home: "Home",
        nav_about: "About",
        nav_services: "Services",
        nav_blog: "Blog",
        nav_contact: "Contact",

        // Hero
        hero_title: 'Explore Cambodia with <span>TraveLand</span>',
        hero_desc: "Discover handpicked destinations, local traditions, and unforgettable Cambodian landscapes tailored directly to your traveling taste.",
        hero_btn: "Book Now",

        // About
        about_sub: "About Us",
        about_title: 'TraveLand in <span>Numbers</span>',
        about_desc: "We curate handpicked Cambodian journeys tailored to your unique preferences. From historic temples and coastal islands to serene highland regions, our goal is to connect travelers with authentic local experiences, pristine nature, and unforgettable cultural heritage.",
        about_btn: "Read More",
        stat_trips: "Trips Done",
        stat_clients: "Corporate Clients",

        // Services
        services_title: "SERVICE WE PROVIDE",
        services_desc: "Discover our range of travel services designed to make your journey through Cambodia smooth, comfortable, and unforgettable.",
        hotel_title: "Hotel Booking",
        hotel_desc: "Easily reserve top-rated hotels, boutique stays, and luxury resorts tailored to your budget and style.",
        flight_title: "Flight Booking",
        flight_desc: "Find and book domestic and international flights quickly with flexible options and great rates.",
        ship_title: "Ship Booking",
        ship_desc: "Book ferry tickets and scenic boat cruises across rivers and island destinations with ease.",
        car_title: "Car Booking",
        car_desc: "Rent comfortable private cars, vans, or taxi transfers with reliable local drivers anytime.",

        // Blog
        blog_title: "LATEST FROM OUR BLOG",
        blog_desc: "Get the best travel tips, hidden gems, and local insights for your next adventure.",
        
        // Quiz & Results
        welcome_title: "Welcome to TraveLand!<br>Shall we help you find your next destination?",
        welcome_desc: "Answer a few quick questions and we'll match you with the perfect spots in Cambodia!",
        welcome_accept: "I'd like your help",
        welcome_decline: "No thanks",

        quiz_header: "Cambodia Travel Matcher",
        step_text: "Step",
        of_text: "of",
        results_title: "Your Custom Itinerary",
        results_desc: "Curated based on your answers:",
        results_explore: "Explore These Destinations",
        top_spots: "Top Spots:"
    },
    kh: {
        // Navigation
        nav_home: "ទំព័រដើម",
        nav_about: "អំពីយើង",
        nav_services: "សេវាកម្ម",
        nav_blog: "ប្លុក",
        nav_contact: "ទំនាក់ទំនង",

        // Hero
        hero_title: 'ស្វែងយល់ពីកម្ពុជាជាមួយ <span>TraveLand</span>',
        hero_desc: "ស្វែងរកតំបន់ទេសចរណ៍ដែលបានជ្រើសរើសយ៉ាងសម្រិតសម្រាំង ប្រពៃណីក្នុងស្រុក និងទេសភាពដ៏ស្រស់ស្អាតនៃប្រទេសកម្ពុជាដែលតម្រូវតាមចំណង់ចំណូលចិត្តរបស់អ្នក។",
        hero_btn: "កក់ឥឡូវនេះ",

        // About
        about_sub: "អំពីយើង",
        about_title: 'TraveLand ក្នុង<span>តួលេខ</span>',
        about_desc: "យើងរៀបចំដំណើរទេសចរណ៍ក្នុងប្រទេសកម្ពុជាដែលតម្រូវតាមចំណង់ចំណូលចិត្តតែមួយគត់របស់អ្នក។ ចាប់ពីប្រាសាទបូរាណ និងកោះឆ្នេរសមុទ្រ រហូតដល់តំបន់ខ្ពង់រាបដ៏ស្ងប់ស្ងាត់ គោលដៅរបស់យើងគឺភ្ជាប់ទំនាក់ទំនងអ្នកទេសចរជាមួយបទពិសោធន៍ក្នុងស្រុកពិតប្រាកដ និងបេតិកភណ្ឌវប្បធម៌មិនអាចបំបំភ្លេចបាន។",
        about_btn: "អានបន្ថែម",
        stat_trips: "ដំណើរដែលបានបញ្ចប់",
        stat_clients: "អតិថិជនក្រុមហ៊ុន",

        // Services
        services_title: "សេវាកម្មដែលយើងផ្តល់ជូន",
        services_desc: "ស្វែងរកសេវាកម្មទេសចរណ៍ចម្រុះរបស់យើងដែលត្រូវបានរចនាឡើងដើម្បីធ្វើឱ្យដំណើរកម្សាន្តរបស់អ្នកនៅកម្ពុជាកាន់តែរលូន ផាសុកភាព និងមិនអាចបំភ្លេចបាន។",
        hotel_title: "ការកក់សណ្ឋាគារ",
        hotel_desc: "កក់សណ្ឋាគារលំដាប់កំពូល កន្លែងស្នាក់នៅបែបប៊ូទិក និងរីសតប្រណីតៗយ៉ាងងាយស្រួលតាមថវិការបស់អ្នក។",
        flight_title: "ការកក់សំបុត្រយន្តហោះ",
        flight_desc: "ស្វែងរក និងកក់សំបុត្រយន្តហោះក្នុងស្រុក និងអន្តរជាតិបានរហ័ស ជាមួយជម្រើសដែលអាចបត់បែនបាន។",
        ship_title: "ការកក់សំបុត្រកប៉ាល់",
        ship_desc: "កក់សំបុត្រកប៉ាល់ចម្លង និងទូកទេសចរណ៍តាមទន្លេ ឬទៅកាន់កោះនានាដោយងាយស្រួល។",
        car_title: "ការជួលរថយន្ត",
        car_desc: "ជួលរថយន្តផ្ទាល់ខ្លួន ឡានឈ្នួល ឬតាក់ស៊ីដែលមានផាសុកភាព ជាមួយអ្នកបើកបរក្នុងស្រុកដែលអាចទុកចិត្តបាន។",

        // Blog
        blog_title: "អត្ថបទថ្មីៗពីប្លុករបស់យើង",
        blog_desc: "ទទួលបានគន្លឹះធ្វើដំណើរដ៏ល្អបំផុត កន្លែងកម្សាន្តលាក់ខ្លួន និងព័ត៌មានលម្អិតក្នុងស្រុកសម្រាប់ដំណើរកម្សាន្តបន្ទាប់របស់អ្នក។",

        // Quiz & Results
        quiz_header: "កម្មវិធីស្វែងរកទីតាំងទេសចរណ៍",
        step_text: "ជំហាន",
        of_text: "នៃ",
        results_title: "កម្មវិធីដំណើរទេសចរណ៍ផ្ទាល់ខ្លួនរបស់អ្នក",
        results_desc: "រៀបចំឡើងផ្អែកលើចម្លើយរបស់អ្នក៖",
        results_explore: "ស្វែងរកគោលដៅទាំងនេះ",
        top_spots: "ទីតាំងល្បីៗ៖"
    }
};

        const destinations = [
            { 
                id: 1, 
                province: { en: "Siem Reap", kh: "ខេត្តសៀមរាប" }, 
                image: "image/SiemReap.jpeg", 
                spots: { en: "Angkor Wat, Phnom Kulen, Tonle Sap Lake", kh: "អង្គរវត្ត, ភ្នំគូលែន, បឹងទន្លេសាប" }, 
                description: { en: "Perfect for history and culture lovers. Explore world-class ancient temples and rich heritage.", kh: "ល្អឥតខ្ចោះសម្រាប់អ្នកស្រឡាញ់ប្រវត្តិសាស្ត្រ និងវប្បធម៌។ រុករកប្រាសាទបុរាណ និងបេតិកភណ្ឌ។" }, 
                category: ["history", "relaxed"] 
            },
            { 
                id: 2, 
                province: { en: "Sihanouk & Koh Rong Islands", kh: "ខេត្តព្រះសីហនុ និង កោះរុង" }, 
                image: "image/KohRong.jpeg", 
                spots: { en: "Koh Rong Sanloem, Saracen Bay, Ream National Park", kh: "កោះរុងសម្លឹម, ឆ្នេរសារ៉ាសិន, ឧទ្យានជាតិរាម" }, 
                description: { en: "Ideal for tropical beach lovers seeking crystal waters, white sand, and island relaxation.", kh: "ស័ក្តិសមសម្រាប់អ្នកស្រឡាញ់ឆ្នេរសមុទ្រតំបន់ក្តៅដែលស្វែងរកទឹកជ្រោះថ្លា ឆ្នេរខ្សាច់ស និងការសម្រាកលំហែកាយ។" }, 
                category: ["beach", "relaxed"] 
            },
            { 
                id: 3, 
                province: { en: "Kampot & Kep", kh: "ខេត្តកំពត និង ខេត្តកែប" }, 
                image: "image/Kompot.jpeg", 
                spots: { en: "Bokor Mountain, Kampot River, Kep Crab Market", kh: "ភ្នំបូកគោ, ព្រែកកំពត, ផ្សារក្តាមកែប" }, 
                description: { en: "A peaceful blend of scenic mountain highlands, French colonial charm, and fresh seafood.", kh: "ការលាយបញ្ចូលគ្នាយ៉ាងស្ងប់ស្ងាត់នៃតំបន់ខ្ពង់រាប ភាពទាក់ទាញនៃស្ថាបត្យកម្មបារាំង និងអាហារសមុទ្រស្រស់ៗ។" }, 
                category: ["mountain", "relaxed"] 
            },
            { 
                id: 4, 
                province: { en: "Mondulkiri & Ratanakiri", kh: "ខេត្តមណ្ឌលគិរី និង រតនគិរី" }, 
                image: "image/mondulkiri-elephant.jpg", 
                spots: { en: "Elephant Valley Project, Bousra Waterfall, Yeak Laom Lake", kh: "គម្រោងអភិរក្សដំរី, ទឹកជ្រោះប៊ូស្រា, បឹងយក្សឡោម" }, 
                description: { en: "Designed for eco-adventurers seeking forests, majestic waterfalls, and wildlife.", kh: "បង្កើតឡើងសម្រាប់អ្នកស្រឡាញ់ធម្មជាតិ ការផ្សងព្រេង ព្រៃស្រល់ត្រជាក់ ទឹកជ្រោះ និងសត្វព្រៃ។" }, 
                category: ["mountain", "relaxed"] 
            },
            { 
                id: 5, 
                province: { en: "Phnom Penh", kh: "រាជធានីភ្នំពេញ" }, 
                image: "image/PhnomPenh.jpeg", 
                spots: { en: "Royal Palace, National Museum, Mekong River Promenade", kh: "ព្រះបរមរាជវាំង, សារមន្ទីរជាតិ, មាត់ទន្លេមេគង្គ" }, 
                description: { en: "Suited for travelers looking for vibrant city life, royal history, riverside dining, and local markets.", kh: "ស័ក្តិសមសម្រាប់អ្នកទេសចរដែលស្វែងរកជីវិតទីក្រុងដ៏រស់រវើក បេតិកភណ្ឌ និងផ្សាររាត្រី។" }, 
                category: ["history", "relaxed"] 
            },
            { 
                id: 6, 
                province: { en: "Battambang", kh: "ខេត្តបាត់ដំបង" }, 
                image: "image/Battambang.jpeg", 
                spots: { en: "Bamboo Train, Phnom Sampeau & Bat Caves, Wat Banan", kh: "ឡូរី, ភ្នំសំពៅ និងរូងភ្នំប្រជៀវ, វត្តបាណន់" }, 
                description: { en: "Ideal for travelers seeking artistic local vibes, French colonial heritage, and countryside views.", kh: "ល្អសម្រាប់អ្នកទេសចរដែលស្វែងរកទេសភាពជនបទ សិល្បៈ និងបេតិកភណ្ឌបារាំង។" }, 
                category: ["cultural", "history", "relaxed"] 
            },
            { 
                id: 7, 
                province: { en: "Preah Vihear", kh: "ខេត្តព្រះវិហារ" }, 
                image: "image/PreahVihear.png", 
                spots: { en: "Preah Vihear Clifftop Temple, Koh Ker Pyramid, Kulen Promtep Wildlife Sanctuary", kh: "ប្រាសាទព្រះវិហារ, ប្រាសាទកោះកែរ, ដែនជម្រកសត្វព្រៃគូលែនព្រហ្មទេព" }, 
                description: { en: "Unmatched for dramatic cliffside mountain views, quiet ancient ruins, and rich history.", kh: "ស្វែងយល់ពីទិដ្ឋភាពកំពូលភ្នំដ៏ខ្ពស់ ប្រាសាទបុរាណដ៏ស្ងប់ស្ងាត់ និងបេតិកភណ្ឌប្រវត្តិសាស្ត្រ។" }, 
                category: ["history", "relaxed"] 
            },
            { 
                id: 8, 
                province: { en: "Koh Kong", kh: "ខេត្តកោះកុង" }, 
                image: "image/KohKong1.jpg", 
                spots: { en: "Peam Krasaop Mangroves, Cardamom Mountains, Tatai Waterfall", kh: "ព្រៃកោងកាងពាមក្រសោប, ជួរភ្នំក្រវាញ, ទឹកជ្រោះតាតៃ" }, 
                description: { en: "Designed for eco-explorers seeking dense jungle trekking, kayaking, and coastal mangroves.", kh: "រៀបចំឡើងសម្រាប់អ្នករុករកធម្មជាតិដែលស្វែងរកការដើរព្រៃ ការជិះទូក និងព្រៃកោងកាង។" }, 
                category: ["mountain", "active", "quiet", "highland"] 
            }
        ];
    const questions = {
        en: [
            { id: 1, text: "What style of environment grounds you best?", options: [{ label: "🌊 Warm coastal breezes and ocean sounds", tags: ["beach"] }, { label: "🌲 Cool mountain air and dense forest trails", tags: ["mountain"] }, { label: "🏛️ Ancient ruins and deep-rooted heritage", tags: ["history"] }] },
            { id: 2, text: "How do you prefer to spend a typical afternoon?", options: [{ label: "🍹 Relaxing at a quiet cafe or lounging by water", tags: ["relaxed"] }, { label: "🥾 Hiking, exploring caves, or outdoor adventures", tags: ["active"] }, { label: "📸 Immersing in local culture, art, and architecture", tags: ["cultural"] }] },
            { id: 3, text: "What type of crowd fits your travel vibe?", options: [{ label: "🏝️ Serene, remote, and completely off-the-grid", tags: ["quiet"] }, { label: "🌆 Lively streets, bustling markets, and night scenes", tags: ["bustling"] }] },
            { id: 4, text: "Choose your ideal daily scene:", options: [{ label: "🌅 Sunsets over serene waters or tropical islands", tags: ["water"] }, { label: "⛰️ Misty highlands, waterfalls, and wildlife", tags: ["highland"] }, { label: "🛕 Historic stone temples wrapped in giant tree roots", tags: ["temple"] }] },
            { id: 5, text: "Which dining atmosphere sounds most appealing?", options: [{ label: "🦀 Fresh seafood by the sea or riverbank", tags: ["seafood"] }, { label: "🍲 Cozy local eateries nestled in nature or small towns", tags: ["cozy"] }, { label: "🍷 Vibrant city rooftop bars and street food markets", tags: ["urban_food"] }] },
            { id: 6, text: "What pace do you want for your journey?", options: [{ label: "🧘 Slow, peaceful, and restorative", tags: ["slow"] }, { label: "⚡ Packed full of exploration, sights, and moving around", tags: ["fast"] }] },
            { id: 7, text: "What kind of memory do you want to take home?", options: [{ label: "🏝️ Unwinding on pristine tropical beaches", tags: ["beach_dest"] }, { label: "⛰️ Trekking through untouched national parks", tags: ["nature_dest"] }, { label: "📜 Standing face-to-face with ancient history", tags: ["heritage_dest"] }] }
        ],
        kh: [
            { id: 1, text: "តើបរិយាកាសបែបណាដែលធ្វើឲ្យអ្នកមានអារម្មណ៍ល្អបំផុត?", options: [{ label: "🌊 ខ្យល់អាកាសឆ្នេរសមុទ្រ និងសំឡេងរលកសមុទ្រ", tags: ["beach"] }, { label: "🌲 ខ្យល់អាកាសធាតុត្រជាក់នៅលើភ្នំ និងផ្លូវដើរក្នុងព្រៃ", tags: ["mountain"] }, { label: "🏛️ ប្រាសាទបុរាណ និងបេតិកភណ្ឌប្រវត្តិសាស្ត្រ", tags: ["history"] }] },
            { id: 2, text: "តើអ្នកចូលចិត្តចំណាយពេលរសៀលដោយរបៀបណា?", options: [{ label: "🍹 សម្រាកនៅហាងកាហ្វេស្ងប់ស្ងាត់ ឬអង្គុយលេងក្បែរទឹក", tags: ["relaxed"] }, { label: "🥾 ដើរភ្នំ រុករករូងភ្នំ ឬការផ្សងព្រេងក្រៅផ្ទះ", tags: ["active"] }, { label: "📸 សិក្សាពីវប្បធម៌ក្នុងស្រុក សិល្បៈ និងស្ថាបត្យកម្ម", tags: ["cultural"] }] },
            { id: 3, text: "តើបរិយាកាសបែបណាដែលត្រូវនឹងរចនាប័ទ្មធ្វើដំណើររបស់អ្នក?", options: [{ label: "🏝️ ស្ងប់ស្ងាត់ ឆ្ងាយដាច់ស្រយាល និងគ្មានភាពវឹកវរ", tags: ["quiet"] }, { label: "🌆 ផ្លូវដែលមានភាពរស់រវើក ផ្សារកកកុញ និងទិដ្ឋភាពយប់", tags: ["bustling"] }] },
            { id: 4, text: "ជ្រើសរើសទិដ្ឋភាពប្រចាំថ្ងៃដែលអ្នកចូលចិត្ត៖", options: [{ label: "🌅 ថ្ងៃរៀបលិចលើផ្ទៃទឹកស្ងប់ស្ងាត់ ឬកោះតំបន់ក្តៅ", tags: ["water"] }, { label: "⛰️ តំបន់ខ្ពង់រាបមានអ័ព្ទ ទឹកជ្រោះ និងសត្វព្រៃ", tags: ["highland"] }, { label: "🛕 ប្រាសាទបុរាណដែលព័ទ្ធជុំវិញដោយឬសឈើធំៗ", tags: ["temple"] }] },
            { id: 5, text: "តើបរិយាកាសញ៉ាំអាហារបែបណាដែលទាក់ទាញបំផុត?", options: [{ label: "🦀 អាហារសមុទ្រស្រស់ៗនៅក្បែរសមុទ្រ ឬមាត់ទន្លេ", tags: ["seafood"] }, { label: "🍲 ហាងអាហារក្នុងស្រុកដ៏កក់ក្តៅក្នុងធម្មជាតិ", tags: ["cozy"] }, { label: "🍷 បារលើដំបូលអគារ និងផ្សារអាហារតាមផ្លូវ", tags: ["urban_food"] }] },
            { id: 6, text: "តើអ្នកចង់បានល្បឿនបែបណាសម្រាប់ដំណើររបស់អ្នក?", options: [{ label: "🧘 យឺតៗ ស្ងប់ស្ងាត់ និងលំហែកាយ", tags: ["slow"] }, { label: "⚡ ពេញដោយការរុករក ការទស្សនា និងការផ្លាស់ទី", tags: ["fast"] }] },
            { id: 7, text: "តើការចងចាំបែបណាដែលអ្នកចង់នាំយកទៅផ្ទះវិញ?", options: [{ label: "🏝️ ការសម្រាកនៅលើឆ្នេរសមុទ្រដ៏ស្អាត", tags: ["beach_dest"] }, { label: "⛰️ ការដើរព្រៃតាមឧទ្យានជាតិធម្មជាតិ", tags: ["nature_dest"] }, { label: "📜 ការឈរមើលប្រវត្តិសាស្ត្របុរាណផ្ទាល់ភ្នែក", tags: ["heritage_dest"] }] }
        ]
    };

    function setLanguage(lang) {
        if (currentLang === lang) return;
        currentLang = lang;
        localStorage.setItem('selectedLanguage', lang); // <-- ADD THIS LINE RIGHT HERE (Line 824)

        updateStaticText();
        renderAllDestinations();

        const quizModal = document.getElementById('quizModal');
        if (quizModal && !quizModal.classList.contains('hidden')) {
            const quizSection = document.getElementById('quiz-section');
            if (quizSection && !quizSection.classList.contains('hidden')) {
                renderQuestion();
            } else {
                showResults();
            }
        }
    }
    // Toggle dropdown visibility
    function toggleDropdown() {
        const menu = document.getElementById('dropdownMenu');
        menu.classList.toggle('hidden');
    }

    // Select language option and trigger page updates
function selectLanguage(e, langCode, flagUrl, labelText) {
    if (e) e.preventDefault(); // ផ្លាស់ប្តូរមិនឱ្យទំព័រ Refresh/Reload

    // បច្ចុប្បន្នភាពរូបទង់ជាតិ និងអក្សរភាសា
    const currentFlag = document.getElementById('current-flag');
    const currentLangText = document.getElementById('current-lang-text');
    
    if (currentFlag) currentFlag.src = flagUrl;
    if (currentLangText) currentLangText.innerText = labelText;
    
    // បិទ Dropdown Menu
    const dropdownMenu = document.getElementById('dropdownMenu');
    if (dropdownMenu) dropdownMenu.classList.add('hidden');

    // ហៅអនុគមន៍ប្តូរភាសា
    setLanguage(langCode);
}
    // Close dropdown automatically if user clicks anywhere outside
    window.addEventListener('click', function(e) {
        const dropdown = document.getElementById('langDropdown');
        if (dropdown && !dropdown.contains(e.target)) {
            document.getElementById('dropdownMenu').classList.add('hidden');
        }
    });

    function updateStaticText() {
        const t = translations[currentLang];
        document.querySelectorAll('[data-key]').forEach(el => {
            const key = el.getAttribute('data-key');
            if (t[key]) el.innerText = t[key];
        });

        document.getElementById('hero-title').innerHTML = t.hero_title;
        document.getElementById('hero-desc').innerText = t.hero_desc;
        document.getElementById('hero-btn').innerText = t.hero_btn;

        document.getElementById('about-sub').innerText = t.about_sub;
        document.getElementById('about-title').innerHTML = t.about_title;
        document.getElementById('about-desc').innerText = t.about_desc;
        document.getElementById('about-btn').innerText = t.about_btn;

        const tripsEl = document.getElementById('stat-trips-label') || document.getElementById('stat-trips');
        const clientsEl = document.getElementById('stat-clients-label') || document.getElementById('stat-clients');

        if (tripsEl) tripsEl.innerText = t.stat_trips;
        if (clientsEl) clientsEl.innerText = t.stat_clients;        
    // Welcome Screen Updates
        const welcomeTitle = document.getElementById('welcome-title');
        const welcomeDesc = document.getElementById('welcome-desc');
        const btnAccept = document.querySelector('.btn-accept');
        const btnDecline = document.querySelector('.btn-decline');

        if (welcomeTitle) welcomeTitle.innerHTML = t.welcome_title;
        if (welcomeDesc) welcomeDesc.innerHTML = t.welcome_desc;
        if (btnAccept) btnAccept.innerHTML = t.welcome_accept;
        if (btnDecline) btnDecline.innerHTML = t.welcome_decline;

        document.getElementById('quiz-header-title').innerText = t.quiz_header;
        document.getElementById('results-title').innerText = t.results_title;
        document.getElementById('results-desc').innerText = t.results_desc;
        document.getElementById('results-explore-btn').innerText = t.results_explore;
    }
    

    function renderAllDestinations() {
        const mainList = document.getElementById('main-destinations-list');
        if (!mainList) return;
        mainList.innerHTML = '';

        destinations.forEach(item => {
            const cardLink = document.createElement('a');
            cardLink.href = `/destinations/${item.id}`;
            cardLink.className = 'destination-card-link'; // Added dedicated class

            const card = document.createElement('div');
            card.className = 'recommendation-card grid-card'; // Added grid-card modifier class
            card.innerHTML = `
                <img src="${item.image}" alt="${item.province[currentLang]}" class="card-image" onerror="this.src='https://via.placeholder.com/300x180?text=Add+Image'">
                <div class="card-body">
                    <h3>📍 ${item.province[currentLang]}</h3>
<p style="color: #71717a; font-size: 0.98rem; line-height: 1.5; margin-top: 6px;">${item.description[currentLang]}</p>            `;
            
            cardLink.appendChild(card);
            mainList.appendChild(cardLink);
        });
    }    
    function renderQuestion() {
        const activeQuestions = questions[currentLang];
        const currentQ = activeQuestions[currentQuestionIndex];
        const stepInd = document.getElementById('step-indicator');
        const progressBar = document.getElementById('progress-bar');
        const qText = document.getElementById('question-text');
        const t = translations[currentLang];

        if (stepInd) stepInd.innerText = `${t.step_text} ${currentQuestionIndex + 1} ${t.of_text} ${activeQuestions.length}`;
        if (progressBar) progressBar.style.width = `${((currentQuestionIndex + 1) / activeQuestions.length) * 100}%`;
        if (qText) qText.innerText = currentQ.text;
        
        const optionsContainer = document.getElementById('options-container');
        if (!optionsContainer) return;
        optionsContainer.innerHTML = '';

        currentQ.options.forEach(option => {
            const button = document.createElement('button');
            button.className = 'option-card';
            button.innerHTML = `<span>${option.label}</span> <span>&rarr;</span>`;
            button.onclick = () => handleOptionSelect(option.tags);
            optionsContainer.appendChild(button);
        });
    }

    function handleOptionSelect(tags) {
        selectedTags.push(...tags);
        currentQuestionIndex++;
        if (currentQuestionIndex < questions[currentLang].length) {
            renderQuestion();
        } else {
            showResults();
        }
    }

    function showResults() {
        const t = translations[currentLang];
        let recommendations = destinations.filter(dest => 
            Array.isArray(dest.category) 
                ? dest.category.some(cat => selectedTags.includes(cat)) 
                : selectedTags.includes(dest.category)
        );

        if (recommendations.length === 0) {
            recommendations = destinations.slice(0, 3);
        } else {
            recommendations = recommendations.slice(0, 3);
        }

        const listContainer = document.getElementById('recommendations-list');
        if (listContainer) {
            listContainer.innerHTML = '';
            recommendations.forEach(item => {
                const card = document.createElement('div');
                card.className = 'recommendation-card';
                card.innerHTML = `
                    <h3>📍 ${item.province[currentLang]}</h3>
                    <p class="spots-text"><strong>${t.top_spots}</strong> ${item.spots[currentLang]}</p>
                    <p class="desc-text">${item.description[currentLang]}</p>
                `;
                listContainer.appendChild(card);
            });
        }

        document.getElementById('quiz-section').classList.add('hidden');
        document.getElementById('results-section').classList.remove('hidden');
    }

    function closeQuiz() {
        document.getElementById('quizModal').classList.add('hidden');
    }

    function openQuiz() {
        currentQuestionIndex = 0;
        selectedTags = [];
        
        // Explicitly reset the sections when opening the modal
        const welcomeSec = document.getElementById('welcome-section');
        const quizSec = document.getElementById('quiz-section');
        const resultsSec = document.getElementById('results-section');

        if (welcomeSec) welcomeSec.classList.remove('hidden');
        if (quizSec) quizSec.classList.add('hidden'); // Ensure quiz stays hidden!
        if (resultsSec) resultsSec.classList.add('hidden');
        
        document.getElementById('quizModal').classList.remove('hidden');
    }

    function startQuiz() {
        // Hide welcome, show quiz questions ONLY when button is clicked
        document.getElementById('welcome-section').classList.add('hidden');
        document.getElementById('quiz-section').classList.remove('hidden');
        
        renderQuestion();
    }
    document.addEventListener('DOMContentLoaded', function() {
        // Read saved language from browser storage
        const savedLang = localStorage.getItem('selectedLanguage') || 'en';

        // Synchronize global variable
        currentLang = savedLang;

        // Update flag icon and text
        const flagImg = document.getElementById('current-flag');
        const langText = document.getElementById('current-lang-text');

        if (savedLang === 'kh') {
            if (flagImg) flagImg.src = "https://flagcdn.com/w40/kh.png";
            if (langText) langText.innerText = "ភាសាខ្មែរ";
        } else {
            if (flagImg) flagImg.src = "https://flagcdn.com/w40/gb.png";
            if (langText) langText.innerText = "English";
        }

        // Render UI in saved language
        updateStaticText();
        renderAllDestinations();
        renderQuestion();
    });    
document.addEventListener('DOMContentLoaded', () => {
    // Check navigation type (reload vs navigate/back)
    const navEntries = performance.getEntriesByType('navigation');
    const isReload = navEntries.length > 0 && navEntries[0].type === 'reload';

    if (isReload) {
        // Trigger popup after 2 seconds only on page refresh
        setTimeout(() => {
            const quizModal = document.getElementById('quizModal');
            if (quizModal && quizModal.classList.contains('hidden')) {
                openQuiz();
            }
        }, 2000);
    }
});
                document.addEventListener('DOMContentLoaded', () => {
    const statBoxes = document.querySelectorAll('.stat-box');

    const animateCount = (element) => {
        const target = parseInt(element.innerText, 10);
        if (isNaN(target)) return;

        const duration = 1800; // Animation duration in milliseconds
        const stepTime = 20;
        const steps = duration / stepTime;
        const increment = target / steps;
        let current = 0;

        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                element.innerText = target;
                clearInterval(timer);
            } else {
                element.innerText = Math.ceil(current);
            }
        }, stepTime);
    };

    const observer = new IntersectionObserver((entries, observerInstance) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const box = entry.target;
                box.classList.add('visible');

                // Animate number counting for h3
                const numberEl = box.querySelector('h3');
                if (numberEl && !numberEl.classList.contains('counted')) {
                    numberEl.classList.add('counted');
                    animateCount(numberEl);
                }

                observerInstance.unobserve(box);
            }
        });
    }, { threshold: 0.3 });

document.querySelectorAll('.stat-card, .stat-box').forEach(box => observer.observe(box));
});
// Use innerHTML so the <br> tag renders properly as a line break
const welcomeTitle = document.getElementById('welcome-title');
if (welcomeTitle) {
    welcomeTitle.innerHTML = t.welcome_title;
}
</script>
<footer class="site-footer">
  <div class="footer-container">
    
    <!-- COLUMN 1: Brand -->
    <div class="footer-col brand-col">
      <div class="footer-logo">
        <!-- Yellow Location Pin SVG Pin -->
        <svg class="footer-logo-icon" xmlns="http://w3.org" viewBox="0 0 384 512" fill="#ffc107" width="28" height="28">
          <path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"/>
        </svg>
        <h2>TraveLand</h2>
      </div>
      <p class="brand-desc">
        {{ $lang === 'km' 
            ? 'ស្វែងរកគោលដៅទេសចរណ៍ដ៏គួរឱ្យរំភើបបំផុតរបស់ប្រទេសកម្ពុជា និងរៀបចំគម្រោងវិស្សមកាលដ៏ល្អឥតខ្ចោះរបស់អ្នកដោយងាយស្រួល។ យើងចងក្រងមគ្គុទ្ទេសក៍ទេសចរណ៍ល្អៗ និងបទពិសោធន៍ដែលមិនអាចបំភ្លេចបាន ដើម្បីជួយអ្នករុករកដោយទំនុកចិត្ត។' 
            : "Discover Cambodia's most breathtaking destinations and plan your next perfect getaway with ease. We curate the best travel guides, hidden gems, and unforgettable experiences to help you explore with confidence." }}
      </p>
      
      <div class="social-links">
        <!-- Facebook -->
        <a href="#" class="social-icon facebook">
          <svg xmlns="http://w3.org" viewBox="0 0 320 512" fill="#ffffff" width="16" height="16">
            <path d="M80 299.3V256H12v-54.7h68v-40.7c0-67.4 41.2-104 101.2-104 28.7 0 53.4 2.1 60.6 3v70.3h-41.6c-32.7 0-39 15.6-39 38.3V201.3h77.8L328 256h-66.6v238.2H178.4V299.3H80z"/>
          </svg>
        </a>

        <!-- X / Twitter -->
        <a href="#" class="social-icon twitter">
          <svg xmlns="http://w3.org" viewBox="0 0 512 512" fill="#ffffff" width="16" height="16">
            <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
          </svg>
        </a>

        <!-- Instagram -->
        <a href="#" class="social-icon instagram">
          <svg xmlns="http://w3.org" viewBox="0 0 448 512" fill="#ffffff" width="16" height="16">
            <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9s-58-34.4-93.9-36.2c-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2s34.4-58 36.2-93.9c2.1-37 2.1-147.8 0-184.8zM402.5 392.5c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
          </svg>
        </a>

        <!-- LinkedIn -->
        <a href="#" class="social-icon linkedin">
          <svg xmlns="http://w3.org" viewBox="0 0 448 512" fill="#ffffff" width="16" height="16">
            <path d="M100.3 480H7.4V180.9h92.9V480zM53.8 140.1C24.1 140.1 0 115.5 0 85.8 0 56.1 24.1 31 53.8 31c29.7 0 53.8 25.1 53.8 54.8 0 29.7-24.1 54.3-53.8 54.3zM448 480h-92.7V334.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V480h-92.8V180.9h89.1v41h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V480z"/>
          </svg>
        </a>
      </div>
    </div>

    <!-- COLUMN 2: Quick Links -->
    <div class="footer-col">
      <h3>{{ $lang === 'km' ? 'តំណភ្ជាប់រហ័ស' : 'Quick Link' }}</h3>
      <ul class="footer-links">
        <li><a href="#home">{{ $lang === 'km' ? 'ទំព័រដើម' : 'Home' }}</a></li>
        <li><a href="#about">{{ $lang === 'km' ? 'អំពីយើង' : 'About' }}</a></li>
        <li><a href="#services">{{ $lang === 'km' ? 'សេវាកម្ម' : 'Services' }}</a></li>
        <li><a href="#destinations">{{ $lang === 'km' ? 'កញ្ចប់ដំណើរកម្សាន្ត' : 'Trip Packages' }}</a></li>
        <li><a href="#blog">{{ $lang === 'km' ? 'ប្លុក' : 'Blog' }}</a></li>
      </ul>
    </div>

    <!-- COLUMN 3: Support -->
    <div class="footer-col">
      <h3>{{ $lang === 'km' ? 'ជំនួយ' : 'Support' }}</h3>
      <ul class="footer-links">
        <li><a href="#">{{ $lang === 'km' ? 'សេវាថែទាំអតិថិជន' : 'Customer Support' }}</a></li>
        <li><a href="#">{{ $lang === 'km' ? 'គោលការណ៍ឯកជនភាព' : 'Privacy & Policy' }}</a></li>
        <li><a href="#">{{ $lang === 'km' ? 'លក្ខខណ្ឌផ្សេងៗ' : 'Terms & Condition' }}</a></li>
        <li><a href="#">{{ $lang === 'km' ? 'វេទិកាពិភាក្សា' : 'Forum' }}</a></li>
        <li><a href="#">{{ $lang === 'km' ? 'មគ្គុទ្ទេសក៍ទេសចរណ៍' : 'Tour Guide' }}</a></li>
      </ul>
    </div>

    <!-- COLUMN 4: Newsletter -->
    <div class="footer-col newsletter-col">
      <h3>{{ $lang === 'km' ? 'ចុះឈ្មោះទទួលបានព័ត៌មាន' : 'Subscribe Newsletter' }}</h3>
      <p class="newsletter-desc">
        {{ $lang === 'km' 
            ? 'ចូលរួមជាមួយសហគមន៍អ្នករុករករបស់យើង ហើយមិនដែលខកខាននិន្នាការធ្វើដំណើរ មគ្គុទ្ទេសក៍ និងការបំផុសគំនិតចុងក្រោយបំផុតនោះទេ។' 
            : 'Join our community of explorers and never miss out on the latest travel trends, guides, and inspiration.' }}
      </p>
      <form class="newsletter-form">
        <input type="email" placeholder="{{ $lang === 'km' ? 'បញ្ចូលអ៊ីមែល' : 'Enter email' }}" required>
        <button type="submit">→</button>
      </form>
    </div>

  </div>
</footer>
 <script>
document.addEventListener("DOMContentLoaded", function () {
    const navLinks = document.querySelectorAll(".nav-links a");
    const sections = document.querySelectorAll("section, footer, #destinations");

    // 1. Click Handler: Instantly move yellow underline on tap
    navLinks.forEach(link => {
        link.addEventListener("click", function () {
            navLinks.forEach(l => l.classList.remove("active"));
            this.classList.add("active");
        });
    });

    // 2. Scroll Handler: Move the yellow underline automatically as the user scrolls down the page
    window.addEventListener("scroll", () => {
        let currentSectionId = "";
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            
            // Checks if the section is currently occupying the middle-top area of the screen
            if (window.scrollY >= (sectionTop - 150)) {
                currentSectionId = section.getAttribute("id");
            }
        });

        if (currentSectionId) {
            navLinks.forEach(link => {
                link.classList.remove("active");
                if (link.getAttribute("href") === `#${currentSectionId}`) {
                    link.classList.add("active");
                }
            });
        }
    });
});
let currentQuestionIndex = 0;
    let selectedTags = [];

    // Trigger quiz pop-up 2s after reload only
    document.addEventListener('DOMContentLoaded', () => {
        const navEntries = performance.getEntriesByType('navigation');
        const isReload = navEntries.length > 0 && navEntries[0].type === 'reload';

        if (isReload) {
            setTimeout(() => {
                const quizModal = document.getElementById('quizModal');
                if (quizModal && quizModal.classList.contains('hidden')) {
                    openQuiz();
                }
            }, 2000);
        }
    });

    function openQuiz() {
        currentQuestionIndex = 0;
        selectedTags = [];
        
        document.getElementById('welcome-section').classList.remove('hidden');
        document.getElementById('quiz-section').classList.add('hidden');
        document.getElementById('results-section').classList.add('hidden');
        
        document.getElementById('quizModal').classList.remove('hidden');
    }

    function startQuiz() {
        document.getElementById('welcome-section').classList.add('hidden');
        document.getElementById('quiz-section').classList.remove('hidden');
        renderQuestion();
    }

    function closeQuiz() {
        document.getElementById('quizModal').classList.add('hidden');
    }

    function renderQuestion() {
        const currentQuestions = questions[currentLang] || questions['en'];
        const totalQuestions = currentQuestions.length;
        const currentQ = currentQuestions[currentQuestionIndex];
        const t = translations[currentLang];

        document.getElementById('step-indicator').innerText = `${t.step_text || 'Step'} ${currentQuestionIndex + 1} ${t.of_text || 'of'} ${totalQuestions}`;
        
        const progressPercent = ((currentQuestionIndex + 1) / totalQuestions) * 100;
        document.getElementById('progress-bar').style.width = `${progressPercent}%`;

        document.getElementById('question-text').innerText = currentQ.text;

        const optionsContainer = document.getElementById('options-container');
        optionsContainer.innerHTML = '';

        currentQ.options.forEach(option => {
            const btn = document.createElement('button');
            btn.className = 'option-btn';
            btn.innerText = option.label;
            btn.onclick = () => selectOption(option.tags);
            optionsContainer.appendChild(btn);
        });
    }

    function selectOption(tags) {
        selectedTags.push(...tags);
        const currentQuestions = questions[currentLang] || questions['en'];
        
        if (currentQuestionIndex < currentQuestions.length - 1) {
            currentQuestionIndex++;
            renderQuestion();
        } else {
            showResults();
        }
    }
</script>


</body>
</html>