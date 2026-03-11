@extends('layouts.app')

@section('content')
<!-- Premium Header -->
<section class="relative min-h-[60vh] flex items-center justify-center overflow-hidden bg-mother-earth text-center">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/assets/porte_du_non_retour_night_new.png') }}" class="w-full h-full object-cover opacity-10" alt="Reserver Hero">
        <div class="absolute inset-0 bg-mother-earth/70"></div>
    </div>
    
    <div class="container relative z-10 px-6 animate-fade-in py-32 text-center">
        <span class="text-mother-terracotta font-bold tracking-[0.5em] uppercase text-xs mb-8 block">Réservation</span>
        <h1 class="text-6xl lg:text-9xl text-white font-display font-semibold mb-12 leading-[0.9]">
            Réservez votre <br/><span class="text-mother-terracotta italic underline decoration-white/10 underline-offset-16">Evasion</span>.
        </h1>
        <p class="text-xl text-slate-300 max-w-2xl mx-auto leading-loose text-balance">
            Un processus simple pour une aventure extraordinaire. Confirmez votre escapade béninoise en quelques clics.
        </p>
    </div>
</section>

<section class="section-padding bg-slate-50 relative">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            <!-- Premium Info Banner -->
            <div class="bg-white p-12 lg:p-16 rounded-[4rem] shadow-2xl shadow-mother-terracotta/5 mb-32 flex flex-col lg:flex-row gap-16 items-center border border-mother-terracotta/5 section-reveal">
                <div class="w-24 h-24 bg-mother-terracotta/10 text-mother-terracotta rounded-3xl flex items-center justify-center text-4xl flex-shrink-0 animate-pulse">
                    <i class="fas fa-shield-heart"></i>
                </div>
                <div>
                    <h4 class="text-2xl font-display font-bold text-mother-earth mb-6">Voyagez l'esprit tranquille</h4>
                    <ul class="grid lg:grid-cols-2 gap-x-12 gap-y-5">
                        <li class="flex items-center gap-4 text-slate-500 font-bold"><div class="w-6 h-6 rounded-full bg-mother-cream flex items-center justify-center"><i class="fas fa-check text-[10px] text-mother-terracotta"></i></div> Zéro paiement lors de la demande</li>
                        <li class="flex items-center gap-4 text-slate-500 font-bold"><div class="w-6 h-6 rounded-full bg-mother-cream flex items-center justify-center"><i class="fas fa-check text-[10px] text-mother-terracotta"></i></div> Confirmation sous 24h</li>
                        <li class="flex items-center gap-4 text-slate-500 font-bold"><div class="w-6 h-6 rounded-full bg-mother-cream flex items-center justify-center"><i class="fas fa-check text-[10px] text-mother-terracotta"></i></div> Devis ajustable & flexible</li>
                        <li class="flex items-center gap-4 text-slate-500 font-bold"><div class="w-6 h-6 rounded-full bg-mother-cream flex items-center justify-center"><i class="fas fa-check text-[10px] text-mother-terracotta"></i></div> Accompagnement VIP dédié</li>
                    </ul>
                </div>
            </div>

            <div class="premium-card p-12 lg:p-24 border-none shadow-2xl shadow-mother-terracotta/5 section-reveal bg-white">
                <form action="/reserver" method="POST" id="reserveForm">
                    @csrf
                    
                    <div class="grid lg:grid-cols-2 gap-10 mb-10">
                        <div class="form-group">
                            <label class="text-[10px] font-bold uppercase text-slate-400 tracking-widest mb-4 block">Nom de famille *</label>
                            <input type="text" name="name" class="form-control" placeholder="Ex: Dupont" required>
                        </div>
                        <div class="form-group">
                            <label class="text-[10px] font-bold uppercase text-slate-400 tracking-widest mb-4 block">Prénom *</label>
                            <input type="text" name="firstname" class="form-control" placeholder="Ex: Jean" required>
                        </div>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-10 mb-10">
                        <div class="form-group">
                            <label class="text-[10px] font-bold uppercase text-slate-400 tracking-widest mb-4 block">Email *</label>
                            <input type="email" name="email" class="form-control" placeholder="votre@email.com" required>
                        </div>
                        <div class="form-group">
                            <label class="text-[10px] font-bold uppercase text-slate-400 tracking-widest mb-4 block">Téléphone *</label>
                            <input type="tel" name="phone" class="form-control" placeholder="+33 X XX XX XX XX" required>
                        </div>
                    </div>

                    <div class="form-group mb-10">
                        <label class="text-[10px] font-bold uppercase text-slate-400 tracking-widest mb-4 block">Ville de départ *</label>
                        <input type="text" name="departure" class="form-control" placeholder="Ex: Paris, Abidjan, Montréal..." required>
                    </div>

                    <div class="grid lg:grid-cols-2 gap-10 mb-10">
                        <div class="form-group">
                            <label class="text-[10px] font-bold uppercase text-slate-400 tracking-widest mb-4 block">Date souhaitée *</label>
                            <input type="date" name="date" class="form-control !py-5" required>
                        </div>
                        <div class="form-group">
                            <label class="text-[10px] font-bold uppercase text-slate-400 tracking-widest mb-4 block">Type de Pack *</label>
                            <select name="duration" class="form-control" required>
                                <option value="7">Pack 7 Jours Standard</option>
                                <option value="10">Pack 10 Jours Signature (Safari)</option>
                                <option value="custom">Ititinéraire sur mesure</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mb-10">
                        <label class="text-[10px] font-bold uppercase text-slate-400 tracking-widest mb-4 block">Nombre de Voyageurs *</label>
                        <input type="number" name="people" class="form-control" value="1" min="1" required>
                    </div>

                    <div class="form-group mb-16">
                        <label class="text-[10px] font-bold uppercase text-slate-400 tracking-widest mb-4 block">Message ou demande (optionnel)</label>
                        <textarea name="message" rows="6" class="form-control !pt-5" placeholder="Avez-vous des besoins spécifiques ?"></textarea>
                    </div>

                    <button type="submit" id="reserveBtn" class="btn btn-cta w-full py-6 rounded-3xl shadow-2xl shadow-mother-terracotta/20 text-lg">ENVOYER MA DEMANDE DE RÉSERVATION</button>
                </form>

                <script>
                    document.getElementById('reserveForm').addEventListener('submit', function() {
                        const btn = document.getElementById('reserveBtn');
                        btn.innerHTML = '<i class="fas fa-circle-notch fa-spin mr-2"></i> Traitement en cours...';
                        btn.classList.add('opacity-75', 'cursor-not-allowed');
                    });
                </script>
            </div>

            <!-- WhatsApp Concierge -->
            <div class="mt-32 section-reveal text-center">
                <div class="glass p-16 lg:p-24 rounded-[4rem] border-mother-terracotta/5 shadow-2xl shadow-mother-terracotta/5">
                    <div class="w-20 h-20 bg-emerald-50 text-emerald-600 rounded-3xl flex items-center justify-center mx-auto mb-10 text-3xl shadow-lg shadow-emerald-500/10">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h3 class="text-3xl mb-6 font-display font-bold text-mother-earth">Vous préférez discuter directement ?</h3>
                    <p class="text-slate-500 mb-12 max-w-2xl mx-auto text-xl leading-loose">Notre conciergerie WhatsApp est ouverte pour répondre à vos questions et gérer votre réservation de vive voix.</p>
                    <a href="https://wa.me/22948803613" target="_blank" class="btn bg-emerald-600 text-white hover:bg-emerald-700 px-16 py-6 rounded-3xl text-lg font-bold shadow-2xl shadow-emerald-600/20 transition-premium">Ouvrir WhatsApp Business</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
