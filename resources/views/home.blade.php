<!-- DIAGNOSTIC: Premium UI V3 - Original Structure Preserved -->
@extends('layouts.app')

@section('title', 'MotherLand Tours | Voyage au Bénin & Tourisme Authentique')
@section('meta_description', 'Agence de voyage au Bénin proposant des circuits touristiques immersifs. Découvrez la culture, l\'histoire et les paysages authentiques avec nos packs voyage bénin.')
@section('meta_keywords', 'voyage au benin, tourisme benin, pack voyage benin, circuit touristique bénin, agence voyage afrique, découvrir le bénin, motherland tours')

@section('content')

{{-- ── Hero ── --}}
<section class="relative bg-mother-espresso text-white py-28 md:py-36 overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('images/assets/porte_du_non_retour_night_new.png') }}"
             class="w-full h-full object-cover opacity-15" alt="Bénin">
        <div class="absolute inset-0 bg-gradient-to-r from-mother-espresso via-mother-espresso/90 to-mother-espresso/60"></div>
    </div>

    <div class="container relative z-10">
        <div class="max-w-2xl">
            <span class="inline-flex items-center gap-2 text-mother-gold text-xs font-bold uppercase tracking-widest mb-6">
                <span class="w-1.5 h-1.5 rounded-full bg-mother-gold animate-pulse"></span>
                Tourisme Culturel · Bénin
            </span>
            <h1 class="text-4xl md:text-6xl font-display font-bold leading-tight mb-6">
                Découvrez le Bénin<br/>
                <span class="text-mother-gold">Autrement.</span>
            </h1>
            <p class="text-white/70 text-lg leading-relaxed mb-10 max-w-lg">
                L'agence de voyage pionnière pour une immersion authentique. Explorez des terres sacrées avec l'excellence du service sur-mesure.
            </p>
            <div class="flex flex-wrap gap-4">
                <a href="/reserver" class="btn btn-cta !px-8 !py-3.5 !text-sm">Initier mon voyage</a>
                <a href="/packs"    class="btn border border-white/30 text-white hover:bg-white hover:text-mother-espresso !px-8 !py-3.5 !text-sm transition-all">Nos Itinéraires</a>
            </div>
        </div>
    </div>
</section>

{{-- ── Destinations ── --}}
<section class="section-padding bg-white section-reveal">
    <div class="container">
        <div class="text-center mb-12">
            <span class="text-mother-gold text-xs font-bold uppercase tracking-widest block mb-3">Destinations</span>
            <h2 class="text-3xl md:text-5xl font-display text-mother-espresso">Terres de <span class="text-mother-gold italic">Légendes.</span></h2>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            {{-- Ganvié --}}
            <div class="group relative h-80 overflow-hidden rounded-2xl shadow-lg">
                <img src="{{ asset('images/assets/ganvie.png') }}"
                     class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700" alt="Ganvié">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                <div class="absolute bottom-6 left-6 right-6">
                    <h3 class="text-xl text-white font-display font-bold mb-1">Ganvié</h3>
                    <p class="text-white/70 text-sm leading-snug">La « Venise de l'Afrique » — cité lacustre millénaire sur pilotis.</p>
                </div>
            </div>
            {{-- Abomey --}}
            <div class="group relative h-80 overflow-hidden rounded-2xl shadow-lg md:translate-y-6">
                <img src="{{ asset('images/assets/abomey.png') }}"
                     class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700" alt="Abomey">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                <div class="absolute bottom-6 left-6 right-6">
                    <h3 class="text-xl text-white font-display font-bold mb-1">Palais d'Abomey</h3>
                    <p class="text-white/70 text-sm leading-snug">Site UNESCO — l'épopée des rois du Dahomey.</p>
                </div>
            </div>
            {{-- Tata Somba --}}
            <div class="group relative h-80 overflow-hidden rounded-2xl shadow-lg">
                <img src="{{ asset('images/assets/tata_somba.png') }}"
                     class="w-full h-full object-cover group-hover:scale-105 transition-all duration-700" alt="Tata Somba">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                <div class="absolute bottom-6 left-6 right-6">
                    <h3 class="text-xl text-white font-display font-bold mb-1">Tata Somba</h3>
                    <p class="text-white/70 text-sm leading-snug">Châteaux de terre fortifiés — ingéniosité ancestrale du Nord.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── Spiritualité ── --}}
