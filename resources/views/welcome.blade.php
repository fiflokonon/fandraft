<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FanDraft Africa - La plateforme du basketball africain</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-green: #04534D;
            --light-green: #D0E2E5;
            --white: #ffffff;
            --black: #000000;
            --gray-light: #f5f5f5;
            --gray-medium: #888;
            --gray-dark: #333;
            --orange: #ff6b35;
            --yellow: #ffd700;
        }

        body {
            font-family: Montserrat, 'regular', serif;
            line-height: 1.6;
            color: var(--gray-dark);
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Basketball animations */
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-20px); }
            60% { transform: translateY(-10px); }
        }

        @keyframes dribble {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-30px); }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        @keyframes court-lines {
            0% { stroke-dashoffset: 1000; }
            100% { stroke-dashoffset: 0; }
        }

        /* Header */
        header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(4, 83, 77, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            color: var(--primary-green);
            position: relative;
        }

        .logo::after {
            content: "🏀";
            margin-left: 10px;
            animation: dribble 2s ease-in-out infinite;
            display: inline-block;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--gray-dark);
            font-weight: 500;
            transition: all 0.3s;
            position: relative;
            padding: 0.5rem 0;
        }

        .nav-links a::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-green);
            transition: width 0.3s;
        }

        .nav-links a:hover::after {
            width: 100%;
        }

        .nav-links a:hover {
            color: var(--primary-green);
            transform: translateY(-2px);
        }

        .language-toggle {
            background: linear-gradient(135deg, var(--primary-green), #065a54);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(4, 83, 77, 0.3);
        }

        .language-toggle:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(4, 83, 77, 0.4);
        }

        /* Hero Section with Basketball Court */
        .hero {
            background: linear-gradient(135deg, var(--primary-green), #065a54);
            color: white;
            padding: 120px 0 100px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><defs><pattern id="court" patternUnits="userSpaceOnUse" width="60" height="60"><rect width="60" height="60" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="1"/></pattern></defs><rect width="1200" height="600" fill="url(%23court)"/></svg>');
            opacity: 0.3;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 4rem;
            margin-bottom: 1rem;
            font-weight: bold;
            animation: fadeInUp 1s ease-out;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: 1.4rem;
            margin-bottom: 2rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            opacity: 0.95;
            animation: fadeInUp 1s ease-out 0.3s both;
        }

        .cta-button {
            background: linear-gradient(135deg, var(--orange), #ff8c42);
            color: white;
            padding: 1.2rem 2.5rem;
            border: none;
            border-radius: 50px;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.4s;
            text-decoration: none;
            display: inline-block;
            box-shadow: 0 8px 25px rgba(255, 107, 53, 0.4);
            animation: fadeInUp 1s ease-out 0.6s both;
        }

        .cta-button:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 15px 35px rgba(255, 107, 53, 0.6);
        }

        /* Floating basketballs */
        .basketball-float {
            position: absolute;
            color: var(--orange);
            font-size: 2rem;
            opacity: 0.6;
            animation: bounce 3s ease-in-out infinite;
        }

        .basketball-1 { top: 20%; left: 10%; animation-delay: 0s; }
        .basketball-2 { top: 60%; right: 15%; animation-delay: 1s; }
        .basketball-3 { top: 40%; left: 80%; animation-delay: 2s; }

        /* Features Section */
        .features {
            padding: 100px 0;
            background: var(--gray-light);
            position: relative;
        }

        .section-title {
            text-align: center;
            font-size: 3rem;
            color: var(--primary-green);
            margin-bottom: 3rem;
            font-weight: bold;
            position: relative;
        }

        .section-title::after {
            content: "";
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--orange), var(--yellow));
            border-radius: 2px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
            margin-bottom: 4rem;
        }

        .feature-card {
            background: white;
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
            transition: all 0.4s ease;
            border: 3px solid transparent;
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 107, 53, 0.1), transparent);
            transition: left 0.6s;
        }

        .feature-card:hover::before {
            left: 100%;
        }

        .feature-card:hover {
            transform: translateY(-10px) rotateX(5deg);
            border-color: var(--orange);
            box-shadow: 0 20px 40px rgba(4, 83, 77, 0.2);
        }

        .feature-icon {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, var(--light-green), #b8d4d7);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2.5rem;
            color: var(--primary-green);
            transition: all 0.4s;
            position: relative;
        }

        .feature-card:hover .feature-icon {
            transform: scale(1.1) rotateY(360deg);
            background: linear-gradient(135deg, var(--orange), var(--yellow));
            color: white;
        }

        .feature-card h3 {
            color: var(--primary-green);
            margin-bottom: 1rem;
            font-size: 1.4rem;
            transition: color 0.3s;
        }

        .feature-card:hover h3 {
            color: var(--orange);
        }

        /* Mobile App Preview with Enhanced Animation */
        .app-preview {
            padding: 100px 0;
            background: linear-gradient(45deg, var(--white), var(--light-green));
            position: relative;
        }

        .app-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .app-text h2 {
            font-size: 3rem;
            color: var(--primary-green);
            margin-bottom: 1.5rem;
            position: relative;
        }

        .app-text h2::before {
            content: "📱";
            position: absolute;
            left: -60px;
            top: 0;
            font-size: 2.5rem;
            animation: pulse 2s ease-in-out infinite;
        }

        .app-text p {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            color: var(--gray-dark);
        }

        .app-features {
            list-style: none;
            margin-bottom: 2rem;
        }

        .app-features li {
            padding: 1rem 0;
            position: relative;
            padding-left: 2rem;
            transition: all 0.3s;
            border-radius: 10px;
        }

        .app-features li:hover {
            background: rgba(4, 83, 77, 0.05);
            transform: translateX(10px);
        }

        .app-features li::before {
            content: "🚀";
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.2rem;
            transition: all 0.3s;
        }

        .app-features li:hover::before {
            transform: translateY(-50%) scale(1.2);
        }

        @keyframes shimmer {
            0% { left: -100%; }
            100% { left: 100%; }
        }

        /* Basketball Court SVG Background */
        .court-bg {
            position: absolute;
            bottom: -50px;
            right: -50px;
            opacity: 0.1;
            width: 300px;
            height: 200px;
        }

        /* Enhanced Features with Basketball Elements */
        .feature-icon.basketball {
            position: relative;
            overflow: visible;
        }

        .feature-icon.basketball::after {
            content: "🏀";
            position: absolute;
            top: -20px;
            right: -20px;
            font-size: 1.5rem;
            animation: dribble 2s ease-in-out infinite;
        }

        /* Target Audience with Dynamic Cards */
        .target-audience {
            padding: 100px 0;
            background: var(--light-green);
            position: relative;
        }

        .audience-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2.5rem;
        }

        .audience-card {
            background: white;
            padding: 2.5rem;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.5s;
            position: relative;
            overflow: hidden;
        }

        .audience-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--orange), var(--yellow), var(--orange));
            transform: scaleX(0);
            transition: transform 0.5s;
        }

        .audience-card:hover::before {
            transform: scaleX(1);
        }

        .audience-card:hover {
            transform: translateY(-15px) rotateX(5deg);
            box-shadow: 0 25px 50px rgba(4, 83, 77, 0.2);
        }

        .audience-card h3 {
            color: var(--primary-green);
            margin-bottom: 1rem;
            font-size: 1.3rem;
            position: relative;
        }

        .audience-card h3::after {
            content: "⭐";
            position: absolute;
            right: -30px;
            top: 0;
            opacity: 0;
            transition: all 0.3s;
        }

        .audience-card:hover h3::after {
            opacity: 1;
            right: -20px;
        }

        /* Impact Section with Animated Counters */
        .impact {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--primary-green), #065a54);
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .impact::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 400"><circle cx="100" cy="100" r="30" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="2"/><circle cx="300" cy="200" r="25" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="2"/><circle cx="500" cy="50" r="35" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="2"/><circle cx="800" cy="150" r="20" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="2"/><circle cx="1000" cy="80" r="28" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="2"/></svg>');
            animation: court-lines 10s linear infinite;
        }

        .impact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3rem;
            margin-top: 4rem;
            position: relative;
            z-index: 2;
        }

        .impact-item {
            padding: 2rem;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.4s;
        }

        .impact-item:hover {
            transform: scale(1.05);
            background: rgba(255, 255, 255, 0.15);
        }

        .impact-item h3 {
            font-size: 3rem;
            margin-bottom: 0.5rem;
            color: var(--yellow);
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            animation: pulse 3s ease-in-out infinite;
        }

        .impact-item p {
            font-size: 1.1rem;
        }

        /* Enhanced Footer */
        footer {
            background: var(--gray-dark);
            color: white;
            padding: 60px 0 30px;
            position: relative;
            overflow: hidden;
        }

        footer::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--orange), var(--yellow), var(--primary-green), var(--orange));
            animation: shimmer 4s ease-in-out infinite;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            color: var(--yellow);
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        .footer-section p, .footer-section a {
            color: #ccc;
            text-decoration: none;
            transition: all 0.3s;
        }

        .footer-section a:hover {
            color: var(--orange);
            transform: translateX(5px);
        }

        /* Floating Action Elements */
        .floating-basketball {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--orange), #ff8c42);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            box-shadow: 0 10px 30px rgba(255, 107, 53, 0.4);
            z-index: 1000;
            transition: all 0.3s;
            animation: bounce 2s ease-in-out infinite;
        }

        .floating-basketball:hover {
            transform: scale(1.1);
            box-shadow: 0 15px 40px rgba(255, 107, 53, 0.6);
        }

        /* Additional Basketball Elements */
        .court-lines {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
        }

        .court-lines svg {
            width: 100%;
            height: 100%;
            opacity: 0.1;
        }

        /* Enhanced Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 2.8rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .app-content {
                grid-template-columns: 1fr;
            }

            .section-title {
                font-size: 2.2rem;
            }

            .app-text h2::before {
                display: none;
            }

            .floating-basketball {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }
        }

        /* Language switching */
        [data-lang="en"] .fr {
            display: none;
        }

        [data-lang="fr"] .en {
            display: none;
        }

        /* Loading Animation */
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: var(--primary-green);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            transition: opacity 0.5s;
        }

        .loading-basketball {
            width: 80px;
            height: 80px;
            background: var(--orange);
            border-radius: 50%;
            position: relative;
            animation: bounce 1s ease-in-out infinite;
        }

        .loading-basketball::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 10%;
            right: 10%;
            height: 2px;
            background: var(--gray-dark);
            border-radius: 1px;
        }

        .loading-basketball::after {
            content: "";
            position: absolute;
            top: 10%;
            bottom: 10%;
            left: 50%;
            width: 2px;
            background: var(--gray-dark);
            border-radius: 1px;
            transform: translateX(-50%);
        }
        @keyframes swoosh {
            0% { transform: translateX(-100%); opacity: 0; }
            50% { opacity: 1; }
            100% { transform: translateX(100%); opacity: 0; }
        }

        /* Additional Basketball Court Elements */
        .hero-court {
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            height: 150px;
            opacity: 0.2;
            pointer-events: none;
        }

        .hero-court svg {
            width: 100%;
            height: 100%;
        }

        /* Enhanced Mobile Responsiveness */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .app-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .section-title {
                font-size: 2.2rem;
            }

            .app-text h2::before {
                display: none;
            }

            .floating-basketball {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
                bottom: 20px;
                right: 20px;
            }

            .basketball-float {
                font-size: 1.5rem;
            }

            .feature-icon {
                width: 80px;
                height: 80px;
                font-size: 2rem;
            }

            .impact-item h3 {
                font-size: 2.5rem;
            }

            .features-grid,
            .audience-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
        }

        @media (max-width: 480px) {
            .hero h1 {
                font-size: 2rem;
            }

            .cta-button {
                padding: 1rem 2rem;
                font-size: 1rem;
            }

            .section-title {
                font-size: 1.8rem;
            }

            .app-text h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body data-lang="fr">
<!-- Loading Animation -->
<div class="loading-overlay" id="loading">
    <div class="loading-basketball"></div>
</div>

<header>
    <nav class="container">
        <div class="logo">FanDraft</div>
        <ul class="nav-links">
            <li><a href="#features"><span class="fr">Fonctionnalités</span><span class="en">Features</span></a></li>
            <li><a href="#app"><span class="fr">Application</span><span class="en">App</span></a></li>
            <li><a href="#impact"><span class="fr">Impact</span><span class="en">Impact</span></a></li>
            <li><a href="#contact"><span class="fr">Contact</span><span class="en">Contact</span></a></li>
        </ul>
        <button class="language-toggle" onclick="toggleLanguage()">
            <span class="fr">EN</span><span class="en">FR</span>
        </button>
    </nav>
</header>

<section class="hero">
    <div class="basketball-float basketball-1">🏀</div>
    <div class="basketball-float basketball-2">🏀</div>
    <div class="basketball-float basketball-3">🏀</div>
    <div class="container">
        <div class="hero-content">
            <h1>
                <span class="fr">L'avenir du basketball africain</span>
                <span class="en">The future of African basketball</span>
            </h1>
            <p>
                <span class="fr">Connectez les talents africains aux opportunités mondiales grâce à notre plateforme révolutionnaire qui transforme le scouting et le recrutement</span>
                <span class="en">Connect African talents to global opportunities through our revolutionary platform that transforms scouting and recruitment</span>
            </p>
            <a href="#features" class="cta-button">
                <span class="fr">🚀 Découvrir la magie</span>
                <span class="en">🚀 Discover the magic</span>
            </a>
        </div>
    </div>
    <svg class="court-bg" viewBox="0 0 300 200">
        <path d="M50 50 Q150 20 250 50 Q150 80 50 50" stroke="rgba(255,255,255,0.2)" stroke-width="2" fill="none"/>
        <circle cx="150" cy="50" r="30" stroke="rgba(255,255,255,0.2)" stroke-width="2" fill="none"/>
    </svg>
</section>

<section id="features" class="features">
    <div class="container">
        <h2 class="section-title">
            <span class="fr">🔥 Fonctionnalités de feu</span>
            <span class="en">🔥 Fire Features</span>
        </h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon basketball">👤</div>
                <h3>
                    <span class="fr">Profils de champions</span>
                    <span class="en">Champion Profiles</span>
                </h3>
                <p>
                    <span class="fr">Fiches complètes avec stats explosives, vidéos highlights épiques et parcours détaillés pour chaque futur MVP</span>
                    <span class="en">Complete profiles with explosive stats, epic highlight videos and detailed journeys for every future MVP</span>
                </p>
            </div>
            <div class="feature-card">
                <div class="feature-icon basketball">🎯</div>
                <h3>
                    <span class="fr">Radar à talents</span>
                    <span class="en">Talent Radar</span>
                </h3>
                <p>
                    <span class="fr">Algorithme intelligent pour dénicher les perles rares avec filtres ultra-précis par poste, âge, pays et performances clutch</span>
                    <span class="en">Smart algorithm to uncover hidden gems with ultra-precise filters by position, age, country and clutch performance</span>
                </p>
            </div>
            <div class="feature-card">
                <div class="feature-icon basketball">⚡</div>
                <h3>
                    <span class="fr">Vitesse éclair</span>
                    <span class="en">Lightning Speed</span>
                </h3>
                <p>
                    <span class="fr">Interface ultra-rapide sur mobile et web, synchronisation instantanée comme un crossover parfait</span>
                    <span class="en">Ultra-fast interface on mobile and web, instant sync like a perfect crossover</span>
                </p>
            </div>
            <div class="feature-card">
                <div class="feature-icon basketball">🌍</div>
                <h3>
                    <span class="fr">Révolution continentale</span>
                    <span class="en">Continental Revolution</span>
                </h3>
                <p>
                    <span class="fr">54 pays, des milliers de talents, une seule plateforme pour révolutionner le basket africain</span>
                    <span class="en">54 countries, thousands of talents, one platform to revolutionize African basketball</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section id="app" class="app-preview">
    <div class="container">
        <div class="app-content">
            <div class="app-text">
                <h2>
                    <span class="fr">Ça change</span>
                    <span class="en">Game-changing app</span>
                </h2>
                <p>
                    <span class="fr">Plus qu'une simple app, c'est votre passeport vers les ligues internationales ! Découvrez l'interface qui connecte directement les talents africains aux scouts du monde entier.</span>
                    <span class="en">More than just an app, it's your passport to international leagues! Discover the interface that directly connects African talents to scouts worldwide.</span>
                </p>
                <ul class="app-features">
                    <li>
                        <span class="fr">Interface bilingue ultra-fluide</span>
                        <span class="en">Ultra-smooth bilingual interface</span>
                    </li>
                    <li>
                        <span class="fr">Notifications push pour les opportunités</span>
                        <span class="en">Push notifications for opportunities</span>
                    </li>
                    <li>
                        <span class="fr">Mode offline pour les zones rurales</span>
                        <span class="en">Offline mode for rural areas</span>
                    </li>
                    <li>
                        <span class="fr">Export instantané des rapports scouts</span>
                        <span class="en">Instant export of scout reports</span>
                    </li>
                    <li>
                        <span class="fr">Streaming live des matches</span>
                        <span class="en">Live match streaming</span>
                    </li>
                </ul>
                <a href="#" class="cta-button">
                    <span class="fr">🏀 Rejoindre la révolution</span>
                    <span class="en">🏀 Join the revolution</span>
                </a>
            </div>
            <div class="">
                <img src="/phone-a.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="target-audience">
    <div class="container">
        <h2 class="section-title">
            <span class="fr">🎯 Notre équipe de rêve</span>
            <span class="en">🎯 Our dream team</span>
        </h2>
        <div class="audience-grid">
            <div class="audience-card">
                <h3>
                    <span class="fr">🌟 Future superstars</span>
                    <span class="en">🌟 Future superstars</span>
                </h3>
                <p>
                    <span class="fr">Joueurs africains prêts à conquérir le monde ! Votre talent mérite d'être vu par les meilleurs scouts</span>
                    <span class="en">African players ready to conquer the world! Your talent deserves to be seen by the best scouts</span>
                </p>
            </div>
            <div class="audience-card">
                <h3>
                    <span class="fr">🕵️ Chasseurs de talents</span>
                    <span class="en">🕵️ Talent Hunters</span>
                </h3>
                <p>
                    <span class="fr">Recruteurs et agents, découvrez les diamants bruts d'Afrique avec nos outils de pointe</span>
                    <span class="en">Recruiters and agents, discover Africa's rough diamonds with our cutting-edge tools</span>
                </p>
            </div>
            <div class="audience-card">
                <h3>
                    <span class="fr">🏆 Organisations sportives</span>
                    <span class="en">🏆 Sports Organizations</span>
                </h3>
                <p>
                    <span class="fr">Clubs et ligues, montrez au monde la puissance de vos championnats africains</span>
                    <span class="en">Clubs and leagues, show the world the power of your African championships</span>
                </p>
            </div>
            <div class="audience-card">
                <h3>
                    <span class="fr">📺 Médias passionnés</span>
                    <span class="en">📺 Passionate Media</span>
                </h3>
                <p>
                    <span class="fr">Journalistes et fans, accédez aux histoires incroyables du basketball africain</span>
                    <span class="en">Journalists and fans, access the incredible stories of African basketball</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section id="impact" class="impact">
    <div class="container">
        <h2 class="section-title" style="color: white">
            <span class="fr">💥 L'impact qui secoue le terrain</span>
            <span class="en">💥 Impact that shakes the court</span>
        </h2>
        <div class="impact-grid">
            <div class="impact-item">
                <h3 class="counter" data-target="54">0</h3>
                <p>
                    <span class="fr">🌍 Pays africains dans la course</span>
                    <span class="en">🌍 African countries in the race</span>
                </p>
            </div>
            <div class="impact-item">
                <h3 class="counter" data-target="25000">0</h3>
                <p>
                    <span class="fr">🏀 Talents référencés et prêts</span>
                    <span class="en">🏀 Talents indexed and ready</span>
                </p>
            </div>
            <div class="impact-item">
                <h3 class="counter" data-target="850">0</h3>
                <p>
                    <span class="fr">🏛️ Clubs partenaires actifs</span>
                    <span class="en">🏛️ Active partner clubs</span>
                </p>
            </div>
            <div class="impact-item">
                <h3 class="counter" data-target="320">0</h3>
                <p>
                    <span class="fr">🔍 Scouts connectés</span>
                    <span class="en">🔍 Connected scouts</span>
                </p>
            </div>
        </div>
        <div style="margin-top: 4rem; padding: 3rem; background: rgba(255,255,255,0.1); border-radius: 20px; backdrop-filter: blur(10px);">
            <h3 style="font-size: 2rem; margin-bottom: 1rem; color: var(--yellow);">
                <span class="fr">🚀 Prochaine étape : Conquérir le monde !</span>
                <span class="en">🚀 Next step: Conquer the world!</span>
            </h3>
            <p style="font-size: 1.2rem; opacity: 0.9;">
                <span class="fr">Avec notre MVP prêt en 20 jours, nous transformons chaque dribble en opportunité mondiale</span>
                <span class="en">With our MVP ready in 20 days, we transform every dribble into a global opportunity</span>
            </p>
        </div>
    </div>
</section>

<footer id="contact">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>🏀 FanDraft Africa</h3>
                <p>
                    <span class="fr">La révolution du basketball africain commence ici. Rejoignez le mouvement qui connecte l'Afrique au monde !</span>
                    <span class="en">The African basketball revolution starts here. Join the movement connecting Africa to the world!</span>
                </p>
            </div>
            <div class="footer-section">
                <h3 class="fr">📞 Nous contacter</h3>
                <h3 class="en">📞 Contact us</h3>
                <p>📧 fiflokonon@gmail.com</p>
                <p>📱 +229 01 68 94 76 12</p>
                <p>
                    <span class="fr">Cotonou, Bénin</span>
                    <span class="en">Cotonou, Benin</span>
                </p>
            </div>
            <div class="footer-section">
                <h3>
                    <span class="fr">Rejoignez la communauté</span>
                    <span class="en">Join the community</span>
                </h3>
                <p><a href="https://www.facebook.com/fifonsi.lokonon.1">Facebook</a></p>
                <p><a href="#">Twitter</a></p>
                <p><a href="https://www.linkedin.com/in/arnaud-fifonsi-lokonon">LinkedIn</a></p>
                <p><a href="#">Instagram</a></p>
            </div>
        </div>
        <div style="text-align: center; padding-top: 2rem; border-top: 1px solid rgba(255,255,255,0.1);">
            <p>&copy; {{ date("Y") }} FanDraft Africa.
                <span class="fr">Tous droits réservés.</span>
                <span class="en">All rights reserved.</span>
            </p>
        </div>
    </div>
</footer>

<!-- Floating Basketball Action Button -->
<div class="floating-basketball" onclick="scrollToTop()">⬆️</div>

<script>
    // Hide loading screen after page loads
    window.addEventListener('load', function() {
        setTimeout(() => {
            const loading = document.getElementById('loading');
            loading.style.opacity = '0';
            setTimeout(() => {
                loading.style.display = 'none';
            }, 500);
        }, 1000);
    });

    function toggleLanguage() {
        const body = document.body;
        const currentLang = body.getAttribute('data-lang');
        const newLang = currentLang === 'fr' ? 'en' : 'fr';
        body.setAttribute('data-lang', newLang);

        // Add a little celebration animation
        const button = document.querySelector('.language-toggle');
        button.style.transform = 'scale(0.9)';
        setTimeout(() => {
            button.style.transform = 'scale(1)';
        }, 150);
    }

    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }

    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Enhanced header scroll effect
    window.addEventListener('scroll', function() {
        const header = document.querySelector('header');
        const scrolled = window.scrollY > 100;

        if (scrolled) {
            header.style.background = 'rgba(255, 255, 255, 0.95)';
            header.style.backdropFilter = 'blur(15px)';
            header.style.boxShadow = '0 4px 30px rgba(4, 83, 77, 0.15)';
        } else {
            header.style.background = 'rgba(255, 255, 255, 0.95)';
            header.style.backdropFilter = 'blur(10px)';
            header.style.boxShadow = '0 2px 20px rgba(4, 83, 77, 0.1)';
        }
    });

    // Animated counter for impact section
    function animateCounters() {
        const counters = document.querySelectorAll('.counter');
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            const duration = 2000; // 2 seconds
            const step = target / (duration / 16); // 60fps
            let current = 0;

            const updateCounter = () => {
                current += step;
                if (current < target) {
                    counter.textContent = Math.floor(current).toLocaleString();
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target.toLocaleString() + '+';
                }
            };
            updateCounter();
        });
    }

    // Enhanced intersection observer for animations
    const observerOptions = {
        threshold: 0.2,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';

                // Trigger counter animation for impact section
                if (entry.target.classList.contains('impact-grid')) {
                    animateCounters();
                }

                // Add staggered animation for grid items
                const gridItems = entry.target.querySelectorAll('.feature-card, .audience-card, .impact-item');
                gridItems.forEach((item, index) => {
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, index * 150);
                });
            }
        });
    }, observerOptions);

    // Observe all animated elements
    document.querySelectorAll('.feature-card, .audience-card, .impact-grid, .app-text').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(50px)';
        card.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
        observer.observe(card);
    });

    // Basketball floating animation on mousemove
    document.addEventListener('mousemove', function(e) {
        const basketballs = document.querySelectorAll('.basketball-float');
        basketballs.forEach((ball, index) => {
            const speed = (index + 1) * 0.02;
            const x = (e.clientX * speed) % 100;
            const y = (e.clientY * speed) % 100;
            ball.style.transform = `translate(${x}px, ${y}px)`;
        });
    });

    // Add click celebration effect
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('cta-button') || e.target.classList.contains('feature-card')) {
            createCelebration(e.clientX, e.clientY);
        }
    });

    function createCelebration(x, y) {
        const celebration = document.createElement('div');
        celebration.style.position = 'fixed';
        celebration.style.left = x + 'px';
        celebration.style.top = y + 'px';
        celebration.style.pointerEvents = 'none';
        celebration.style.zIndex = '9999';
        celebration.innerHTML = '🏀🔥⭐';
        celebration.style.fontSize = '2rem';
        celebration.style.animation = 'bounce 1s ease-out';
        document.body.appendChild(celebration);

        setTimeout(() => {
            celebration.remove();
        }, 1000);
    }

    // Random basketball facts tooltip (Easter egg)
    const basketballFacts = {
        fr: [
            "🏀 Saviez-vous ? Le basketball a été inventé avec des paniers de pêches !",
            "🔥 Le plus grand nombre de points en un match NBA est de 100 !",
            "⚡ Un dunk génère une force de 1200 livres sur le panier !",
            "🌍 L'Afrique produit de plus en plus de stars NBA chaque année !"
        ],
        en: [
            "🏀 Did you know? Basketball was invented using peach baskets!",
            "🔥 The highest score in an NBA game is 100 points!",
            "⚡ A dunk generates 1200 pounds of force on the rim!",
            "🌍 Africa produces more and more NBA stars every year!"
        ]
    };

    // Easter egg: Click logo 5 times for surprise
    let logoClicks = 0;
    document.querySelector('.logo').addEventListener('click', function() {
        logoClicks++;
        if (logoClicks === 5) {
            const lang = document.body.getAttribute('data-lang');
            const facts = basketballFacts[lang];
            const randomFact = facts[Math.floor(Math.random() * facts.length)];

            const popup = document.createElement('div');
            popup.style.cssText = `
                    position: fixed;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                    background: linear-gradient(135deg, var(--orange), var(--yellow));
                    color: white;
                    padding: 2rem;
                    border-radius: 20px;
                    box-shadow: 0 20px 60px rgba(0,0,0,0.3);
                    z-index: 10000;
                    text-align: center;
                    max-width: 400px;
                    font-weight: bold;
                    animation: bounce 0.5s ease-out;
                `;
            popup.innerHTML = randomFact + '<br><br><button onclick="this.parentElement.remove()" style="background: white; color: var(--orange); border: none; padding: 0.5rem 1rem; border-radius: 25px; cursor: pointer; font-weight: bold;">OK 🏀</button>';
            document.body.appendChild(popup);
            logoClicks = 0;

            setTimeout(() => {
                if (popup.parentElement) popup.remove();
            }, 5000);
        }
    });

    // Add particle effect on scroll
    let particles = [];
    function createParticle() {
        if (particles.length < 10) {
            const particle = document.createElement('div');
            particle.style.cssText = `
                    position: fixed;
                    width: 4px;
                    height: 4px;
                    background: var(--orange);
                    border-radius: 50%;
                    pointer-events: none;
                    z-index: 1;
                    opacity: 0.7;
                `;
            particle.style.left = Math.random() * window.innerWidth + 'px';
            particle.style.top = Math.random() * window.innerHeight + 'px';
            document.body.appendChild(particle);
            particles.push(particle);

            setTimeout(() => {
                particle.remove();
                particles = particles.filter(p => p !== particle);
            }, 3000);
        }
    }

    // Create particles on scroll
    let lastScrollY = window.scrollY;
    window.addEventListener('scroll', function() {
        const currentScrollY = window.scrollY;
        if (Math.abs(currentScrollY - lastScrollY) > 50) {
            createParticle();
            lastScrollY = currentScrollY;
        }
    });

    // Basketball court line animation
    function animateCourtLines() {
        const courtSvgs = document.querySelectorAll('.court-bg path, .court-bg circle');
        courtSvgs.forEach((element, index) => {
            element.style.strokeDasharray = '1000';
            element.style.strokeDashoffset = '1000';
            element.style.animation = `court-lines 3s ease-in-out ${index * 0.5}s forwards infinite alternate`;
        });
    }

    // Initialize court animation
    setTimeout(animateCourtLines, 2000);

    // Add sound effect simulation (visual feedback)
    function addSwooshEffect(element) {
        element.addEventListener('mouseenter', function() {
            const swoosh = document.createElement('div');
            swoosh.style.cssText = `
                    position: absolute;
                    top: 50%;
                    left: 0;
                    right: 0;
                    height: 2px;
                    background: linear-gradient(90deg, transparent, var(--orange), transparent);
                    z-index: 5;
                    animation: swoosh 0.3s ease-out;
                `;
            this.style.position = 'relative';
            this.appendChild(swoosh);

            setTimeout(() => swoosh.remove(), 300);
        });
    }

    // Add swoosh effect to interactive elements
    document.querySelectorAll('.cta-button, .feature-card, .audience-card').forEach(addSwooshEffect);
</script>
</body>
</html>
