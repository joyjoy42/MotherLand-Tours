@extends('layouts.app')

@section('content')

{{-- Page Header --}}
<div class="bg-mother-cream border-b border-mother-sand py-10 text-center">
    <div class="container">
        <h1 class="text-3xl md:text-4xl font-display font-bold text-mother-espresso mb-2">À Propos de Motherland Tours</h1>
    </div>
</div>

<section class="bg-white py-12">
    <div class="container">

        {{-- Mission --}}
        <div class="grid md:grid-cols-2 gap-10 items-center mb-16 section-reveal">
            <div>
                <h2 class="text-2xl font-display font-bold text-mother-espresso mb-5">Notre Mission</h2>
                <div class="space-y-4 text-mother-earth text-sm leading-relaxed">
                    <p>Motherland Tours est née d'une passion : faire découvrir les richesses culturelles et historiques du Bénin aux voyageurs du monde entier, en particulier à la diaspora africaine.</p>
                    <p>Nous créons des expériences authentiques qui vous reconnectent à l'histoire, la culture et la beauté de l'Afrique de l'Ouest.</p>
                </div>
            </div>
            <div>
                <img src="{{ asset('images/assets/abomey.png') }}"
                     class="w-full h-64 md:h-80 object-cover rounded-2xl shadow-lg" alt="Palais royaux d'Abomey">
            </div>
        </div>

        {{-- Valeurs --}}
        <div class="mb-16 section-reveal">
            <h2 class="text-2xl font-display font-bold text-mother-espresso text-center mb-10">Nos Valeurs</h2>
            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-mother-cream border border-mother-sand rounded-2xl p-6 text-center hover:bg-white hover:shadow-md transition-all">
                    <div class="w-14 h-14 bg-white border border-mother-sand rounded-xl flex items-center justify-center mx-auto mb-4 text-mother-gold text-xl">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h4 class="font-bold text-mother-espresso mb-2">Authenticité</h4>
                    <p class="text-mother-earth/70 text-xs leading-relaxed">Des expériences vraies, loin du tourisme de masse.</p>
                </div>
                <div class="bg-mother-cream border border-mother-sand rounded-2xl p-6 text-center hover:bg-white hover:shadow-md transition-all">
                    <div class="w-14 h-14 bg-white border border-mother-sand rounded-xl flex items-center justify-center mx-auto mb-4 text-mother-gold text-xl">
                        <i class="fas fa-shield-halved"></i>
                    </div>
                    <h4 class="font-bold text-mother-espresso mb-2">Sécurité</h4>
                    <p class="text-mother-earth/70 text-xs leading-relaxed">Votre bien-être est notre priorité absolue.</p>
                </div>
                <div class="bg-mother-cream border border-mother-sand rounded-2xl p-6 text-center hover:bg-white hover:shadow-md transition-all">
                    <div class="w-14 h-14 bg-white border border-mother-sand rounded-xl flex items-center justify-center mx-auto mb-4 text-mother-gold text-xl">
                        <i class="fas fa-people-group"></i>
                    </div>
                    <h4 class="font-bold text-mother-espresso mb-2">Convivialité</h4>
                    <p class="text-mother-earth/70 text-xs leading-relaxed">Petits groupes pour créer des liens durables.</p>
                </div>
                <div class="bg-mother-cream border border-mother-sand rounded-2xl p-6 text-center hover:bg-white hover:shadow-md transition-all">
                    <div class="w-14 h-14 bg-white border border-mother-sand rounded-xl flex items-center justify-center mx-auto mb-4 text-mother-gold text-xl">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h4 class="font-bold text-mother-espresso mb-2">Excellence</h4>
                    <p class="text-mother-earth/70 text-xs leading-relaxed">Service de qualité du début à la fin.</p>
                </div>
            </div>
        </div>

        {{-- Vision --}}
        <div class="bg-mother-espresso rounded-2xl p-10 md:p-16 mb-16 text-center section-reveal">
            <h2 class="text-2xl md:text-3xl font-display font-bold text-white mb-6">Notre Vision</h2>
            <div class="max-w-3xl mx-auto space-y-4 text-white/70 text-sm leading-relaxed">
                <p>Nous rêvons d'un tourisme qui valorise le patrimoine africain et contribue au développement local. Chaque voyage que nous organisons bénéficie directement aux communautés locales : guides, artisans, hôtels familiaux.</p>
                <p>Notre ambition est de devenir la référence pour les voyages culturels en Afrique de l'Ouest, en restant fidèles à nos valeurs d'authenticité et de respect.</p>
            </div>
        </div>

        {{-- Garanties Sécurité --}}
        <div class="mb-16 section-reveal">
            <h2 class="text-2xl font-display font-bold text-mother-espresso text-center mb-8">Garanties Sécurité</h2>
            <div class="premium-card !p-0 overflow-hidden">
                <div class="grid md:grid-cols-2">
                    <div class="p-8 border-r border-mother-sand">
                        <h4 class="font-bold text-mother-espresso mb-5 text-sm uppercase tracking-wider">Avant votre départ</h4>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3 text-sm text-mother-earth"><i class="fas fa-check-square text-mother-gold"></i> Briefing complet sur le pays et les coutumes</li>
                            <li class="flex items-center gap-3 text-sm text-mother-earth"><i class="fas fa-check-square text-mother-gold"></i> Liste des recommandations santé et vaccins</li>
                            <li class="flex items-center gap-3 text-sm text-mother-earth"><i class="fas fa-check-square text-mother-gold"></i> Numéros d'urgence et contacts locaux</li>
                            <li class="flex items-center gap-3 text-sm text-mother-earth"><i class="fas fa-check-square text-mother-gold"></i> Assurance voyage recommandée</li>
                        </ul>
                    </div>
                    <div class="p-8">
                        <h4 class="font-bold text-mother-espresso mb-5 text-sm uppercase tracking-wider">Pendant votre séjour</h4>
                        <ul class="space-y-3">
                            <li class="flex items-center gap-3 text-sm text-mother-earth"><i class="fas fa-check-square text-mother-gold"></i> Guides locaux expérimentés et certifiés</li>
                            <li class="flex items-center gap-3 text-sm text-mother-earth"><i class="fas fa-check-square text-mother-gold"></i> Assistance disponible 24h/24 et 7j/7</li>
                            <li class="flex items-center gap-3 text-sm text-mother-earth"><i class="fas fa-check-square text-mother-gold"></i> Véhicules récents et bien entretenus</li>
                            <li class="flex items-center gap-3 text-sm text-mother-earth"><i class="fas fa-check-square text-mother-gold"></i> Hébergements sélectionnés et vérifiés</li>
                        </ul>
                    </div>
                </div>
                <div class="bg-mother-gold/10 border-t border-mother-gold/20 p-4 text-center">
                    <p class="text-mother-earth text-sm font-medium">
                        <i class="fas fa-certificate text-mother-gold mr-2"></i>
                        <strong>Certification & Partenaires :</strong> Motherland Tours est enregistrée auprès des autorités touristiques du Bénin et travaille en partenariat avec des acteurs locaux reconnus.
                    </p>
                </div>
            </div>
        </div>

        {{-- Notre Équipe --}}
        <div class="mb-16 section-reveal">
            <h2 class="text-2xl font-display font-bold text-mother-espresso text-center mb-6">Notre Équipe</h2>
            <div class="premium-card max-w-3xl mx-auto">
                <p class="text-mother-earth text-sm leading-relaxed mb-4">
                    Notre équipe est composée de passionnés du Bénin : guides locaux, experts en tourisme culturel, et professionnels du voyage qui connaissent le pays sur le bout des doigts.
                </p>
                <p class="text-mother-earth text-sm leading-relaxed">
                    Chacun de nos guides est natif du Bénin, parle français et anglais, et possède une expertise approfondie de l'histoire et de la culture du pays.
                </p>
            </div>
        </div>

        {{-- Final CTA --}}
        <div class="bg-mother-cream border border-mother-sand rounded-2xl p-10 text-center section-reveal">
            <h2 class="text-2xl font-display font-bold text-mother-espresso mb-3">Prêt à Découvrir le Bénin avec Nous ?</h2>
            <p class="text-mother-earth/70 text-sm mb-7">Rejoignez les centaines de voyageurs qui nous ont fait confiance.</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="/packs"    class="btn btn-cta !px-8">Voir nos Packs</a>
                <a href="/contact"  class="btn border border-mother-espresso text-mother-espresso hover:bg-mother-espresso hover:text-white transition-all !px-8">Nous Contacter</a>
            </div>
        </div>
    </div>
</section>

@endsection