<section class="section-padding bg-mother-cream section-reveal">
    <div class="container">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div>
                <span class="text-mother-gold text-xs font-bold uppercase tracking-widest block mb-4">Spiritualité</span>
                <h2 class="text-3xl md:text-5xl font-display text-mother-espresso mb-6">L'Âme du <span class="italic text-mother-gold">Vaudou.</span></h2>
                <div class="space-y-4 text-mother-earth text-base leading-relaxed">
                    <p>Bien loin des clichés, le Vaudou au Bénin est une philosophie de vie, un respect profond de la nature et des ancêtres. Une quête d'harmonie absolue.</p>
                    <p>Nous vous invitons à découvrir cette culture à travers ses rituels sacrés, accompagnés de guides qui en maîtrisent les codes et le respect profond.</p>
                </div>
                <a href="/itineraire" class="btn btn-cta !mt-8 !px-8">Explorer le Parcours</a>
            </div>
            <div>
                <img src="{{ asset('images/assets/ganvie.png') }}"
                     class="w-full h-80 md:h-96 object-cover rounded-2xl shadow-xl" alt="Culture Vaudou">
            </div>
        </div>
    </div>
</section>

{{-- ── Nos Offres ── --}}
<section class="section-padding bg-mother-espresso text-white section-reveal">
    <div class="container">
        <div class="text-center mb-12">
            <span class="text-mother-gold text-xs font-bold uppercase tracking-widest block mb-3">Prélude</span>
            <h2 class="text-3xl md:text-5xl font-display">Nos Offres <span class="text-mother-gold italic font-light">Signature.</span></h2>
            <p class="text-white/50 mt-4 text-base max-w-md mx-auto">Des parcours dessinés pour l'excellence, alliant confort d'exception et immersion radicale.</p>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            {{-- Pack 7 Jours --}}
            <div class="bg-white/5 border border-white/10 rounded-2xl p-8 hover:bg-white/10 transition-all duration-500">
                <div class="flex justify-between items-start mb-8">
                    <div class="w-12 h-12 bg-mother-gold/20 text-mother-gold rounded-xl flex items-center justify-center">
                        <i class="fas fa-map-marked-alt text-xl"></i>
                    </div>
                    <span class="text-[10px] font-bold text-white/30 tracking-widest uppercase">ESCALE I / 07 Jrs</span>
                </div>
                <h3 class="text-2xl font-display font-bold text-white mb-3">L'Essentiel Sud</h3>
                <p class="text-white/50 mb-6 text-sm leading-relaxed">Explorez le triangle d'or : Cotonou, Ouidah et Ganvié. L'immersion parfaite.</p>
                <div class="flex items-baseline gap-2 mb-6">
                    <span class="text-mother-gold font-bold text-3xl font-display">850€</span>
                    <span class="text-white/30 text-xs uppercase tracking-widest">/ Voyageur</span>
                </div>
                <a href="/packs" class="btn border border-white/25 text-white w-full hover:bg-white hover:text-mother-espresso transition-all">Consulter l'Itinéraire</a>
            </div>

            {{-- Pack 10 Jours --}}
            <div class="relative bg-white rounded-2xl p-8 text-mother-espresso shadow-2xl">
                <div class="absolute top-0 right-0 py-2 px-5 bg-mother-gold text-white text-[10px] font-bold uppercase tracking-widest rounded-bl-xl rounded-tr-2xl">Recommandé</div>
                <div class="flex justify-between items-start mb-8">
                    <div class="w-12 h-12 bg-mother-espresso text-white rounded-xl flex items-center justify-center">
                        <i class="fas fa-paw text-xl"></i>
                    </div>
                    <span class="text-[10px] font-bold text-mother-earth/30 tracking-widest uppercase">ESCALE II / 10 Jrs</span>
                </div>
                <h3 class="text-2xl font-display font-bold text-mother-espresso mb-3">Safari Nord & Tata</h3>
                <p class="text-mother-espresso/50 mb-6 text-sm leading-relaxed">Tata Somba et Pendjari. Pour les âmes en quête de sauvage et d'authenticité.</p>
                <div class="flex items-baseline gap-2 mb-6">
                    <span class="text-mother-espresso font-bold text-3xl font-display">1,450€</span>
                    <span class="text-mother-espresso/30 text-xs uppercase tracking-widest">/ Voyageur</span>
                </div>
                <a href="/packs" class="btn btn-cta w-full">Initier l'Expédition</a>
            </div>
        </div>
    </div>
</section>

