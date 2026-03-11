<!-- DIAGNOSTIC: Premium UI Update Applied -->
@extends('layouts.app')

@section('content')
<!-- Premium Hero Section -->
<section class="relative min-h-[90vh] flex items-center overflow-hidden pt-24">
    <div class="container relative z-10 grid lg:grid-cols-2 gap-16 items-center">
        <div class="animate-fade-in group">
            <div class="inline-flex items-center gap-2 bg-mother-terracotta/10 text-mother-terracotta px-4 py-2 rounded-full text-xs font-bold tracking-widest uppercase mb-8 border border-mother-terracotta/20">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-mother-terracotta opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-mother-terracotta"></span>
                </span>
                Expérience Authentique
            </div>
            <h1 class="text-6xl lg:text-9xl font-display font-semibold leading-[0.95] tracking-tight mb-12 text-mother-earth">
                Votre <span class="text-mother-terracotta italic underline decoration-mother-terracotta/10 underline-offset-8">Voyage</span>,<br/>
                Votre Découverte.
            </h1>
            <p class="text-xl text-slate-500 mb-20 max-w-lg leading-loose text-balance">
                Nous organisons votre voyage et votre découverte de la terre béninoise. Plongez au cœur d’une culture millénaire et d'aventures inoubliables.
            </p>
            <div class="flex flex-wrap gap-8">
                <a href="/reserver" class="btn btn-cta shadow-2xl">Exploration Sacrée <i class="fas fa-chevron-right text-xs"></i></a>
                <a href="/packs" class="btn border-2 border-mother-terracotta/20 text-mother-earth hover:border-mother-terracotta hover:text-mother-terracotta">Nos Itinéraires</a>
            </div>
        </div>
        
        <div class="relative lg:h-[700px] flex items-center justify-center">
            <!-- Decorative Elements -->
            <div class="absolute -top-10 -right-10 w-64 h-64 bg-mother-terracotta/10 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-10 -left-10 w-48 h-48 bg-mother-teal/10 rounded-full blur-2xl"></div>
            
            <!-- Staggered Image Gallery -->
            <div class="relative w-full h-full flex items-center justify-center translate-x-4 lg:translate-x-12">
                <div class="relative z-20 w-4/5 h-[600px] overflow-hidden rounded-[5rem] shadow-2xl transform shadow-mother-terracotta/5 group hover:scale-[1.02] transition-premium">
                    <img src="{{ asset('images/assets/porte_du_non_retour_night_new.png') }}" class="w-full h-full object-cover object-[center_20%]" alt="Porte du Non Retour">
                    <div class="absolute inset-x-0 bottom-0 bg-white/80 backdrop-blur-md p-12 translate-y-full group-hover:translate-y-0 transition-premium">
                        <p class="text-[10px] font-bold tracking-[0.4em] uppercase mb-4 opacity-70 text-mother-earth">Ouidah la Mystique</p>
                        <h4 class="text-2xl text-mother-earth">Porte du Non Retour</h4>
                    </div>
                </div>
                <div class="absolute -left-12 bottom-12 z-30 w-1/2 h-64 overflow-hidden rounded-[3rem] shadow-2xl border-4 border-white transition-premium hover:-translate-y-4">
                    <img src="{{ asset('images/assets/abomey.png') }}" class="w-full h-full object-cover" alt="Vue détaillée des palais royaux historiques d'Abomey">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Culture & Destinations Section -->
