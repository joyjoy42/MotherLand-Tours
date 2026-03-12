<!-- DIAGNOSTIC: Premium UI Update Applied -->
@extends('layouts.app')

@section('content')
<!-- Premium Hero Section -->
<section class="relative min-h-[95vh] flex items-center overflow-hidden pt-32 bg-gradient-to-b from-mother-sand/20 to-mother-beige">
    <div class="container relative z-10 grid lg:grid-cols-2 gap-24 lg:gap-32 items-center">
        <div class="animate-fade-in group">
            <div class="inline-flex items-center gap-3 bg-mother-espresso/5 text-mother-espresso px-6 py-3 rounded-full text-[10px] font-bold tracking-[0.3em] uppercase mb-12 border border-mother-espresso/10">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-mother-gold opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-mother-gold"></span>
                </span>
                Héritage & Prestige
            </div>
            <h1 class="text-6xl md:text-8xl font-display font-semibold leading-[0.9] tracking-tighter mb-12 text-mother-espresso">
                Découvrez le <br/>
                <span class="text-mother-earth">Bénin</span> Autrement.
            </h1>
            <p class="text-xl md:text-2xl text-mother-espresso/60 mb-20 max-w-xl leading-relaxed text-balance">
                L'agence de voyage pionnière pour une immersion authentique. Explorez des terres sacrées avec l'excellence du service sur-mesure.
            </p>
            <div class="flex flex-wrap gap-8">
                <a href="/reserver" class="btn btn-cta px-12 py-6 text-lg">Initier mon voyage</a>
                <a href="/packs" class="btn border border-mother-espresso/10 text-mother-espresso hover:bg-mother-espresso hover:text-white transition-all px-12 py-6 text-lg">Nos Itinéraires</a>
            </div>
        </div>
        
        <div class="relative lg:h-[700px] flex items-center justify-center">
            <!-- Decorative Elements -->
            <div class="absolute -top-10 -right-10 w-64 h-64 bg-mother-gold/5 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute -bottom-10 -left-10 w-48 h-48 bg-mother-sand/10 rounded-full blur-2xl"></div>
            
            <!-- Staggered Image Gallery -->
            <div class="relative w-full h-full flex items-center justify-center translate-x-4 lg:translate-x-12">
                <div class="relative z-20 w-4/5 h-[600px] overflow-hidden rounded-[5rem] shadow-2xl transform shadow-mother-espresso/5 group hover:scale-[1.02] transition-premium">
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
<section class="section-padding bg-white relative overflow-hidden section-reveal">
    <div class="container">
        <div class="text-center mb-40">
            <span class="text-mother-gold font-bold text-[10px] uppercase tracking-[0.5em] mb-10 block">Destinations</span>
            <h2 class="text-5xl lg:text-8xl font-display text-mother-espresso leading-tight">Terres de <span class="text-mother-gold italic">Légendes.</span></h2>
        </div>

        <div class="grid lg:grid-cols-3 gap-16 lg:gap-24">
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
        <div class="grid lg:grid-cols-2 gap-32 items-center">
            <div>
                <span class="text-mother-gold font-bold text-[10px] uppercase tracking-[0.4em] mb-8 block">Spiritualité</span>
                <h2 class="text-5xl lg:text-7xl font-display text-mother-espresso mb-12 leading-tight">L'Âme du <br/><span class="italic text-mother-earth">Vaudou.</span></h2>
                <div class="space-y-8 text-mother-espresso/60 text-lg leading-loose">
                    <p>Bien loin des clichés, le Vaudou au Bénin est une philosophie de vie, un respect profond de la nature et des ancêtres. Une quête d'harmonie absolue.</p>
                    <p>Nous vous invitons à découvrir cette culture à travers ses rituels sacrés, accompagnés de guides qui en maîtrisent les codes et le respect profond.</p>
                </div>
                <div class="mt-16">
                    <a href="/itineraire" class="btn btn-cta rounded-xl">Explorer le Parcours</a>
                </div>
            </div>
            <div class="relative">
                <div class="absolute -inset-10 bg-mother-sand/10 rounded-full blur-3xl"></div>
                <img src="{{ asset('images/assets/ganvie.png') }}" class="relative z-10 w-full h-[600px] object-cover rounded-[3.5rem] shadow-2xl transition-premium hover:scale-[1.02]" alt="Cérémonie et immersion dans la culture spirituelle Vaudou au Bénin">
            </div>
        </div>
    </div>
