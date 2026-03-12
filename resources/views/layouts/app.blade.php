<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MotherLand Tours | Découvrez le Bénin Autrement</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- ── Navbar (original flat structure with premium styling) ── -->
    <nav class="navbar">
        <div class="flex items-center justify-between w-full">
            <!-- Brand -->
            <a href="/" class="flex items-center gap-2.5 flex-shrink-0">
                <div class="w-7 h-7 bg-mother-espresso rounded flex items-center justify-center">
                    <i class="fas fa-earth-africa text-mother-gold text-xs"></i>
                </div>
                <span class="font-display font-bold text-base tracking-tight text-mother-espresso uppercase">
                    MOTHERLAND <span class="text-mother-gold">TOURS</span>
                </span>
            </a>

            <!-- Nav Links -->
            <div class="hidden md:flex items-center gap-1">
                <a href="/"          class="nav-item">Accueil</a>
                <a href="/packs"     class="nav-item">Nos Packs</a>
                <a href="/itineraire" class="nav-item">Itinéraire</a>
                <a href="/reserver"  class="nav-item font-bold border border-mother-gold/50 text-mother-gold rounded-lg px-4 py-1.5 hover:bg-mother-gold hover:text-white transition-all">Réserver</a>
                <a href="/a-propos"  class="nav-item">À Propos</a>
                <a href="/contact"   class="nav-item">Contact</a>
            </div>

            <!-- Mobile -->
            <button class="md:hidden text-mother-espresso p-2" id="mobileMenuBtn">
                <i class="fas fa-bars text-lg"></i>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden fixed top-16 left-0 right-0 bg-white border-b border-mother-sand z-40 px-6 py-4 shadow-lg">
        <div class="flex flex-col gap-2">
            <a href="/"          class="nav-item block">Accueil</a>
            <a href="/packs"     class="nav-item block">Nos Packs</a>
            <a href="/itineraire" class="nav-item block">Itinéraire</a>
            <a href="/reserver"  class="nav-item block font-bold text-mother-gold">Réserver</a>
            <a href="/a-propos"  class="nav-item block">À Propos</a>
            <a href="/contact"   class="nav-item block">Contact</a>
        </div>
    </div>

    <!-- Flash Messages -->
    <div class="fixed top-20 left-1/2 -translate-x-1/2 z-[100] w-full max-w-md px-4 pointer-events-none">
        @if(session('success'))
            <div class="bg-mother-earth text-white px-6 py-3 rounded-xl shadow-xl flex items-center gap-3 pointer-events-auto">
                <i class="fas fa-check-circle text-mother-gold"></i>
                <p class="text-sm font-medium">{{ session('success') }}</p>
            </div>
        @endif
        @if(session('error'))
            <div class="bg-red-600 text-white px-6 py-3 rounded-xl shadow-xl flex items-center gap-3 pointer-events-auto">
                <i class="fas fa-exclamation-circle"></i>
                <p class="text-sm font-medium">{{ session('error') }}</p>
            </div>
        @endif
        @if ($errors->any())
            <div class="bg-red-600 text-white px-6 py-3 rounded-xl shadow-xl flex flex-col gap-1 pointer-events-auto">
                <div class="flex items-center gap-3">
                    <i class="fas fa-exclamation-triangle"></i>
                    <p class="text-sm font-bold">Veuillez corriger les erreurs :</p>
                </div>
                <ul class="text-xs opacity-90 pl-8 list-disc">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <!-- Main Content (offset for fixed navbar) -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- WhatsApp Float -->
    <a href="https://wa.me/22948803613" class="wa-float" target="_blank" aria-label="WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Footer (original structure with premium styling) -->
    <footer class="footer mt-12">
        <div class="container">
            <div class="grid md:grid-cols-3 gap-12 pb-10 border-b border-white/10">
                <!-- Brand -->
                <div>
                    <a href="/" class="font-display font-bold text-xl text-white uppercase tracking-tight block mb-3">
                        MOTHERLAND <span class="text-mother-gold">TOURS</span>
                    </a>
                    <p class="text-white/50 text-sm leading-relaxed">Découvrez le Bénin autrement.</p>
                    <div class="flex gap-3 mt-6">
                        <a href="#" class="w-9 h-9 rounded-lg bg-white/8 border border-white/10 flex items-center justify-center text-white/60 hover:bg-mother-gold hover:text-white hover:border-transparent transition-all text-sm"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="w-9 h-9 rounded-lg bg-white/8 border border-white/10 flex items-center justify-center text-white/60 hover:bg-mother-gold hover:text-white hover:border-transparent transition-all text-sm"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://wa.me/22948803613" class="w-9 h-9 rounded-lg bg-white/8 border border-white/10 flex items-center justify-center text-white/60 hover:bg-mother-gold hover:text-white hover:border-transparent transition-all text-sm"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-white/90 text-xs font-bold uppercase tracking-widest mb-5">Contact</h4>
                    <ul class="space-y-3 text-white/50 text-sm">
                        <li>Email: contact@motherlandtours.com</li>
                        <li>Tél: +229 0148803613</li>
                    </ul>
                </div>

                <!-- Social / Links -->
                <div>
                    <h4 class="text-white/90 text-xs font-bold uppercase tracking-widest mb-5">Suivez-nous</h4>
                    <p class="text-white/50 text-sm">WhatsApp: +229 0148803613</p>
                    <div class="flex flex-col gap-2 mt-4">
                        <a href="/legal"   class="text-white/40 text-xs hover:text-mother-gold transition-colors">Légal</a>
                        <a href="/privacy" class="text-white/40 text-xs hover:text-mother-gold transition-colors">Vie Privée</a>
                    </div>
                </div>
            </div>

            <p class="text-white/30 text-xs text-center pt-8">
                &copy; {{ date('Y') }} Motherland Tours. Tous droits réservés.
            </p>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobileMenuBtn').addEventListener('click', () => {
            document.getElementById('mobileMenu').classList.toggle('hidden');
        });

        // Section reveal
        document.addEventListener('DOMContentLoaded', () => {
            const obs = new IntersectionObserver(entries => {
                entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('visible'); });
            }, { threshold: 0.15 });
            document.querySelectorAll('.section-reveal').forEach(el => obs.observe(el));
        });
    </script>
</body>
</html>