<section class="section-padding bg-mother-cream/30 relative overflow-hidden section-reveal">
    <div class="container">
        <div class="text-center mb-32">
            <span class="text-mother-terracotta font-bold text-xs uppercase tracking-[0.3em] mb-8 block">Immersion</span>
            <h2 class="text-5xl lg:text-7xl font-display text-mother-earth leading-tight">Terres de <span class="text-mother-terracotta italic">Légendes.</span></h2>
        </div>

        <div class="grid lg:grid-cols-3 gap-12">
            <!-- Ganvié -->
            <div class="group relative h-[500px] overflow-hidden rounded-[3rem] shadow-xl">
                <img src="{{ asset('images/assets/ganvie.png') }}" class="w-full h-full object-cover group-hover:scale-110 transition-premium duration-1000" alt="Maisons sur pilotis traditionnelles du village lacustre de Ganvié">
                <div class="absolute inset-0 bg-gradient-to-t from-mother-earth/80 via-transparent to-transparent"></div>
                <div class="absolute bottom-10 left-10 right-10">
                    <h3 class="text-2xl text-white font-display mb-2">Ganvié</h3>
                    <p class="text-white/70 text-sm leading-relaxed">Surnommée la "Venise de l'Afrique", cette cité lacustre millénaire construite sur pilotis offre un spectacle unique de vie sur l'eau et de traditions de pêche préservées.</p>
                </div>
            </div>
            <!-- Abomey -->
            <div class="group relative h-[500px] overflow-hidden rounded-[3rem] shadow-xl lg:translate-y-12">
                <img src="{{ asset('images/assets/abomey.png') }}" class="w-full h-full object-cover group-hover:scale-110 transition-premium duration-1000" alt="Architecture des palais royaux du royaume du Dahomey à Abomey">
                <div class="absolute inset-0 bg-gradient-to-t from-mother-earth/80 via-transparent to-transparent"></div>
                <div class="absolute bottom-10 left-10 right-10">
                    <h3 class="text-2xl text-white font-display mb-2">Palais d'Abomey</h3>
                    <p class="text-white/70 text-sm leading-relaxed">Plongez dans l'épopée des rois du Dahomey. Un site classé à l'UNESCO où chaque bas-relief raconte la puissance et le courage d'une lignée de souverains légendaires.</p>
                </div>
            </div>
            <!-- Tata Somba -->
            <div class="group relative h-[500px] overflow-hidden rounded-[3rem] shadow-xl">
                <img src="{{ asset('images/assets/tata_somba.png') }}" class="w-full h-full object-cover group-hover:scale-110 transition-premium duration-1000" alt="Habitations traditionnelles fortifiées Tata Somba dans le nord du Bénin">
                <div class="absolute inset-0 bg-gradient-to-t from-mother-earth/80 via-transparent to-transparent"></div>
                <div class="absolute bottom-10 left-10 right-10">
                    <h3 class="text-2xl text-white font-display mb-2">Tata Somba</h3>
                    <p class="text-white/70 text-sm leading-relaxed">Découvrez l'architecture unique des Somba. Ces châteaux de terre fortifiés témoignent d'une ingéniosité ancestrale pour s'harmoniser avec la nature sauvage du nord.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Art & Spiritualité (Vaudou) Section -->
<section class="section-padding bg-white relative overflow-hidden section-reveal">
    <div class="container">
        <div class="grid lg:grid-cols-2 gap-24 items-center">
            <div>
                <span class="text-mother-terracotta font-bold text-xs uppercase tracking-[0.2em] mb-8 block">Spiritualité</span>
                <h2 class="text-5xl lg:text-7xl font-display text-mother-earth mb-12 leading-tight">L'Âme du <br/><span class="italic text-mother-terracotta">Vaudou.</span></h2>
                <div class="space-y-8 text-slate-500 text-lg leading-loose">
                    <p>Bien loin des clichés, le Vaudou au Bénin est une philosophie de vie, un respect profond de la nature et des ancêtres. C'est une spiritualité qui prône l'harmonie et l'équilibre.</p>
                    <p>Nous vous invitons à découvrir cette culture à travers ses danses rituelles, ses chants sacrés et ses temples cachés, accompagnés de guides qui en maîtrisent les codes et le respect profond.</p>
                </div>
                <div class="mt-12">
                    <a href="/itineraire" class="btn btn-primary bg-mother-earth text-white rounded-2xl">Découvrir le parcours</a>
                </div>
            </div>
            <div class="relative">
                <div class="absolute -inset-10 bg-mother-terracotta/5 rounded-full blur-3xl"></div>
                <img src="{{ asset('images/assets/ganvie.png') }}" class="relative z-10 w-full h-[600px] object-cover rounded-[3.5rem] shadow-2xl transition-premium hover:scale-[1.02]" alt="Cérémonie et immersion dans la culture spirituelle Vaudou au Bénin">
            </div>
        </div>
    </div>
</section>