</section>

<!-- Nos Offres Section -->
<section class="section-padding bg-mother-espresso relative overflow-hidden text-white section-reveal">
    <div class="container relative z-10">
        <div class="grid lg:grid-cols-2 gap-32 items-end mb-48">
            <div>
                <span class="text-mother-gold font-bold text-[10px] uppercase tracking-[0.5em] mb-12 block">Prélude</span>
                <h2 class="text-5xl lg:text-8xl font-display text-white leading-tight">Nos Offres <br/><span class="text-mother-gold italic font-light">Signature.</span></h2>
            </div>
            <div class="pb-6">
                <p class="text-white/60 max-w-md leading-relaxed text-xl">
                    Des parcours dessinés pour l'excellence, alliant confort d'exception et immersion radicale.
                </p>
            </div>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-24 lg:gap-32">
            <!-- Pack 7 Jours -->
            <div class="premium-card group bg-white/5 border-white/10 hover:bg-white/10">
                <div class="flex justify-between items-start mb-16">
                    <div class="w-16 h-16 bg-mother-gold text-mother-espresso flex items-center justify-center rounded-2xl transition-premium">
                        <i class="fas fa-map-marked-alt text-2xl"></i>
                    </div>
                    <span class="text-[10px] font-bold text-white/30 tracking-[0.3em] uppercase">ESCALE I / 07 Jrs</span>
                </div>
                <h3 class="text-4xl mb-6 text-white group-hover:text-mother-gold transition-premium leading-tight">L'Essentiel Sud</h3>
                <p class="text-white/50 mb-8 leading-loose text-base">Explorez le triangle d'or : Cotonou, Ouidah et Ganvié. L'immersion parfaite.</p>
                <div class="mb-12 flex items-baseline gap-2">
                    <span class="text-mother-gold font-bold text-3xl font-display">850€</span>
                    <span class="text-white/30 text-[10px] uppercase tracking-widest font-bold">/ Voyageur</span>
                </div>
                <a href="/packs" class="btn border border-white/20 text-white w-full py-6 hover:bg-white hover:text-mother-espresso transition-all rounded-xl">Consulter l'Itinéraire</a>
            </div>

            <!-- Pack 10 Jours -->
            <div class="premium-card group bg-white border-none text-mother-espresso">
                <div class="absolute top-0 right-0 py-3 px-8 bg-mother-gold text-mother-espresso text-[10px] font-bold uppercase tracking-widest rounded-bl-2xl">Recommandé</div>
                <div class="flex justify-between items-start mb-16">
                    <div class="w-16 h-16 bg-mother-espresso text-white flex items-center justify-center rounded-2xl transition-premium">
                        <i class="fas fa-paw text-2xl"></i>
                    </div>
                    <span class="text-[10px] font-bold text-mother-espresso/30 tracking-[0.3em] uppercase">ESCALE II / 10 Jrs</span>
                </div>
                <h3 class="text-4xl mb-6 text-mother-espresso group-hover:text-mother-earth transition-premium leading-tight">Safari Nord & Tata</h3>
                <p class="text-mother-espresso/50 mb-8 leading-loose text-base">Tata Somba et Pendjari. Pour les âmes en quête de sauvage et d'authenticité.</p>
                <div class="mb-12 flex items-baseline gap-2">
                    <span class="text-mother-earth font-bold text-3xl font-display">1,450€</span>
                    <span class="text-mother-espresso/30 text-[10px] uppercase tracking-widest font-bold">/ Voyageur</span>
                </div>
                <a href="/packs" class="btn btn-cta w-full py-6 rounded-xl">Initier l'Expédition</a>
            </div>
        </div>
    </div>
</section>

