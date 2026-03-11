<div class="premium-card !p-0 border-none section-reveal mb-24 shadow-2xl shadow-mother-terracotta/5">
    <div class="bg-mother-earth px-14 py-16 flex flex-wrap justify-between items-center gap-10 relative overflow-hidden group">
        <div class="absolute inset-0 motif-benin opacity-10 group-hover:scale-110 transition-premium duration-1000"></div>
        <div class="relative z-10">
            <span class="text-mother-terracotta font-bold tracking-[0.4em] text-[10px] uppercase mb-4 block">Collection d'Expériences</span>
            <h3 class="text-4xl lg:text-5xl text-white font-display font-bold leading-tight">{{ $days }} JOURS AU CŒUR DU BÉNIN</h3>
        </div>
        <div class="relative z-10 px-10 py-5 bg-white/5 backdrop-blur-xl rounded-full border border-white/10 text-white font-bold text-xs tracking-[0.3em]">
            EXCLUSIVITÉ TOUT-INCLUS
        </div>
    </div>
    
    <div class="p-14 lg:p-24 bg-white">
        <!-- Sophisticated Price Grid -->
        <div class="grid lg:grid-cols-3 gap-12 mb-24">
            <!-- 1 Person -->
            <div class="group p-12 rounded-[2.5rem] bg-mother-cream/30 border border-transparent hover:border-mother-terracotta/20 hover:bg-white transition-premium text-center">
                <div class="text-[10px] font-bold text-slate-400 tracking-[0.3em] uppercase mb-8 italic">Solo Explorer</div>
                <div class="text-5xl font-display font-bold text-mother-earth mb-6">{{ $prices[0] }}</div>
                <div class="text-[10px] font-bold text-mother-terracotta uppercase tracking-[0.2em] opacity-60">Par Voyageur</div>
            </div>

            <!-- 2 Persons - Featured -->
            <div class="relative group p-14 rounded-[3.5rem] bg-white border-2 border-mother-terracotta shadow-2xl shadow-mother-terracotta/20 text-center -translate-y-8 z-20">
                <div class="absolute -top-5 left-1/2 -translate-x-1/2 bg-mother-terracotta text-white px-8 py-3 rounded-full text-[10px] font-bold uppercase tracking-[0.3em] shadow-xl shadow-mother-terracotta/30">L'Idéal Premium</div>
                <div class="text-[10px] font-bold text-mother-terracotta tracking-[0.3em] uppercase mb-8 italic">Duo Discovery</div>
                <div class="text-6xl font-display font-bold text-mother-earth mb-6">{{ $prices[1] }}</div>
                <div class="text-[10px] font-bold text-mother-terracotta uppercase tracking-[0.2em]">Par Voyageur (Pack Binôme)</div>
            </div>

            <!-- 3+ Persons -->
            <div class="group p-12 rounded-[2.5rem] bg-mother-cream/30 border border-transparent hover:border-mother-terracotta/20 hover:bg-white transition-premium text-center">
                <div class="text-[10px] font-bold text-slate-400 tracking-[0.3em] uppercase mb-8 italic">Tribal Journey</div>
                <div class="text-5xl font-display font-bold text-mother-earth mb-6">{{ $prices[2] }}</div>
                <div class="text-[10px] font-bold text-mother-terracotta uppercase tracking-[0.2em] opacity-60">Groupe (3+ pers)</div>
            </div>
        </div>

        <div class="grid lg:grid-cols-2 gap-24 item-start">
            <div class="space-y-12">
                <div class="flex items-center gap-8">
                    <div class="w-16 h-16 bg-mother-terracotta/10 text-mother-terracotta rounded-2xl flex items-center justify-center flex-shrink-0 text-2xl"><i class="fas fa-sparkles"></i></div>
                    <div>
                        <h4 class="text-xl font-display font-bold text-mother-earth mb-2 uppercase tracking-widest">Prestations de Luxe</h4>
                        <p class="text-slate-400 text-[10px] font-bold uppercase tracking-[0.2em]">Services inclus sans compromis</p>
                    </div>
                </div>
                
                <ul class="space-y-8">
                    @if($flights ?? false) 
                    <li class="flex items-center gap-6 text-slate-600 font-semibold group/item">
                        <div class="w-8 h-8 rounded-full bg-mother-cream flex items-center justify-center group-hover/item:bg-mother-terracotta group-hover/item:text-white transition-premium"><i class="fas fa-plane-departure text-xs"></i></div>
                        Vols Internationaux AR & Taxes incluses
                    </li> 
                    @endif
                    <li class="flex items-center gap-6 text-slate-600 font-semibold group/item">
                        <div class="w-8 h-8 rounded-full bg-mother-cream flex items-center justify-center group-hover/item:bg-mother-terracotta group-hover/item:text-white transition-premium"><i class="fas fa-hotel text-xs"></i></div>
                        Hébergements Boutique (Hôtels & Lodges)
                    </li>
                    <li class="flex items-center gap-6 text-slate-600 font-semibold group/item">
                        <div class="w-8 h-8 rounded-full bg-mother-cream flex items-center justify-center group-hover/item:bg-mother-terracotta group-hover/item:text-white transition-premium"><i class="fas fa-van-shuttle text-xs"></i></div>
                        Chauffeur - Guide Expert Natif Dédié
                    </li>
                    <li class="flex items-center gap-6 text-slate-600 font-semibold group/item">
                        <div class="w-8 h-8 rounded-full bg-mother-cream flex items-center justify-center group-hover/item:bg-mother-terracotta group-hover/item:text-white transition-premium"><i class="fas fa-ticket text-xs"></i></div>
                        Accès prioritaire à tous les sites culturels
                    </li>
                    <li class="flex items-center gap-6 text-slate-600 font-semibold group/item">
                        <div class="w-8 h-8 rounded-full bg-mother-cream flex items-center justify-center group-hover/item:bg-mother-terracotta group-hover/item:text-white transition-premium"><i class="fas fa-utensils text-xs"></i></div>
                        Petits-déjeuners et repas mentionnés
                    </li>
                </ul>
            </div>

                <div class="flex items-center gap-8">
                    <div class="w-16 h-16 bg-slate-100 text-slate-500 rounded-2xl flex items-center justify-center flex-shrink-0 text-2xl"><i class="fas fa-info-circle"></i></div>
                    <div>
                        <h4 class="text-xl font-display font-bold text-slate-500 mb-2 uppercase tracking-widest">Non Inclus</h4>
                        <p class="text-slate-400 text-[10px] font-bold uppercase tracking-[0.2em]">Pour une transparence totale</p>
                    </div>
                </div>
                
                <ul class="space-y-4 text-slate-500 text-sm leading-loose">
                    <li class="flex gap-4"><i class="fas fa-times text-slate-300 mt-1"></i> Frais de visa et assurances voyage obligatoires</li>
                    <li class="flex gap-4"><i class="fas fa-times text-slate-300 mt-1"></i> Dîners libres (pour vous laisser explorer la gastronomie locale)</li>
                    <li class="flex gap-4"><i class="fas fa-times text-slate-300 mt-1"></i> Dépenses à caractère personnel et pourboires</li>
                    <li class="flex gap-4"><i class="fas fa-times text-slate-300 mt-1"></i> Activités optionnelles non mentionnées au programme</li>
                </ul>
                
                <div class="flex flex-col gap-6">
                    <a href="/reserver" class="btn btn-cta w-full py-6 rounded-[2rem] shadow-2xl shadow-mother-terracotta/20">Réserver cette aventure</a>
                    <a href="/itineraire" class="text-center text-[10px] font-bold text-slate-400 hover:text-mother-terracotta uppercase tracking-[0.4em] transition-premium py-4">Consulter le programme détaillé</a>
                </div>
            </div>
        </div>
    </div>
</div>