<!-- Nos Offres Section -->
<section class="section-padding bg-mother-earth relative overflow-hidden text-white section-reveal py-32 lg:py-48">
    <div class="container relative z-10">
        <div class="grid lg:grid-cols-2 gap-24 items-end mb-32">
            <div class="mb-32">
                <span class="text-mother-terracotta font-bold text-xs uppercase tracking-[0.3em] mb-8 block">Pour Vous</span>
                <h2 class="text-5xl lg:text-7xl font-display text-white leading-tight">Nos Offres <br/><span class="text-mother-terracotta italic">Signature.</span></h2>
            </div>
            <div class="pb-4">
                <p class="text-slate-300 max-w-md text-balance leading-loose">
                    Nos parcours sont soigneusement dessinés pour offrir un équilibre parfait entre confort d'exception et immersion radicale.
                </p>
            </div>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-24">
            <!-- Pack 7 Jours -->
            <div class="premium-card group hover:bg-white/5 border-white/5">
                <div class="flex justify-between items-start mb-16">
                    <div class="w-20 h-20 bg-mother-cream/5 flex items-center justify-center rounded-2xl group-hover:bg-mother-terracotta group-hover:text-white transition-premium">
                        <i class="fas fa-map-marked-alt text-3xl"></i>
                    </div>
                    <span class="text-xs font-bold text-white/40 tracking-widest uppercase">01 / Limited</span>
                </div>
                <h3 class="text-4xl mb-6 text-white group-hover:text-mother-terracotta transition-premium leading-tight">L'Essentiel Sud</h3>
                <p class="text-slate-400 mb-12 leading-loose text-sm">7 jours pour explorer le triangle d'or : Cotonou, Ouidah et Ganvié. L'immersion parfaite pour une première rencontre.</p>
                <ul class="space-y-5 mb-16">
                    <li class="flex items-center gap-5 text-sm font-semibold text-slate-300">
                        <span class="w-8 h-8 bg-mother-terracotta/10 text-mother-terracotta rounded-full flex items-center justify-center text-[10px]"><i class="fas fa-check"></i></span>
                        Billet AR & Visa inclus
                    </li>
                    <li class="flex items-center gap-5 text-sm font-semibold text-slate-300">
                        <span class="w-8 h-8 bg-mother-terracotta/10 text-mother-terracotta rounded-full flex items-center justify-center text-[10px]"><i class="fas fa-check"></i></span>
                        Hôtels Boutique Privatisés
                    </li>
                    <li class="flex items-center gap-5 text-sm font-semibold text-slate-300">
                        <span class="w-8 h-8 bg-mother-terracotta/10 text-mother-terracotta rounded-full flex items-center justify-center text-[10px]"><i class="fas fa-check"></i></span>
                        Chauffeur Privé & Carburant
                    </li>
                </ul>
                <a href="/packs" class="btn btn-primary w-full bg-white text-mother-earth hover:bg-mother-terracotta hover:text-white border-none shadow-2xl">Détails de l'Offre</a>
            </div>

            <!-- Pack 10 Jours -->
            <div class="premium-card group border-mother-terracotta/20 bg-white shadow-mother-terracotta/10">
                <div class="absolute top-0 right-0 py-3 px-8 bg-mother-terracotta text-white text-[10px] font-bold uppercase tracking-widest rounded-bl-3xl">Expert Choice</div>
                <div class="flex justify-between items-start mb-16">
                    <div class="w-20 h-20 bg-mother-cream flex items-center justify-center rounded-2xl group-hover:bg-mother-earth group-hover:text-white transition-premium">
                        <i class="fas fa-paw text-3xl"></i>
                    </div>
                    <span class="text-xs font-bold text-slate-300 tracking-widest uppercase">02 / Safari</span>
                </div>
                <h3 class="text-4xl mb-6 text-mother-earth group-hover:text-mother-terracotta transition-premium leading-tight">Grand Safari Nord</h3>
                <p class="text-slate-500 mb-12 leading-loose text-sm">10 jours incluant les Tata Somba et le Parc de la Pendjari. Pour les âmes en quête de sauvage et d'authenticité.</p>
                <ul class="space-y-5 mb-16">
                    <li class="flex items-center gap-5 text-sm font-semibold text-slate-600">
                        <span class="w-8 h-8 bg-mother-terracotta/10 text-mother-terracotta rounded-full flex items-center justify-center text-[10px]"><i class="fas fa-check"></i></span>
                        Safari Pendjari Inclus
                    </li>
                    <li class="flex items-center gap-5 text-sm font-semibold text-slate-600">
                        <span class="w-8 h-8 bg-mother-terracotta/10 text-mother-terracotta rounded-full flex items-center justify-center text-[10px]"><i class="fas fa-check"></i></span>
                        Guide Expert Certifié
                    </li>
                    <li class="flex items-center gap-5 text-sm font-semibold text-slate-600">
                        <span class="w-8 h-8 bg-mother-terracotta/10 text-mother-terracotta rounded-full flex items-center justify-center text-[10px]"><i class="fas fa-check"></i></span>
                        Pension Complète incluse
                    </li>
                </ul>
                <a href="/packs" class="btn btn-cta w-full py-7 rounded-[2rem] shadow-2xl shadow-mother-terracotta/30">Réserver mon Expédition</a>
            </div>
        </div>
    </div>
</section>

