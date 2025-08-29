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
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: var(--gray-dark);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background: var(--white);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
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
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: var(--primary-green);
        }

        .language-toggle {
            background: var(--primary-green);
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 500;
            transition: background 0.3s;
        }

        .language-toggle:hover {
            background: #036156;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, var(--primary-green), #065a54);
            color: white;
            padding: 120px 0 80px;
            text-align: center;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            font-weight: bold;
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            opacity: 0.9;
        }

        .cta-button {
            background: var(--light-green);
            color: var(--primary-green);
            padding: 1rem 2rem;
            border: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        /* Features Section */
        .features {
            padding: 80px 0;
            background: var(--gray-light);
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            color: var(--primary-green);
            margin-bottom: 3rem;
            font-weight: bold;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-bottom: 4rem;
        }

        .feature-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            width: 80px;
            height: 80px;
            background: var(--light-green);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 2rem;
            color: var(--primary-green);
        }

        .feature-card h3 {
            color: var(--primary-green);
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        /* Mobile App Preview */
        .app-preview {
            padding: 80px 0;
            background: white;
        }

        .app-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .app-text h2 {
            font-size: 2.5rem;
            color: var(--primary-green);
            margin-bottom: 1.5rem;
        }

        .app-text p {
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            color: var(--gray-dark);
        }

        .app-features {
            list-style: none;
            margin-bottom: 2rem;
        }

        .app-features li {
            padding: 0.5rem 0;
            position: relative;
            padding-left: 1.5rem;
        }

        .app-features li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: var(--primary-green);
            font-weight: bold;
        }

        .phone-mockups {
            display: flex;
            gap: 1rem;
            justify-content: center;
        }

        .phone {
            width: 200px;
            height: 400px;
            background: var(--gray-dark);
            border-radius: 25px;
            padding: 20px 15px;
            position: relative;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }

        .phone::before {
            content: "";
            position: absolute;
            top: 8px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 6px;
            background: var(--gray-medium);
            border-radius: 3px;
        }

        .phone-screen {
            width: 100%;
            height: 100%;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            position: relative;
        }

        .screen-content {
            padding: 20px 15px;
            height: 100%;
        }

        .screen-header {
            background: var(--primary-green);
            color: white;
            padding: 15px;
            margin: -20px -15px 20px;
            text-align: center;
            font-weight: bold;
        }

        .player-card {
            background: var(--light-green);
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 15px;
            text-align: center;
        }

        .player-avatar {
            width: 60px;
            height: 60px;
            background: var(--primary-green);
            border-radius: 50%;
            margin: 0 auto 10px;
        }

        .player-name {
            font-weight: bold;
            color: var(--primary-green);
            margin-bottom: 5px;
        }

        .player-stats {
            font-size: 0.9rem;
            color: var(--gray-dark);
        }

        /* Target Audience */
        .target-audience {
            padding: 80px 0;
            background: var(--light-green);
        }

        .audience-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .audience-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .audience-card h3 {
            color: var(--primary-green);
            margin-bottom: 1rem;
        }

        /* Impact Section */
        .impact {
            padding: 80px 0;
            background: var(--primary-green);
            color: white;
            text-align: center;
        }

        .impact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .impact-item h3 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            color: var(--light-green);
        }

        /* Footer */
        footer {
            background: var(--gray-dark);
            color: white;
            padding: 40px 0;
            text-align: center;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h3 {
            color: var(--light-green);
            margin-bottom: 1rem;
        }

        .footer-section p, .footer-section a {
            color: #ccc;
            text-decoration: none;
        }

        .footer-section a:hover {
            color: var(--light-green);
        }

        /* Responsive */
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
            }

            .phone-mockups {
                flex-direction: column;
                align-items: center;
            }

            .section-title {
                font-size: 2rem;
            }
        }

        /* Language switching */
        [data-lang="en"] .fr {
            display: none;
        }

        [data-lang="fr"] .en {
            display: none;
        }
    </style>
</head>
<body data-lang="fr">
<header>
    <nav class="container">
        <div class="logo">FanDraft Africa</div>
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
    <div class="container">
        <h1>
            <span class="fr">L'avenir du basketball africain</span>
            <span class="en">The future of African basketball</span>
        </h1>
        <p>
            <span class="fr">Connectez les talents africains aux opportunités mondiales grâce à notre plateforme révolutionnaire</span>
            <span class="en">Connect African talents to global opportunities through our revolutionary platform</span>
        </p>
        <a href="#features" class="cta-button">
            <span class="fr">Découvrir la plateforme</span>
            <span class="en">Discover the platform</span>
        </a>
    </div>