{{-- ── Pourquoi Nous ── --}}
<section class="section-padding bg-white section-reveal">
    <div class="container">
        <div class="text-center mb-12">
            <span class="text-mother-gold text-xs font-bold uppercase tracking-widest block mb-3">Notre ADN</span>
            <h2 class="text-3xl md:text-4xl font-display text-mother-espresso">L'excellence au service <span class="italic text-mother-gold">de l'authentique.</span></h2>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center group">
                <div class="w-16 h-16 bg-mother-cream rounded-full flex items-center justify-center mx-auto mb-5 group-hover:bg-mother-gold transition-all">
                    <i class="fas fa-users-viewfinder text-2xl text-mother-gold group-hover:text-white transition-colors"></i>
                </div>
                <h4 class="text-lg font-display font-bold text-mother-espresso mb-3">Groupes Ultra-Privés</h4>
                <p class="text-mother-earth text-sm leading-relaxed">Limités à 5 explorateurs pour une agilité totale et une immersion préservée des foules.</p>
            </div>
            <div class="text-center group">
                <div class="w-16 h-16 bg-mother-cream rounded-full flex items-center justify-center mx-auto mb-5 group-hover:bg-mother-gold transition-all">
                    <i class="fas fa-shield-heart text-2xl text-mother-gold group-hover:text-white transition-colors"></i>
                </div>
                <h4 class="text-lg font-display font-bold text-mother-espresso mb-3">Conciergerie Native</h4>
                <p class="text-mother-earth text-sm leading-relaxed">Une assistance francophone 24/7 assurée par des locaux qui connaissent chaque secret du terrain.</p>
            </div>
            <div class="text-center group">
                <div class="w-16 h-16 bg-mother-cream rounded-full flex items-center justify-center mx-auto mb-5 group-hover:bg-mother-gold transition-all">
                    <i class="fas fa-earth-africa text-2xl text-mother-gold group-hover:text-white transition-colors"></i>
                </div>
                <h4 class="text-lg font-display font-bold text-mother-espresso mb-3">Impact Vertueux</h4>
                <p class="text-mother-earth text-sm leading-relaxed">Nous soutenons directement l'économie locale en reversant une part de chaque séjour aux villages.</p>
            </div>
        </div>
    </div>
</section>

{{-- ── Témoignages ── --}}
<section class="section-padding bg-mother-cream section-reveal">
    <div class="container">
        <div class="text-center mb-12">
            <span class="text-mother-gold text-xs font-bold uppercase tracking-widest block mb-3">Retours d'Expérience</span>
            <h2 class="text-3xl md:text-4xl font-display text-mother-espresso">Ils sont partis avec nous,<br/>ils sont revenus changés.</h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            <div class="premium-card">
                <div class="flex gap-1 text-mother-gold mb-5 text-sm">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p class="italic text-mother-earth/80 mb-6 text-base leading-relaxed font-display">"Une expérience inoubliable. L'organisation était parfaite et nous avons découvert des lieux magnifiques, portés par une équipe d'exception."</p>
                <div class="flex items-center gap-4">
                    <div class="w-11 h-11 bg-mother-espresso text-white rounded-full flex items-center justify-center font-bold text-sm">M</div>
                    <div>
                        <div class="font-bold text-mother-espresso text-sm">Marie D.</div>
                        <div class="text-[10px] font-bold text-mother-gold uppercase tracking-widest">Voyageuse · Paris</div>
                    </div>
                </div>
            </div>
            <div class="premium-card">
                <div class="flex gap-1 text-mother-gold mb-5 text-sm">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p class="italic text-mother-earth/80 mb-6 text-base leading-relaxed font-display">"Je recommande vivement Motherland Tours. Le rapport qualité-prix est excellent et l'accueil est tout simplement royal."</p>
                <div class="flex items-center gap-4">
                    <div class="w-11 h-11 bg-mother-espresso text-white rounded-full flex items-center justify-center font-bold text-sm">J</div>
                    <div>
                        <div class="font-bold text-mother-espresso text-sm">Jean K.</div>
                        <div class="text-[10px] font-bold text-mother-gold uppercase tracking-widest">Voyageur · Abidjan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ── Final CTA ── --}}
<section class="bg-mother-espresso py-20 section-reveal">
    <div class="container text-center">
        <span class="text-mother-gold text-xs font-bold uppercase tracking-widest block mb-4">L'aventure commence ici</span>
        <h2 class="text-3xl md:text-5xl font-display text-white mb-6">Le Bénin n'attend <span class="italic text-mother-gold">plus que vous.</span></h2>
        <p class="text-white/50 mb-10 max-w-md mx-auto">Rejoignez les centaines de voyageurs qui ont fait confiance à Motherland Tours.</p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="/reserver" class="btn btn-cta !px-10">Initier mon voyage</a>
            <a href="/devis"    class="btn border border-white/25 text-white hover:bg-white hover:text-mother-espresso !px-10 transition-all">Configuration Devis</a>
        </div>
    </div>
</section>

@endsection