<!-- Pourquoi Nous -->
<section class="section-padding bg-slate-50 section-reveal">
    <div class="container">
        <div class="text-center mb-24">
            <span class="text-mother-terracotta font-bold tracking-widest uppercase text-xs">Notre ADN</span>
            <h2 class="text-5xl mt-4">L'excellence au service <br/>de l'authentique.</h2>
        </div>
        
        <div class="grid lg:grid-cols-3 gap-16">
            <div class="text-center group">
                <div class="w-24 h-24 bg-white rounded-full shadow-[--shadow-float] flex items-center justify-center mx-auto mb-8 group-hover:scale-110 transition-premium">
                    <i class="fas fa-users-viewfinder text-3xl text-mother-terracotta"></i>
                </div>
                <h4 class="text-xl mb-4">Groupes Ultra-Privés</h4>
                <p class="text-slate-500 text-sm leading-relaxed">Limités à 5 explorateurs pour une agilité totale et une immersion préservée des foules.</p>
            </div>
            <div class="text-center group">
                <div class="w-24 h-24 bg-white rounded-full shadow-[--shadow-float] flex items-center justify-center mx-auto mb-8 group-hover:scale-110 transition-premium">
                    <i class="fas fa-shield-heart text-3xl text-mother-terracotta"></i>
                </div>
                <h4 class="text-xl mb-4">Conciergerie Native</h4>
                <p class="text-slate-500 text-sm leading-relaxed">Une assistance francophone 24/7 assurée par des locaux qui connaissent chaque secret du terrain.</p>
            </div>
            <div class="text-center group">
                <div class="w-24 h-24 bg-white rounded-full shadow-[--shadow-float] flex items-center justify-center mx-auto mb-8 group-hover:scale-110 transition-premium">
                    <i class="fas fa-earth-africa text-3xl text-mother-terracotta"></i>
                </div>
                <h4 class="text-xl mb-4">Impact Vertueux</h4>
                <p class="text-slate-500 text-sm leading-relaxed">Nous soutenons directement l'économie locale en reversant une part de chaque séjour aux villages.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section-padding py-32 lg:py-48 bg-white">
    <div class="container">
        <div class="text-center mb-24">
            <span class="text-mother-terracotta font-bold tracking-widest uppercase text-xs">Retours d'Expérience</span>
            <h2 class="text-5xl mt-6 leading-tight">Ils sont partis avec nous,<br/>ils sont revenus changés.</h2>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-16 lg:gap-24">
            <div class="premium-card bg-mother-cream/30 border-none shadow-none">
                <div class="flex gap-1 text-mother-terracotta mb-10 text-xs">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p class="italic text-slate-600 mb-12 text-xl leading-loose font-serif">"Une expérience inoubliable ! L'organisation était parfaite et nous avons découvert des lieux magnifiques que nous n'aurions jamais vus seuls."</p>
                <div class="flex items-center gap-6">
                    <div class="w-14 h-14 bg-mother-terracotta text-white rounded-full flex items-center justify-center font-bold shadow-lg">M</div>
                    <div>
                        <div class="font-bold text-mother-earth text-lg">Marie D.</div>
                        <div class="text-xs font-bold text-mother-terracotta/60 uppercase tracking-widest">Voyageuse - Paris</div>
                    </div>
                </div>
            </div>
            <div class="premium-card bg-mother-cream/30 border-none shadow-none">
                <div class="flex gap-1 text-mother-terracotta mb-10 text-xs">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p class="italic text-slate-600 mb-12 text-xl leading-loose font-serif">"Je recommande vivement Motherland Tours. Le rapport qualité-prix est excellent et l'accueil des guides est tout simplement incroyable."</p>
                <div class="flex items-center gap-6">
                    <div class="w-14 h-14 bg-mother-terracotta text-white rounded-full flex items-center justify-center font-bold shadow-lg">J</div>
                    <div>
                        <div class="font-bold text-mother-earth text-lg">Jean K.</div>
                        <div class="text-xs font-bold text-mother-terracotta/60 uppercase tracking-widest">Voyageur - Abidjan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="padding-y relative overflow-hidden section-reveal py-32 lg:py-48">
    <div class="container relative z-10 px-6">
        <div class="bg-mother-earth rounded-[5rem] p-16 lg:p-32 text-center relative overflow-hidden group shadow-2xl shadow-mother-terracotta/10">
            <!-- Animated Background Circles -->
            <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-mother-terracotta rounded-full opacity-10 group-hover:scale-150 transition-premium duration-1000"></div>
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-mother-teal rounded-full opacity-5 group-hover:scale-150 transition-premium duration-1000"></div>
            
            <div class="relative z-10">
                <span class="text-mother-terracotta font-bold tracking-widest uppercase text-xs">L'aventure commence ici</span>
                <h2 class="!text-white text-5xl lg:text-8xl mt-10 mb-16 leading-tight font-semibold">Le Bénin n'attend <br/>plus que vous.</h2>
                <div class="flex flex-wrap justify-center gap-10">
                    <a href="/reserver" class="btn btn-cta px-16 shadow-2xl">Initier mon voyage</a>
                    <a href="/devis" class="btn border-2 border-white/20 text-white hover:bg-white hover:text-mother-earth shadow-xl">Configuration Devis</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Animation Script -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const observerOptions = { threshold: 0.2 };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.section-reveal').forEach(el => observer.observe(el));
    });
</script>
@endsection
