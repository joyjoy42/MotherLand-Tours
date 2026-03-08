@extends('layouts.app')

@section('content')
<!-- Smokey Header for Itinerary -->
<section style="position: relative; background: url('/images/packs-hero.jpg') center/cover no-repeat; padding: 120px 0; color: white; text-align: center;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(15, 23, 42, 0.85); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <span class="badge-yellow" style="margin-bottom: 20px; display: inline-block;">LE PROGRAMME</span>
        <h1 style="font-size: 3.5rem; color: white; font-weight: 800; margin-bottom: 24px;">L'<span>Itinéraire</span> Signature</h1>
        <p style="color: #cbd5e1; font-size: 1.1rem; max-width: 600px; margin: 0 auto;">Vivez 10 jours d'immersion totale entre culture, histoire et nature sauvage.</p>
    </div>
</section>

<section class="section-padding" style="background: white;">
    <div class="container">
        <!-- Duration Toggle -->
        <div style="display: flex; justify-content: center; background: white; width: fit-content; margin: 0 auto 64px; border-radius: 100px; padding: 10px; box-shadow: var(--shadow-sm);">
            <button class="nav-item active" style="padding: 14px 32px; border: none; cursor: pointer;" onclick="showItinerary(7)">PACK 7 JOURS</button>
            <button class="nav-item" style="padding: 14px 32px; border: none; cursor: pointer;" onclick="showItinerary(10)">PACK 10 JOURS</button>
        </div>

        <div style="max-width: 1000px; margin: 0 auto; position: relative;">
            <!-- Timeline Line -->
            <div style="position: absolute; left: 40px; top: 0; bottom: 0; width: 4px; background: var(--primary); opacity: 0.1; border-radius: 4px; display: none;"></div>

            <div id="itin-days">
                @php
                    $days = [
                        1 => ['title' => 'Arrivée à Cotonou', 'desc' => "Accueil à l'aéroport Cadjehoun, transfert vers votre hôtel de charme. Premier dîner béninois face à l'océan."],
                        2 => ['title' => 'Ouidah - Cité Historique', 'desc' => "Route des esclaves, Porte du Non-Retour et Temple des Pythons. Une journée chargée d'émotions et de respect."],
                        3 => ['title' => 'Ganvié - Venise de l\'Afrique', 'desc' => "Immersion sur la cité lacustre du Lac Nokoué. Découverte du marché flottant et des traditions Tofinu."],
                        4 => ['title' => 'Abomey - Royaume des Rois', 'desc' => "Visite des Palais Royaux (UNESCO). Découverte de l'histoire héroïque des guerrières Amazones."],
                        5 => ['title' => 'Dassa & Savalou', 'desc' => "Route vers les collines sacrées. Échanges avec les communautés locales et découverte du patrimoine spirituel."],
                        6 => ['title' => 'Porto-Novo - La Capitale', 'desc' => "Son architecture afro-brésilienne, le Musée Hommé et ses jardins luxuriants."],
                        7 => ['title' => 'Grand-Popo - Détente', 'desc' => "Balade en pirogue sur le fleuve Mono, observation de la mangrove et détente sur les plages de sable fin."],
                        8 => ['title' => 'Natitingou - Nord Bénin', 'desc' => "Paysages de l'Atacora, visite des Tata Somba (Uniques au monde) et cascades de Tanougou."],
                        9 => ['title' => 'Safari Pendjari', 'desc' => "Une journée entière au cœur de la savane : Lions, éléphants, hippopotames et antilopes."],
                        10 => ['title' => 'Retour & Départ', 'desc' => "Transfert vers Cotonou pour les derniers souvenirs au marché artisanal avant votre vol de retour."],
                    ];
                @endphp

                @foreach ($days as $num => $day)
                <div class="premium-card day-box" data-day="{{ $num }}" style="margin-bottom: 40px; border-radius: var(--radius-lg); display: {{ $num <= 7 ? 'block' : 'none' }};">
                    <div style="display: flex; gap: 40px; align-items: flex-start;">
                        <div style="flex-shrink: 0; text-align: center;">
                            <div style="background: var(--primary); color: white; width: 64px; height: 64px; border-radius: 20px; display: flex; flex-direction: column; align-items: center; justify-content: center; box-shadow: 0 8px 16px -4px rgba(6, 182, 212, 0.3);">
                                <span style="font-size: 0.65rem; font-weight: 800; opacity: 0.8;">JOUR</span>
                                <span style="font-size: 1.6rem; font-weight: 800;">{{ str_pad($num, 2, '0', STR_PAD_LEFT) }}</span>
                            </div>
                        </div>
                        <div style="flex: 1;">
                            <h3 style="font-size: 1.6rem; margin-bottom: 16px; color: var(--dark);">{{ $day['title'] }}</h3>
                            <p style="font-size: 1.05rem; color: #475569; margin-bottom: 24px; line-height: 1.7;">{{ $day['desc'] }}</p>
                            
                            <div style="display: flex; gap: 12px; flex-wrap: wrap;">
                                <span style="background: var(--primary-light); color: var(--primary-dark); padding: 8px 16px; border-radius: 100px; font-size: 0.8rem; font-weight: 700;">VISITE GUIDÉE</span>
                                <span style="background: #f1f5f9; color: #64748b; padding: 8px 16px; border-radius: 100px; font-size: 0.8rem; font-weight: 700;">TRANSPORT PRIVÉ</span>
                                @if($num >= 8) <span class="badge-yellow" style="font-size: 0.7rem; padding: 8px 16px;">Exclusif Pack 10J</span> @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Final CTA -->
            <div class="premium-card" style="text-align: center; background: var(--dark); color: white; margin-top: 80px; position: relative; overflow: hidden;">
                <div style="position: absolute; top: -20px; right: -20px; width: 100px; height: 100px; background: var(--primary); border-radius: 50%; opacity: 0.1;"></div>
                <h3 style="font-size: 2rem; margin-bottom: 24px; color: white;">Prêt à Vivre Cette Aventure ?</h3>
                <p style="color: #94a3b8; margin-bottom: 40px; font-size: 1.1rem;">Réservez votre place dès maintenant ou personnalisez cet itinéraire selon vos besoins.</p>
                <div style="display: flex; gap: 24px; justify-content: center;">
                    <a href="/reserver" class="btn btn-cta">RÉSERVER CE PARCOURS</a>
                    <a href="/devis" class="btn btn-outline" style="background: transparent; border-color: rgba(255,255,255,0.2); color: white;">MODIFIER L'ITINÉRAIRE</a>
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
