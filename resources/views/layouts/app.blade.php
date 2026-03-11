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
    <!-- Premium Floating Navbar -->
    <nav class="navbar">
        <div class="flex items-center justify-between w-full h-full relative">
            <!-- Logo Area -->
            <div class="flex-1 flex justify-start">
                <a href="/" class="flex items-center gap-4 group flex-shrink-0">
                    <span class="font-display font-bold text-xl md:text-2xl tracking-tighter text-mother-earth uppercase pulse-gentle whitespace-nowrap">MOTHERLAND TOURS</span>
                </a>
            </div>
            
            <!-- Nav Items Area (Centered) -->
            <div class="hidden lg:flex items-center justify-center gap-8 xl:gap-12 flex-[2]">
                <a href="/" class="nav-item whitespace-nowrap px-4">Accueil</a>
                <a href="/packs" class="nav-item whitespace-nowrap px-4">Nos Packs</a>
                <a href="/itineraire" class="nav-item whitespace-nowrap px-4">Itinéraire</a>
                <a href="/reserver" class="nav-item whitespace-nowrap px-4">Réserver</a>
                <a href="/a-propos" class="nav-item whitespace-nowrap px-4">À Propos</a>
            </div>
            
            <!-- CTA Area -->
            <div class="flex-1 flex justify-end items-center gap-6">
                <div class="hidden lg:block">
                    <a href="/contact" class="btn-nav-deep">Contact</a>
                </div>
                <button class="lg:hidden text-mother-earth p-2">
                    <i class="fas fa-bars-staggered text-2xl"></i>
                </button>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Floating WhatsApp -->
    <a href="https://wa.me/22948803613" class="wa-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Premium Rounded Footer -->
    <footer class="footer mt-32">
        <div class="container pt-20">
            <div class="grid lg:grid-cols-4 gap-20 mb-24">
                <div class="lg:col-span-2">
                    <a href="/" class="font-display font-bold text-4xl tracking-tighter text-mother-earth mb-8 block uppercase">
                        MOTHERLAND TOURS
                    </a>
                    <p class="text-slate-500 max-w-sm mb-12 leading-loose text-sm">
                        L'agence de voyage pionnière pour une immersion authentique au Bénin. Nous créons des ponts entre les cultures et les cœurs, une escale à la fois.
                    </p>
                    <div class="flex gap-6">
                        <a href="#" class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center text-mother-earth hover:bg-mother-terracotta hover:text-white transition-premium shadow-sm hover:shadow-xl"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center text-mother-earth hover:bg-mother-terracotta hover:text-white transition-premium shadow-sm hover:shadow-xl"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="w-14 h-14 rounded-2xl bg-white flex items-center justify-center text-mother-earth hover:bg-mother-terracotta hover:text-white transition-premium shadow-sm hover:shadow-xl"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="text-mother-earth font-display font-bold text-xs uppercase tracking-[0.2em] mb-10">Exploration</h4>
                    <ul class="space-y-5 text-slate-500 text-sm">
                        <li><a href="/" class="hover:text-mother-terracotta transition-colors">Accueil</a></li>
                        <li><a href="/a-propos" class="hover:text-mother-terracotta transition-colors">Notre Vision</a></li>
                        <li><a href="/itineraire" class="hover:text-mother-terracotta transition-colors">L'Itinéraire</a></li>
                        <li><a href="/packs" class="hover:text-mother-terracotta transition-colors">Nos Tarifs</a></li>
                        <li><a href="/devis" class="hover:text-mother-terracotta transition-colors">Voyage Sur-Mesure</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-mother-earth font-display font-bold text-xs uppercase tracking-[0.2em] mb-10">Conciergerie</h4>
                    <ul class="space-y-5 text-slate-500 text-sm">
                        <li class="flex items-center gap-4"><div class="w-8 h-8 rounded-lg bg-mother-terracotta/10 flex items-center justify-center"><i class="fas fa-envelope text-mother-terracotta text-xs"></i></div> motherlandtours9@gmail.com</li>
                        <li class="flex items-center gap-4"><div class="w-8 h-8 rounded-lg bg-mother-terracotta/10 flex items-center justify-center"><i class="fas fa-phone text-mother-terracotta text-xs"></i></div> +229 0148803613</li>
                        <li class="flex items-center gap-4"><div class="w-8 h-8 rounded-lg bg-mother-terracotta/10 flex items-center justify-center"><i class="fas fa-map-marker-alt text-mother-terracotta text-xs"></i></div> Cotonou, Bénin</li>
                    </ul>
                </div>
            </div>
            
            <div class="pt-16 border-t border-mother-terracotta/5 flex flex-col lg:flex-row justify-between items-center gap-10 text-slate-400 text-[10px] uppercase tracking-[0.3em]">
                <p>&copy; {{ date('Y') }} Motherland Tours. Excellence et Authenticité.</p>
                <div class="flex gap-12 font-bold">
                    <a href="#" class="hover:text-mother-terracotta transition-colors">Mentions Légales</a>
                    <a href="#" class="hover:text-mother-terracotta transition-colors">Confidentialité</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
