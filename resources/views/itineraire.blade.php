@extends('layouts.app')

@section('content')

{{-- Page Header (with image like original screenshot) --}}
<div class="relative overflow-hidden bg-mother-espresso">
    <img src="{{ asset('images/assets/porte_du_non_retour_night_new.png') }}"
         class="absolute inset-0 w-full h-full object-cover opacity-20" alt="Itinéraire">
    <div class="absolute inset-0 bg-gradient-to-b from-mother-espresso/60 via-mother-espresso/40 to-mother-espresso/70"></div>
    <div class="container relative z-10 py-16 md:py-24 text-center">
        <span class="text-mother-gold text-xs font-bold uppercase tracking-widest block mb-3">Itinéraire Détaillé</span>
        <h1 class="text-3xl md:text-5xl font-display font-bold text-white mb-4 leading-tight">Votre <span class="text-mother-gold italic">Odyssée</span>.</h1>
        <p class="text-white/70 text-sm max-w-lg mx-auto leading-relaxed">Un voyage initiatique entre cités lacustres, palais royaux et savanes sauvages.</p>
    </div>
</div>

<section class="bg-white py-12">
    <div class="container">

        {{-- Duration Toggle --}}
        <div class="flex justify-center mb-10 section-reveal">
            <div class="bg-mother-cream border border-mother-sand rounded-xl p-1.5 flex gap-2">
                <button class="itin-tab active text-xs font-bold tracking-wider uppercase px-6 py-2.5 rounded-lg transition-all" onclick="showItinerary(7, this)">
                    Pack 7 Jours
                </button>
                <button class="itin-tab text-xs font-bold tracking-wider uppercase px-6 py-2.5 rounded-lg transition-all text-mother-earth hover:text-mother-espresso" onclick="showItinerary(10, this)">
                    Pack 10 Jours
                </button>
            </div>
        </div>

        {{-- Day Cards --}}
        <div id="itin-days" class="max-w-3xl mx-auto space-y-4">
            @php
                $days = [
                    1  => ['title' => 'Arrivée à Cotonou',            'desc' => "Accueil à l'aéroport par votre guide. Installation à l'hôtel, briefing et premiers aperçus de la capitale économique du Bénin.", 'icon' => 'fa-plane-arrival'],
                    2  => ['title' => 'Cotonou - Ville Vibrante',        'desc' => "Visite du Grand Marché Dantokpa, le plus grand marché à ciel ouvert d'Afrique de l'Ouest. Découverte du quartier des zémidjans.", 'icon' => 'fa-city'],
                    3  => ['title' => 'Ouidah - Porte du Non-Retour',   'desc' => "Journée de recueillement. Temple des Pythons, Forêt Sacrée, et l'émouvante Route des Esclaves aboutissant à la Porte face à l'océan.", 'icon' => 'fa-monument'],
                    4  => ['title' => 'Ganvié - Venise d\'Afrique',      'desc' => "Embarquement pour la Venise de l'Afrique. Navigation sur le lac Nokoué à la découverte de la cité millénaire sur pilotis.", 'icon' => 'fa-ship'],
                    5  => ['title' => 'Abomey - Palais Royaux',         'desc' => "Voyage dans le temps au cœur du Danxomè. Palais royaux classés UNESCO, guerrières Amazones, bas-reliefs sacrés.", 'icon' => 'fa-crown'],
                    6  => ['title' => 'Porto-Novo - Capitale',          'desc' => "Découverte de la capitale administrative. Musée Honmè, grande mosquée afro-brésilienne, marchés artisanaux.", 'icon' => 'fa-mosque'],
                    7  => ['title' => 'Parc National Pendjari',         'desc' => "Safari au Pendjari : éléphants, buffles, lions. L'une des réserves les mieux préservées de l'Afrique de l'Ouest.", 'icon' => 'fa-paw', 'badge' => 'Pack 10 Jours'],
                    8  => ['title' => 'Dassa / Savè',                   'desc' => "Découverte des collines de Dassa et de la cité de Savè. Un paysage unique entre roches sacrées et traditions locales.", 'icon' => 'fa-mountain', 'badge' => 'Pack 10 Jours'],
                    9  => ['title' => 'Grand Popo - Détente',           'desc' => "Cap sur les plages de Grand Popo. Détente entre lagune et océan, visite de la Bouche du Roy pour clôturer le voyage.", 'icon' => 'fa-umbrella-beach', 'badge' => 'Pack 10 Jours'],
                    10 => ['title' => 'Départ Final',                   'desc' => "Transfert à l'aéroport de Cotonou. Votre odyssée béninoise reste à jamais gravée dans vos mémoires. À bientôt !", 'icon' => 'fa-plane-departure', 'badge' => 'Pack 10 Jours'],
                    11 => ['title' => 'Départ',                         'desc' => "Fin de votre aventure. Transfert à l'aéroport pour votre vol retour. Le Bénin vous dit à bientôt !", 'icon' => 'fa-plane-departure', 'tag' => 'depart-7'],
                ];
