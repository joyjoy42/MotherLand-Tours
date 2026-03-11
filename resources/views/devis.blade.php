@extends('layouts.app')

@section('content')
<!-- Premium Header -->
<section class="relative min-h-[60vh] flex items-center justify-center overflow-hidden bg-mother-earth text-center">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/assets/porte_du_non_retour_night_new.png') }}" class="w-full h-full object-cover opacity-10" alt="Devis Hero">
        <div class="absolute inset-0 bg-mother-earth/70"></div>
    </div>
    
    <div class="container relative z-10 px-6 animate-fade-in py-32">
        <span class="text-mother-terracotta font-bold tracking-[0.5em] uppercase text-xs mb-8 block">Sur-Mesure</span>
        <h1 class="text-6xl lg:text-9xl text-white font-display font-semibold mb-12 leading-[0.9]">
            Dessinez votre <br/><span class="text-mother-terracotta italic underline decoration-white/10 underline-offset-16">Propre</span> Route.
        </h1>
        <p class="text-xl text-slate-300 max-w-2xl mx-auto leading-loose text-balance">
            Parce que chaque rêve est unique, nous orchestrons votre aventure béninoise sur-mesure, jusque dans les moindres détails.
        </p>
    </div>
</section>

<section class="section-padding bg-slate-50 relative">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            <!-- Premium Benefit Grid -->
            <div class="bg-mother-earth px-14 py-16 flex flex-wrap justify-between items-center gap-10 relative overflow-hidden group">
                
                <div class="relative z-10 grid lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <h4 class="text-white text-3xl font-display font-bold mb-6">Pourquoi le <br/>Sur-Mesure ?</h4>
                        <p class="text-slate-300 text-lg leading-loose">L'excellence réside dans les détails. Nous créons des ponts entre vos envies et la réalité du terrain.</p>
                    </div>
                    <ul class="space-y-6">
                        <li class="flex items-center gap-5 text-[10px] font-bold text-white uppercase tracking-[0.3em]"><div class="w-10 h-10 rounded-2xl bg-white/5 flex items-center justify-center border border-white/5"><i class="fas fa-magic text-mother-terracotta"></i></div> Flexibilité totale</li>
                        <li class="flex items-center gap-5 text-[10px] font-bold text-white uppercase tracking-[0.3em]"><div class="w-10 h-10 rounded-2xl bg-white/5 flex items-center justify-center border border-white/5"><i class="fas fa-gem text-mother-terracotta"></i></div> Hôtels d'exception</li>
                        <li class="flex items-center gap-5 text-[10px] font-bold text-white uppercase tracking-[0.3em]"><div class="w-10 h-10 rounded-2xl bg-white/5 flex items-center justify-center border border-white/5"><i class="fas fa-user-shield text-mother-terracotta"></i></div> Conciergerie 24/7</li>
                    </ul>
                </div>
            </div>

            <div class="premium-card p-12 lg:p-24 border-none shadow-2xl shadow-mother-terracotta/5 section-reveal bg-white">
                <form action="/devis" method="POST" id="devisForm">
                    @csrf
                    
                    <h3 class="text-2xl font-display font-bold text-mother-earth mb-12 flex items-center gap-5">
                        <span class="w-10 h-10 rounded-full bg-mother-cream text-mother-terracotta flex items-center justify-center text-sm">1</span> 
                        Coordonnées Personnelles
                    </h3>
                    
                    <div class="grid lg:grid-cols-2 gap-10 mb-10">
                        <div class="form-group">
                            <label class="text-[10px] font-bold uppercase text-slate-400 tracking-widest mb-4 block">Nom *</label>
                            <input type="text" name="name" class="form-control" placeholder="Votre nom" required>
                        </div>
                        <div class="form-group">
                            <label class="text-[10px] font-bold uppercase text-slate-400 tracking-widest mb-4 block">Prénom *</label>
                            <input type="text" name="firstname" class="form-control" placeholder="Votre prénom" required>
                        </div>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-10">
                        <div class="form-group">
                            <label class="text-[10px] font-bold uppercase text-slate-400 tracking-widest mb-4 block">Email *</label>
                            <input type="email" name="email" class="form-control" placeholder="votre@email.com" required>
                        </div>
                        <div class="form-group">
                            <label class="text-[10px] font-bold uppercase text-slate-400 tracking-widest mb-4 block">Téléphone *</label>
                            <input type="tel" name="phone" class="form-control" placeholder="+33 X XX XX XX XX" required>
                        </div>
                    </div>

                    <h3 class="text-2xl font-display font-bold text-mother-earth mt-20 mb-12 flex items-center gap-5">
                        <span class="w-10 h-10 rounded-full bg-mother-cream text-mother-terracotta flex items-center justify-center text-sm">2</span> 
                        Votre Projet de Voyage
                    </h3>

                    <div class="form-group mb-12">
                        <label class="text-[10px] font-bold uppercase text-slate-400 tracking-widest mb-4 block">Ville de départ *</label>
                        <input type="text" name="departure" class="form-control" placeholder="Ex: Bruxelles, Genève, Montreal..." required>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-10 mb-12">
                        <div class="form-group">
                            <label class="text-[10px] font-bold uppercase text-slate-400 tracking-widest mb-4 block">Début idéal</label>
                            <input type="date" name="start" class="form-control !py-5">
                        </div>
                        <div class="form-group">
                            <label class="text-[10px] font-bold uppercase text-slate-400 tracking-widest mb-4 block">Fin idéale</label>
                            <input type="date" name="end" class="form-control !py-5">
                        </div>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-10 mb-12">
                        <div class="form-group">
                            <label class="text-[10px] font-bold uppercase text-slate-400 tracking-widest mb-4 block">Nombre de personnes *</label>
                            <input type="number" name="people" class="form-control" min="1" value="1" required>
                        </div>
                        <div class="form-group">
                            <label class="text-[10px] font-bold uppercase text-slate-400 tracking-widest mb-4 block">Budget par personne</label>
                            <input type="text" name="budget" class="form-control" placeholder="Ex: 2000€">
                        </div>
                    </div>

                    <div class="form-group mb-16">
                        <label class="text-[10px] font-bold uppercase text-slate-400 tracking-widest mb-4 block">Dites-nous ce qui vous ferait rêver *</label>
                        <textarea name="needs" rows="6" class="form-control !pt-5" placeholder="Activités souhaitées, hôtels préférés..." required></textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" id="devisBtn" class="btn btn-cta w-full py-6 rounded-3xl shadow-2xl shadow-mother-terracotta/20 text-lg">DEMANDER MON DEVIS GRATUIT</button>
                        <div class="mt-10 flex justify-center gap-12 text-slate-400 text-[10px] font-bold uppercase tracking-[0.2em]">
                            <span class="flex items-center gap-3"><i class="fas fa-clock text-mother-terracotta"></i> Réponse sous 48h</span>
                            <span class="flex items-center gap-3"><i class="fas fa-shield-alt text-mother-terracotta"></i> Données protégées</span>
                        </div>
                    </div>
                </form>

                <script>
                    document.getElementById('devisForm').addEventListener('submit', function() {
                        const btn = document.getElementById('devisBtn');
                        btn.innerHTML = '<i class="fas fa-circle-notch fa-spin mr-2"></i> Traitement en cours...';
                        btn.classList.add('opacity-75', 'cursor-not-allowed');
                    });
                </script>
            </div>

            <!-- Express Channels -->
            <div class="grid lg:grid-cols-2 gap-10 mt-16 section-reveal mb-32">
                <a href="https://wa.me/22948803613" target="_blank" class="glass p-12 rounded-[3.5rem] border-mother-terracotta/5 flex flex-col items-center text-center group hover:bg-white transition-premium shadow-2xl shadow-mother-terracotta/5">
                    <div class="w-16 h-16 bg-emerald-50 text-emerald-600 rounded-2xl flex items-center justify-center text-2xl mb-8 group-hover:bg-emerald-600 group-hover:text-white transition-premium shadow-lg shadow-emerald-500/10">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h4 class="text-mother-earth font-display font-bold text-xl mb-3">WhatsApp Direct</h4>
                    <p class="text-slate-400 text-[10px] font-bold uppercase tracking-widest">Échange fluide en temps réel</p>
                </a>
                <a href="mailto:motherlandtours9@gmail.com" class="glass p-12 rounded-[3.5rem] border-mother-terracotta/5 flex flex-col items-center text-center group hover:bg-white transition-premium shadow-2xl shadow-mother-terracotta/5">
                    <div class="w-16 h-16 bg-mother-terracotta/5 text-mother-terracotta rounded-2xl flex items-center justify-center text-2xl mb-8 group-hover:bg-mother-terracotta group-hover:text-white transition-premium shadow-lg shadow-mother-terracotta/10">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <h4 class="text-mother-earth font-display font-bold text-xl mb-3">Dossier Email</h4>
                    <p class="text-slate-400 text-[10px] font-bold uppercase tracking-widest">Envoi de documents & dossiers</p>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