</section>

<section id="features" class="features">
    <div class="container">
        <h2 class="section-title">
            <span class="fr">Fonctionnalités principales</span>
            <span class="en">Key Features</span>
        </h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">🏀</div>
                <h3>
                    <span class="fr">Profils de joueurs</span>
                    <span class="en">Player Profiles</span>
                </h3>
                <p>
                    <span class="fr">Fiches complètes avec statistiques, vidéos highlights et informations détaillées</span>
                    <span class="en">Complete profiles with statistics, highlight videos and detailed information</span>
                </p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🔍</div>
                <h3>
                    <span class="fr">Recherche avancée</span>
                    <span class="en">Advanced Search</span>
                </h3>
                <p>
                    <span class="fr">Outils puissants pour recruteurs avec filtres par poste, âge, pays et performances</span>
                    <span class="en">Powerful tools for recruiters with filters by position, age, country and performance</span>
                </p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📱</div>
                <h3>
                    <span class="fr">Mobile & Web</span>
                    <span class="en">Mobile & Web</span>
                </h3>
                <p>
                    <span class="fr">Accessible sur tous les appareils avec une interface optimisée</span>
                    <span class="en">Accessible on all devices with an optimized interface</span>
                </p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🌍</div>
                <h3>
                    <span class="fr">Couverture panafricaine</span>
                    <span class="en">Pan-African Coverage</span>
                </h3>
                <p>
                    <span class="fr">Première plateforme dédiée exclusivement aux championnats africains</span>
                    <span class="en">First platform dedicated exclusively to African championships</span>
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
                    <span class="fr">Application mobile intuitive</span>
                    <span class="en">Intuitive Mobile App</span>
                </h2>
                <p>
                    <span class="fr">Découvrez notre application mobile qui révolutionne la façon dont les talents africains se connectent aux opportunités internationales.</span>
                    <span class="en">Discover our mobile app that revolutionizes how African talents connect to international opportunities.</span>
                </p>
                <ul class="app-features">
                    <li>
                        <span class="fr">Interface bilingue (Français/Anglais)</span>
                        <span class="en">Bilingual interface (French/English)</span>
                    </li>
                    <li>
                        <span class="fr">Mise à jour en temps réel</span>
                        <span class="en">Real-time updates</span>
                    </li>
                    <li>
                        <span class="fr">Accès offline aux profils sauvegardés</span>
                        <span class="en">Offline access to saved profiles</span>
                    </li>
                    <li>
                        <span class="fr">Export PDF/Excel des rapports</span>
                        <span class="en">PDF/Excel report export</span>
                    </li>
                </ul>
                <a href="#" class="cta-button">
                    <span class="fr">Télécharger l'app</span>
                    <span class="en">Download App</span>
                </a>
            </div>
            <div class="phone-mockups">
                <div class="phone">
                    <div class="phone-screen">
                        <div class="screen-content">
                            <div class="screen-header">
                                <span class="fr">Talents Africains</span>
                                <span class="en">African Talents</span>
                            </div>
                            <div class="player-card">
                                <div class="player-avatar"></div>
                                <div class="player-name">Kwame Asante</div>
                                <div class="player-stats">
                                    <span class="fr">22 ans • Ghana • Ailier</span>
                                    <span class="en">22 y/o • Ghana • Forward</span>
                                </div>
                            </div>
                            <div class="player-card">
                                <div class="player-avatar"></div>
                                <div class="player-name">Amina Diallo</div>
                                <div class="player-stats">
                                    <span class="fr">20 ans • Sénégal • Meneur</span>
                                    <span class="en">20 y/o • Senegal • Guard</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="phone">
                    <div class="phone-screen">
                        <div class="screen-content">
                            <div class="screen-header">
                                <span class="fr">Statistiques</span>
                                <span class="en">Statistics</span>
                            </div>
                            <div style="background: var(--light-green); border-radius: 10px; padding: 15px; margin-bottom: 15px;">
                                <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                                    <span style="font-weight: bold;">Points/Match</span>
                                    <span>24.5</span>
                                </div>
                                <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                                    <span style="font-weight: bold;">Rebonds</span>
                                    <span>8.2</span>
                                </div>
                                <div style="display: flex; justify-content: space-between;">
                                    <span style="font-weight: bold;">Passes</span>
                                    <span>5.7</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="target-audience">
    <div class="container">
        <h2 class="section-title">
            <span class="fr">Pour qui ?</span>
            <span class="en">Who is it for?</span>
        </h2>
        <div class="audience-grid">
            <div class="audience-card">
                <h3>
                    <span class="fr">Joueurs africains</span>
                    <span class="en">African Players</span>
                </h3>
                <p>
                    <span class="fr">Showcasez vos talents et connectez-vous aux opportunités internationales</span>
                    <span class="en">Showcase your talents and connect to international opportunities</span>
                </p>
            </div>
            <div class="audience-card">
                <h3>
                    <span class="fr">Recruteurs & Agents</span>
                    <span class="en">Recruiters & Agents</span>
                </h3>
                <p>
                    <span class="fr">Découvrez les talents émergents d'Afrique avec des outils professionnels</span>
                    <span class="en">Discover emerging talents from Africa with professional tools</span>
                </p>
            </div>
            <div class="audience-card">
                <h3>
                    <span class="fr">Clubs & Ligues</span>
                    <span class="en">Clubs & Leagues</span>
                </h3>
                <p>
                    <span class="fr">Professionnalisez vos championnats et valorisez vos joueurs</span>
                    <span class="en">Professionalize your championships and showcase your players</span>
                </p>
            </div>
            <div class="audience-card">
                <h3>
                    <span class="fr">Médias sportifs</span>
                    <span class="en">Sports Media</span>
                </h3>
                <p>
                    <span class="fr">Accédez aux données et contenus du basketball africain</span>
                    <span class="en">Access data and content from African basketball</span>
                </p>
            </div>
        </div>
    </div>