@endphp

            @foreach ($days as $num => $day)
            <div class="day-box border border-mother-sand rounded-2xl bg-white overflow-hidden section-reveal hover:shadow-md transition-all"
                 data-day="{{ $num }}"
                 @if(isset($day['tag']) && $day['tag'] === 'depart-7')
                    style="display:none"
                 @elseif($num > 6 && $num != 11)
                    style="display:none"
                 @endif>
                <div class="flex items-start gap-0">
                    {{-- Day Number --}}
                    <div class="bg-mother-espresso text-white px-4 py-5 flex flex-col items-center justify-center flex-shrink-0 min-w-[60px] self-stretch">
                        <span class="text-[9px] font-bold uppercase text-white/40 tracking-widest">Jour</span>
                        <span class="text-2xl font-display font-bold leading-none">
                            {{ (isset($day['tag']) && $day['tag'] === 'depart-7') ? '07' : str_pad($num, 2, '0', STR_PAD_LEFT) }}
                        </span>
                    </div>
                    {{-- Content --}}
                    <div class="px-6 py-5 flex-1">
                        <div class="flex items-start justify-between gap-4 mb-2">
                            <h3 class="font-display font-bold text-mother-espresso text-lg leading-tight">{{ $day['title'] }}</h3>
                            <div class="flex items-center gap-2 flex-shrink-0">
                                @if (isset($day['badge']))
                                    <span class="bg-mother-gold/15 text-mother-gold text-[9px] font-bold uppercase tracking-widest px-2 py-1 rounded-md">{{ $day['badge'] }}</span>
                                @endif
                                <div class="w-8 h-8 rounded-lg bg-mother-cream flex items-center justify-center text-mother-gold flex-shrink-0">
                                    <i class="fas {{ $day['icon'] }} text-xs"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-mother-earth text-sm leading-relaxed mb-3">{{ $day['desc'] }}</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="text-[10px] font-bold text-mother-espresso bg-mother-cream px-3 py-1 rounded-full flex items-center gap-1.5">
                                <i class="fas fa-car text-mother-gold text-[9px]"></i> Chauffeur Privé
                            </span>
                            <span class="text-[10px] font-bold text-mother-espresso bg-mother-cream px-3 py-1 rounded-full flex items-center gap-1.5">
                                <i class="fas fa-user-tie text-mother-gold text-[9px]"></i> Visite Guidée
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        {{-- Final CTA --}}
        <div class="mt-10 bg-mother-espresso rounded-2xl p-8 md:p-12 text-center section-reveal max-w-3xl mx-auto">
            <h3 class="font-display font-bold text-white text-2xl md:text-3xl mb-4">Prêt à Vivre Cette Aventure ?</h3>
            <p class="text-white/60 text-sm mb-8 leading-relaxed">Réservez votre place pour le prochain départ ou personnalisez cet itinéraire à votre convenance.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/reserver" class="btn btn-cta !px-10">Réserver ce parcours</a>
                <a href="/devis"    class="btn border border-white/25 text-white hover:bg-white hover:text-mother-espresso transition-all !px-10">Personnaliser l'itinéraire</a>
            </div>
        </div>
    </div>
</section>

<style>
    .itin-tab.active      { background: var(--color-mother-espresso); color: white; }
    .itin-tab:not(.active){ color: var(--color-mother-earth); }
</style>

<script>
    function showItinerary(days, btn) {
        document.querySelectorAll('.day-box').forEach(box => {
            const d = parseInt(box.dataset.day);
            if (days === 7) {
                // Show 1-6 and the special departure day (11)
                box.style.display = (d <= 6 || d === 11) ? 'block' : 'none';
            } else {
                // Show 1-10
                box.style.display = (d <= 10) ? 'block' : 'none';
            }
        });
        document.querySelectorAll('.itin-tab').forEach(b => b.classList.remove('active'));
        btn.classList.add('active');
    }
</script>
@endsection