<!-- Pourquoi Nous -->
<section class="section-padding bg-slate-50 section-reveal">
    <div class="container">
        <div class="text-center mb-24">
            <span class="text-mother-gold font-bold tracking-[0.4em] uppercase text-[10px]">Notre ADN</span>
            <h2 class="text-5xl mt-4">L'excellence au service <br/>de l'authentique.</h2>
        </div>
        
        <div class="grid lg:grid-cols-3 gap-16">
            <div class="text-center group">
                <div class="w-24 h-24 bg-white rounded-full shadow-[--shadow-float] flex items-center justify-center mx-auto mb-8 group-hover:scale-110 transition-premium">
                    <i class="fas fa-users-viewfinder text-3xl text-mother-gold"></i>
                </div>
                <h4 class="text-xl mb-4">Groupes Ultra-Privés</h4>
                <p class="text-slate-500 text-sm leading-relaxed">Limités à 5 explorateurs pour une agilité totale et une immersion préservée des foules.</p>
            </div>
            <div class="text-center group">
                <div class="w-24 h-24 bg-white rounded-full shadow-[--shadow-float] flex items-center justify-center mx-auto mb-8 group-hover:scale-110 transition-premium">
                    <i class="fas fa-shield-heart text-3xl text-mother-gold"></i>
                </div>
                <h4 class="text-xl mb-4">Conciergerie Native</h4>
                <p class="text-slate-500 text-sm leading-relaxed">Une assistance francophone 24/7 assurée par des locaux qui connaissent chaque secret du terrain.</p>
            </div>
            <div class="text-center group">
                <div class="w-24 h-24 bg-white rounded-full shadow-[--shadow-float] flex items-center justify-center mx-auto mb-8 group-hover:scale-110 transition-premium">
                    <i class="fas fa-earth-africa text-3xl text-mother-gold"></i>
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
            <span class="text-mother-gold font-bold tracking-[0.4em] uppercase text-[10px]">Retours d'Expérience</span>
            <h2 class="text-5xl mt-6 leading-tight">Ils sont partis avec nous,<br/>ils sont revenus changés.</h2>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-24 lg:gap-32">
            <div class="premium-card bg-mother-sand/20 border-none shadow-none">
                <div class="flex gap-2 text-mother-gold mb-12 text-sm">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p class="italic text-mother-espresso/70 mb-12 text-2xl leading-relaxed font-display">"Une expérience inoubliable. L'organisation était parfaite et nous avons découvert des lieux magnifiques, portés par une équipe d'exception."</p>
                <div class="flex items-center gap-6">
                    <div class="w-16 h-16 bg-mother-espresso text-white rounded-full flex items-center justify-center font-bold shadow-xl">M</div>
                    <div>
                        <div class="font-bold text-mother-espresso text-xl">Marie D.</div>
                        <div class="text-[10px] font-bold text-mother-gold uppercase tracking-[0.3em]">Voyageuse - Paris</div>
                    </div>
                </div>
            </div>
            <div class="premium-card bg-mother-sand/20 border-none shadow-none">
                <div class="flex gap-2 text-mother-gold mb-12 text-sm">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p class="italic text-mother-espresso/70 mb-12 text-2xl leading-relaxed font-display">"Je recommande vivement Motherland Tours. Le rapport qualité-prix est excellent et l'accueil est tout simplement royal."</p>
                <div class="flex items-center gap-6">
                    <div class="w-16 h-16 bg-mother-espresso text-white rounded-full flex items-center justify-center font-bold shadow-xl">J</div>
                    <div>
                        <div class="font-bold text-mother-espresso text-xl">Jean K.</div>
                        <div class="text-[10px] font-bold text-mother-gold uppercase tracking-[0.3em]">Voyageur - Abidjan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="padding-y relative overflow-hidden section-reveal py-32 lg:py-48">
    <div class="container relative z-10 px-6">
        <div class="bg-mother-espresso rounded-[5rem] p-20 lg:p-48 text-center relative overflow-hidden group shadow-2xl shadow-mother-espresso/10">
            <!-- Animated Background Circles -->
            <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-mother-gold rounded-full opacity-10 group-hover:scale-150 transition-premium duration-1000"></div>
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-mother-sand rounded-full opacity-5 group-hover:scale-150 transition-premium duration-1000"></div>
            
            <div class="relative z-10">
                <span class="text-mother-gold font-bold tracking-[0.4em] uppercase text-[10px]">L'aventure commence ici</span>
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