</section>

<section id="impact" class="impact">
    <div class="container">
        <h2 class="section-title">
            <span class="fr">Notre impact</span>
            <span class="en">Our Impact</span>
        </h2>
        <div class="impact-grid">
            <div class="impact-item">
                <h3>54</h3>
                <p>
                    <span class="fr">Pays africains couverts</span>
                    <span class="en">African countries covered</span>
                </p>
            </div>
            <div class="impact-item">
                <h3>10k+</h3>
                <p>
                    <span class="fr">Joueurs référencés</span>
                    <span class="en">Players indexed</span>
                </p>
            </div>
            <div class="impact-item">
                <h3>500+</h3>
                <p>
                    <span class="fr">Clubs partenaires</span>
                    <span class="en">Partner clubs</span>
                </p>
            </div>
            <div class="impact-item">
                <h3>100+</h3>
                <p>
                    <span class="fr">Recruteurs actifs</span>
                    <span class="en">Active recruiters</span>
                </p>
            </div>
        </div>
    </div>
</section>

<footer id="contact">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>FanDraft Africa</h3>
                <p>
                    <span class="fr">La première plateforme panafricaine dédiée au basketball africain</span>
                    <span class="en">The first pan-African platform dedicated to African basketball</span>
                </p>
            </div>
            <div class="footer-section">
                <h3>Contact</h3>
                <p>Email: contact@fandraftafrica.com</p>
                <p>
                    <span class="fr">Téléphone: +225 XX XX XX XX</span>
                    <span class="en">Phone: +225 XX XX XX XX</span>
                </p>
            </div>
            <div class="footer-section">
                <h3>
                    <span class="fr">Suivez-nous</span>
                    <span class="en">Follow us</span>
                </h3>
                <p><a href="#">Facebook</a></p>
                <p><a href="#">Twitter</a></p>
                <p><a href="#">LinkedIn</a></p>
            </div>
        </div>
        <p>&copy; 2025 FanDraft Africa.
            <span class="fr">Tous droits réservés.</span>
            <span class="en">All rights reserved.</span>
        </p>
    </div>
</footer>

<script>
    function toggleLanguage() {
        const body = document.body;
        const currentLang = body.getAttribute('data-lang');
        const newLang = currentLang === 'fr' ? 'en' : 'fr';
        body.setAttribute('data-lang', newLang);
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

    // Add scroll effect to header
    window.addEventListener('scroll', function() {
        const header = document.querySelector('header');
        if (window.scrollY > 100) {
            header.style.background = 'rgba(255, 255, 255, 0.95)';
            header.style.backdropFilter = 'blur(10px)';
        } else {
            header.style.background = 'var(--white)';
            header.style.backdropFilter = 'none';
        }
    });

    // Animate feature cards on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    document.querySelectorAll('.feature-card, .audience-card').forEach(card => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(card);
    });
</script>
</body>
</html>
