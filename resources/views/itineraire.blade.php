@extends('layouts.app')

@section('content')
<!-- Premium Header -->
<section class="relative min-h-[60vh] flex items-center justify-center overflow-hidden bg-mother-earth text-center">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/assets/porte_du_non_retour_night_new.png') }}" class="w-full h-full object-cover opacity-10" alt="Itinerary Hero">
        <div class="absolute inset-0 bg-mother-earth/85"></div>
    </div>
    
    <div class="container relative z-10 px-6 animate-fade-in py-32">
        <span class="text-mother-gold font-bold tracking-[0.4em] uppercase text-[10px] mb-8 block">Expédition</span>
        <h1 class="text-6xl lg:text-9xl text-white font-display font-semibold mb-12 leading-[0.9]">
            Votre <span class="text-mother-gold italic">Odyssée</span>.
        </h1>
        <p class="text-xl text-white/90 max-w-2xl mx-auto leading-loose text-balance font-medium [text-shadow:_0_2px_10px_rgba(0,0,0,0.3)]">
            Un voyage initiatique entre cités lacustres, palais royaux et savanes sauvages. 8 jours de pure authenticité.
        </p>
    </div>
</section>

<section class="section-padding bg-white relative">
    <div class="container">
        <!-- Duration Toggle -->
        <div class="flex justify-center mb-32 section-reveal">
            <div class="glass p-3 rounded-2xl flex gap-3 border-mother-gold/5 shadow-mother-espresso/5">
                <button class="nav-item !px-10 !py-4 !rounded-xl active uppercase text-[10px] tracking-[0.3em] font-bold" onclick="showItinerary(7)">Pack 7 Jours</button>
                <button class="nav-item !px-10 !py-4 !rounded-xl uppercase text-[10px] tracking-[0.3em] font-bold" onclick="showItinerary(10)">Pack 10 Jours</button>
            </div>
        </div>

        <div style="max-width: 1000px; margin: 0 auto; position: relative;">
            <!-- Timeline Line -->
            <div style="position: absolute; left: 40px; top: 0; bottom: 0; width: 4px; background: var(--color-mother-gold); opacity: 0.1; border-radius: 4px; display: none;"></div>

            <div id="itin-days">
                @php
                    $days = [
                        1 => [
                            'title' => 'Porto-Novo et Adjarra',
                            'desc' => "Immersion dans la capitale. Visite du Musée Honmè, de la grande mosquée à l'architecture afro-brésilienne unique. Escapade à Adjarra pour son artisanat du bois et la sérénité de la Rivière Noire. Voiture avec chauffeur toute la journée.",
                            'icon' => 'fa-mosque'
                        ],
                        2 => [
                            'title' => 'Abomey - Traces des Rois du Dahomey',
                            'desc' => "Voyage dans le temps au cœur du royaume du Danxomè. Visite des palais royaux classés à l'UNESCO, rencontre avec l'histoire des guerrières Amazones et des bas-reliefs sacrés. Voiture avec chauffeur toute la journée.",
                            'icon' => 'fa-crown'
                        ],
                        3 => [
                            'title' => 'Dassa-Zoumè - Collines Sacrées',
                            'desc' => "Découverte et histoire de la ville. Randonnée et activité de fabrication du fromage (warangachi) et préparation de l’igname pilé. Voiture avec chauffeur toute la journée.",
                            'icon' => 'fa-mountain-sun'
                        ],
                        4 => [
                            'title' => 'TORI - Agro-tourisme',
                            'desc' => "Immersion dans les plantations de l’ananas Pain de sucre. Découverte des techniques agricoles locales. Voiture avec chauffeur toute la journée.",
                            'icon' => 'fa-leaf'
                        ],
                        5 => [
                            'title' => 'Gogotinkpon - Bien-être Naturel',
                            'desc' => "L'expérience unique du Bain de Bou. Détente et revitalisation en pleine nature. Voiture avec chauffeur toute la journée.",
                            'icon' => 'fa-spa'
                        ],
                        6 => [
                            'title' => 'Ganvié - La Venise du Bénin',
                            'desc' => "Embarquement pour la 'Venise de l'Afrique'. Navigation sur le lac Nokoué à la découverte d'une cité millénaire sur pilotis. Observation des techniques de pêche traditionnelles et du marché flottant. Voiture avec chauffeur toute la journée.",
                            'icon' => 'fa-ship'
                        ],
                        7 => [
                            'title' => 'Ouidah - Histoire & Mémoire',
                            'desc' => "Journée de recueillement et de spiritualité. Du Temple des Pythons à la Forêt Sacrée, jusqu'à l'émouvante Route des Esclaves aboutissant à la Porte du Non Retour, face à l'océan. Voiture avec chauffeur toute la journée.",
                            'icon' => 'fa-monument'
                        ],
                        8 => [
                            'title' => 'Grand-Popo - Évasion Nature',
                            'desc' => "Île aux oiseaux, la bouge du Roy, place Nonvitcha. Fin de séjour paisible entre fleuve et mer. Voiture avec chauffeur toute la journée.",
                            'icon' => 'fa-umbrella-beach'
                        ],
                    ];
                @endphp

                @foreach ($days as $num => $day)
                <div class="premium-card day-box section-reveal !p-8 lg:!p-12 mb-12 shadow-sm hover:shadow-tripktion border-none" data-day="{{ $num }}">
                    <div class="flex flex-col lg:flex-row gap-8 lg:gap-16 items-start">
                        <div class="flex-shrink-0">
                            <div class="relative w-20 h-20 bg-mother-espresso rounded-[1.5rem] flex flex-col items-center justify-center shadow-2xl shadow-mother-espresso/10 overflow-hidden group">
                                <div class="absolute inset-0 bg-mother-gold opacity-0 group-hover:opacity-10 transition-premium duration-500"></div>
                                <span class="relative z-10 text-[8px] font-bold text-white/30 tracking-[0.2em] uppercase">JOUR</span>
                                <span class="relative z-10 text-3xl font-display font-semibold text-white leading-none">{{ str_pad($num, 2, '0', STR_PAD_LEFT) }}</span>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-6 mb-6">
                                <h3 class="text-4xl font-display text-mother-espresso leading-tight">{{ $day['title'] }}</h3>
                                <div class="w-10 h-10 rounded-full bg-mother-gold/10 flex items-center justify-center text-mother-gold">
                                    <i class="fas {{ $day['icon'] }}"></i>
                                </div>
                            </div>
                            <p class="text-slate-500 text-xl leading-loose mb-10 max-w-4xl">{{ $day['desc'] }}</p>
                            
                            <div class="flex flex-wrap gap-4">
                                <div class="px-6 py-3 bg-mother-espresso/5 rounded-xl text-[10px] font-bold text-mother-espresso uppercase tracking-widest flex items-center gap-3 border border-mother-espresso/10">
                                    <i class="fas fa-car"></i> Chauffeur Privé
                                </div>
                                <div class="px-6 py-3 bg-mother-gold/5 rounded-xl text-[10px] font-bold text-mother-gold uppercase tracking-widest flex items-center gap-3 border border-mother-gold/10">
                                    <i class="fas fa-camera"></i> Visite Guidée
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Final CTA -->
            <div class="bg-mother-espresso p-16 lg:p-32 rounded-[5rem] text-center relative overflow-hidden section-reveal mt-32 shadow-2xl shadow-mother-espresso/10">
                <div class="absolute inset-0 opacity-5"></div>
                <div class="relative z-10">
                    <h3 class="!text-white text-4xl lg:text-7xl mb-12 font-display font-semibold leading-tight">Prêt à tracer <br/>votre propre route ?</h3>
                    <p class="text-slate-300 mb-16 max-w-2xl mx-auto text-xl leading-loose">Réservez votre place pour le prochain départ ou contactez notre agence pour une version 100% personnalisée.</p>
                    <div class="flex flex-wrap justify-center gap-8">
                        <a href="/reserver" class="btn btn-cta px-16 shadow-2xl">Réserver ce parcours</a>
                        <a href="/devis" class="btn border-2 border-white/20 text-white hover:bg-white hover:text-mother-earth px-16">Modifier l'itinéraire</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function showItinerary(days) {
        document.querySelectorAll('.day-box').forEach(box => {
            box.style.display = (box.dataset.day <= days) ? 'block' : 'none';
        });
        document.querySelectorAll('.nav-item').forEach(btn => {
            if(btn.tagName === 'BUTTON') btn.classList.remove('active');
        });
        event.currentTarget.classList.add('active');
    }
</script>
@endsection
