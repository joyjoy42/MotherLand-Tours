<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotherLand Tours | Découvrez le Bénin Autrement</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Premium Smooth Navbar -->
    <nav class="navbar">
        <div class="container" style="display: flex; justify-content: space-between; align-items: center; width: 100%;">
            <a href="/" class="logo" style="color: var(--color-mother-navy);">MOTHERLAND <span style="color: var(--color-mother-terracotta);">TOURS</span></a>
            
            <div class="nav-links">
                <a href="/" class="nav-item {{ Request::is('/') ? 'active' : '' }}">Accueil</a>
                <a href="/packs" class="nav-item {{ Request::is('packs') ? 'active' : '' }}">Packs</a>
                <a href="/itineraire" class="nav-item {{ Request::is('itineraire') ? 'active' : '' }}">Itinéraire</a>
                <a href="/reserver" class="nav-item {{ Request::is('reserver') ? 'active' : '' }}">Réserver</a>
                <a href="/a-propos" class="nav-item {{ Request::is('a-propos') ? 'active' : '' }}">À Propos</a>
                <a href="/contact" class="nav-item {{ Request::is('contact') ? 'active' : '' }}">Contact</a>
            </div>
        </div>
    </nav>

    <main class="motif-benin">
        @yield('content')
    </main>

    <!-- Floating WhatsApp -->
    <a href="https://wa.me/22948803613" class="wa-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Premium Smooth Footer -->
    <footer class="footer">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 48px;">
                <div>
                    <div class="footer-logo" style="color: white;">MOTHERLAND <span style="color: var(--color-mother-terracotta);">TOURS</span></div>
                    <p style="color: #94a3b8; font-size: 0.95rem; line-height: 1.7;">Spécialiste du voyage authentique et culturel au Bénin pour la diaspora et les passionnés du monde entier.</p>
                </div>
                <div>
                    <h4 style="color: white; margin-bottom: 24px; font-size: 1.1rem;">Contact</h4>
                    <p style="font-size: 0.9rem; color: #94a3b8; margin-bottom: 12px; display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-envelope" style="color: var(--color-mother-terracotta);"></i> <a href="mailto:motherlandtours9@gmail.com" style="color: inherit; text-decoration: none;">motherlandtours9@gmail.com</a>
                    </p>
                    <p style="font-size: 0.9rem; color: #94a3b8; display: flex; align-items: center; gap: 10px;">
                        <i class="fas fa-phone" style="color: var(--color-mother-terracotta);"></i> <a href="tel:+2290148803613" style="color: inherit; text-decoration: none;">+229 0148803613</a>
                    </p>
                </div>
                <div>
                    <h4 style="color: white; margin-bottom: 24px; font-size: 1.1rem;">Suivez-nous</h4>
                    <div style="display: flex; gap: 16px;">
                        <a href="https://wa.me/22948803613" style="color: #94a3b8; font-size: 1.5rem; transition: 0.3s;" onmouseover="this.style.color='#25d366'" onmouseout="this.style.color='#94a3b8'"><i class="fab fa-whatsapp"></i></a>
                        <a href="#" style="color: #94a3b8; font-size: 1.5rem; transition: 0.3s;" onmouseover="this.style.color='#E1306C'" onmouseout="this.style.color='#94a3b8'"><i class="fab fa-instagram"></i></a>
                        <a href="#" style="color: #94a3b8; font-size: 1.5rem; transition: 0.3s;" onmouseover="this.style.color='#1877F2'" onmouseout="this.style.color='#94a3b8'"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; {{ date('Y') }} Motherland Tours. Conçu avec passion pour le Bénin.
            </div>
        </div>
    </footer>
</body>
</html>
