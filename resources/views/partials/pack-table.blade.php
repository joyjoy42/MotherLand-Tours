<div class="premium-card !p-0 border-none section-reveal mb-20 overflow-hidden">
    {{-- Header Band --}}
    <div class="bg-mother-espresso px-12 py-12 flex flex-wrap justify-between items-center gap-8 relative overflow-hidden">
        <div class="relative z-10">
            <span class="text-mother-gold/80 font-bold tracking-[0.4em] text-[9px] uppercase mb-3 block">Collection d'Expériences</span>
            <h3 class="text-3xl lg:text-4xl text-white font-display font-bold leading-tight">{{ $days }} JOURS AU CŒUR DU BÉNIN</h3>
        </div>
        <div class="relative z-10 px-8 py-3 bg-white/10 backdrop-blur-xl rounded-full border border-white/20 text-white font-bold text-[10px] tracking-[0.3em]">
            TOUT-INCLUS
        </div>
    </div>

    <div class="p-10 lg:p-16 bg-white">
        {{-- Price Grid --}}
        <div class="grid lg:grid-cols-3 gap-8 mb-16">
            {{-- 1 Person --}}
            <div class="group p-8 rounded-2xl bg-mother-beige border border-mother-sand hover:border-mother-gold/40 hover:bg-white transition-all duration-500 text-center">
                <div class="text-[10px] font-bold text-mother-earth/60 tracking-[0.3em] uppercase mb-6">Solo Explorer</div>
                <div class="text-4xl font-display font-bold text-mother-espresso mb-3">{{ $prices[0] }}</div>
                <div class="text-[10px] font-bold text-mother-gold uppercase tracking-widest">Par Voyageur</div>
            </div>

            {{-- 2 Persons – Featured --}}
            <div class="relative group p-10 rounded-2xl bg-white border-2 border-mother-gold shadow-xl shadow-mother-gold/10 text-center -translate-y-4 z-10">
                <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-mother-gold text-white px-6 py-1.5 rounded-full text-[9px] font-bold uppercase tracking-[0.3em]">L'Idéal</div>
                <div class="text-[10px] font-bold text-mother-gold tracking-[0.3em] uppercase mb-6">Duo Discovery</div>
                <div class="text-5xl font-display font-bold text-mother-espresso mb-3">{{ $prices[1] }}</div>
                <div class="text-[10px] font-bold text-mother-earth uppercase tracking-widest">Par Voyageur (Binôme)</div>
            </div>

            {{-- 3+ Persons --}}
            <div class="group p-8 rounded-2xl bg-mother-beige border border-mother-sand hover:border-mother-gold/40 hover:bg-white transition-all duration-500 text-center">
                <div class="text-[10px] font-bold text-mother-earth/60 tracking-[0.3em] uppercase mb-6">Tribal Journey</div>
                <div class="text-4xl font-display font-bold text-mother-espresso mb-3">{{ $prices[2] }}</div>
                <div class="text-[10px] font-bold text-mother-gold uppercase tracking-widest">Groupe (3+ pers)</div>
            </div>
        </div>

        <div class="grid lg:grid-cols-2 gap-16 items-start">
            {{-- Inclus --}}
            <div>
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-12 h-12 bg-mother-gold/10 text-mother-gold rounded-xl flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-check-circle text-lg"></i>
                    </div>
                    <div>
                        <h4 class="text-base font-display font-bold text-mother-espresso uppercase tracking-wider">Prestations incluses</h4>
                        <p class="text-mother-earth/60 text-[10px] font-bold uppercase tracking-widest">Services sans compromis</p>
                    </div>
                </div>
                <ul class="space-y-4">
                    @if($flights ?? false)
                    <li class="flex items-center gap-4 text-mother-espresso/80 font-medium text-sm">
                        <div class="w-7 h-7 rounded-lg bg-mother-sand flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-plane-departure text-xs text-mother-gold"></i>
                        </div>
                        Vols Internationaux AR & Taxes incluses
                    </li>
                    @endif
                    <li class="flex items-center gap-4 text-mother-espresso/80 font-medium text-sm">
                        <div class="w-7 h-7 rounded-lg bg-mother-sand flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-hotel text-xs text-mother-gold"></i>
                        </div>
                        Hébergements Boutique (Hôtels & Lodges)
                    </li>
                    <li class="flex items-center gap-4 text-mother-espresso/80 font-medium text-sm">
                        <div class="w-7 h-7 rounded-lg bg-mother-sand flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-van-shuttle text-xs text-mother-gold"></i>
                        </div>
                        Chauffeur-Guide Expert Natif Dédié
                    </li>
                    <li class="flex items-center gap-4 text-mother-espresso/80 font-medium text-sm">
                        <div class="w-7 h-7 rounded-lg bg-mother-sand flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-ticket text-xs text-mother-gold"></i>
                        </div>
                        Accès prioritaire à tous les sites culturels
                    </li>
                    <li class="flex items-center gap-4 text-mother-espresso/80 font-medium text-sm">
                        <div class="w-7 h-7 rounded-lg bg-mother-sand flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-utensils text-xs text-mother-gold"></i>
                        </div>
                        Petits-déjeuners et repas mentionnés
                    </li>
                </ul>
            </div>

            {{-- Non Inclus + CTA --}}
            <div class="flex flex-col gap-8">
                <div>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-mother-sand text-mother-earth rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-info-circle text-lg"></i>
                        </div>
                        <div>
                            <h4 class="text-base font-display font-bold text-mother-espresso uppercase tracking-wider">Non Inclus</h4>
                            <p class="text-mother-earth/60 text-[10px] font-bold uppercase tracking-widest">Transparence totale</p>
                        </div>
                    </div>
                    <ul class="space-y-3 text-mother-espresso/60 text-sm leading-relaxed">
                        <li class="flex gap-3"><i class="fas fa-minus text-mother-sand mt-1 flex-shrink-0"></i> Frais de visa et assurances voyage</li>
                        <li class="flex gap-3"><i class="fas fa-minus text-mother-sand mt-1 flex-shrink-0"></i> Dîners libres (gastronomie locale à explorer)</li>
                        <li class="flex gap-3"><i class="fas fa-minus text-mother-sand mt-1 flex-shrink-0"></i> Dépenses personnelles et pourboires</li>
                        <li class="flex gap-3"><i class="fas fa-minus text-mother-sand mt-1 flex-shrink-0"></i> Activités optionnelles hors programme</li>
                    </ul>
                </div>
                <div class="flex flex-col gap-4 pt-4">
                    <a href="/reserver" class="btn btn-cta w-full !py-5 rounded-2xl">Réserver cette aventure</a>
                    <a href="/itineraire" class="text-center text-[10px] font-bold text-mother-earth/50 hover:text-mother-gold uppercase tracking-[0.3em] transition-all py-3">Voir le programme détaillé →</a>
                </div>
            </div>
        </div>
    </div>
</div>
