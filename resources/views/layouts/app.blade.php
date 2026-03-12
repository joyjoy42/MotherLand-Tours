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
    <nav class="navbar group px-8 md:px-12">
        <div class="flex items-center justify-between w-full h-full">
            <a href="/" class="flex items-center gap-4 group flex-shrink-0">
                <div class="w-10 h-10 bg-mother-espresso rounded-lg flex items-center justify-center text-white rotate-3 group-hover:rotate-0 transition-transform duration-500">
                    <i class="fas fa-earth-africa text-sm"></i>
                </div>
                <span class="font-display font-bold text-xl md:text-2xl tracking-tighter text-mother-espresso uppercase">
                    MOTHERLAND <span class="text-mother-gold">TOURS</span>
                </span>
            </a>
            
            <!-- Nav Items Area (Centered) -->
            <div class="hidden lg:flex items-center justify-center gap-8 xl:gap-10">
                <a href="/" class="nav-item">Accueil</a>
                <a href="/packs" class="nav-item">Itinéraires</a>
                <a href="/itineraire" class="nav-item">Sur Mesure</a>
                <a href="/a-propos" class="nav-item">L'Agence</a>
            </div>
            
            <!-- CTA Area -->
            <div class="flex items-center gap-6">
                <a href="/contact" class="btn-nav-deep hidden md:flex">Contact</a>
                <button class="lg:hidden text-mother-espresso p-2">
                    <i class="fas fa-bars-staggered text-2xl"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Notification Toasts -->
    <div class="fixed top-24 left-1/2 -translate-x-1/2 z-[100] w-full max-w-md px-4 pointer-events-none">
        @if(session('success'))
            <div class="bg-mother-earth text-white px-8 py-4 rounded-3xl shadow-2xl flex items-center gap-4 animate-slide-up pointer-events-auto">
                <i class="fas fa-check-circle text-mother-terracotta"></i>
                <p class="text-sm font-medium">{{ session('success') }}</p>
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-600 text-white px-8 py-4 rounded-3xl shadow-2xl flex items-center gap-4 animate-slide-up pointer-events-auto">
                <i class="fas fa-exclamation-circle text-white"></i>
                <p class="text-sm font-medium">{{ session('error') }}</p>
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-600 text-white px-8 py-4 rounded-3xl shadow-2xl flex flex-col gap-2 animate-slide-up pointer-events-auto">
                <div class="flex items-center gap-4">
                    <i class="fas fa-exclamation-triangle text-white"></i>
                    <p class="text-sm font-bold">Veuillez corriger les erreurs suivantes :</p>
                </div>
                <ul class="text-xs opacity-90 pl-10 list-disc">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <main class="transition-all duration-1000 ease-in-out">
        @yield('content')
    </main>

    <!-- Floating WhatsApp -->
    <a href="https://wa.me/22948803613" class="wa-float" target="_blank" aria-label="Discuter avec nous sur WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Deep Espresso Luxury Footer -->
    <footer class="bg-mother-espresso text-mother-beige pt-40 pb-20 rounded-t-[4rem] mt-48">
        <div class="container">
            <div class="grid lg:grid-cols-4 gap-24 mb-32">
                <div class="lg:col-span-2">
                    <a href="/" class="font-display font-bold text-5xl tracking-tighter text-white mb-10 block uppercase">
                        MOTHERLAND <span class="text-mother-gold">TOURS</span>
                    </a>
                    <p class="text-mother-beige/60 text-lg leading-relaxed max-w-md mb-12">
                        L'agence de voyage pionnière pour une immersion authentique au Bénin. Excellence, héritage et découvertes inoubliables.
                    </p>
                    <div class="flex gap-8">
                        <a href="#" class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-white hover:bg-mother-gold hover:text-mother-espresso transition-all group"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-white hover:bg-mother-gold hover:text-mother-espresso transition-all group"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://wa.me/22948803613" class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-white hover:bg-mother-gold hover:text-mother-espresso transition-all group"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="text-white text-xs mb-10 font-bold uppercase tracking-[0.3em]">Exploration</h4>
                    <ul class="space-y-6 text-mother-beige/60 font-medium text-sm">
                        <li><a href="/" class="hover:text-mother-gold transition-colors">Accueil</a></li>
                        <li><a href="/packs" class="hover:text-mother-gold transition-colors">Découvertes</a></li>
                        <li><a href="/itineraire" class="hover:text-mother-gold transition-colors">L'Itinéraire</a></li>
                        <li><a href="/a-propos" class="hover:text-mother-gold transition-colors">Notre Vision</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white text-xs mb-10 font-bold uppercase tracking-[0.3em]">Contact</h4>
                    <ul class="space-y-6 text-mother-beige/60 font-medium text-sm">
                        <li class="flex items-center gap-4"><i class="fas fa-map-marker-alt text-mother-gold"></i> Cotonou, Bénin</li>
                        <li class="flex items-center gap-4"><i class="fas fa-phone text-mother-gold"></i> +229 0148803613</li>
                        <li class="flex items-center gap-4"><i class="fas fa-envelope text-mother-gold"></i> contact@motherland.com</li>
                    </ul>
                </div>
            </div>

            <div class="pt-20 border-t border-white/5 flex flex-col lg:flex-row justify-between items-center gap-10 text-mother-beige/40 text-[10px] uppercase tracking-[0.4em] font-bold">
                <p>&copy; {{ date('Y') }} Motherland Tours. Heritage & Discovery.</p>
                <div class="flex gap-16 font-bold">
                    <a href="/legal" class="hover:text-white transition-colors">Légal</a>
                    <a href="/privacy" class="hover:text-white transition-colors">Vie Privée</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
