@extends('layouts.app')

@section('content')
<!-- Premium Header -->
<section class="relative min-h-[50vh] flex items-center justify-center overflow-hidden bg-mother-espresso text-center">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/assets/porte_du_non_retour_night_new.png') }}" class="w-full h-full object-cover opacity-10" alt="Contact Hero">
        <div class="absolute inset-0 bg-mother-espresso/85"></div>
    </div>
    
    <div class="container relative z-10 px-6 animate-fade-in py-20 lg:py-28">
        <span class="text-mother-gold font-bold tracking-[0.4em] uppercase text-[10px] mb-6 block">Conciergerie</span>
        <h1 class="text-4xl lg:text-6xl text-white font-display font-bold mb-6 leading-tight">
            Parlons de votre <span class="text-mother-gold italic">Prochaine</span> Escale.
        </h1>
        <p class="text-base text-white/70 max-w-xl mx-auto leading-relaxed font-medium">
            Notre équipe de conciergerie est à votre écoute pour transformer vos désirs de voyage en une réalité inoubliable.
        </p>
    </div>
</section>

<section class="section-padding bg-slate-50 relative">
    <div class="container">
        <div class="grid lg:grid-cols-2 gap-20 items-start">
            <!-- Contact Info -->
            <div class="space-y-10 section-reveal">
                <!-- Direct Email -->
                <div class="premium-card group hover:shadow-2xl hover:shadow-mother-espresso/5 border-none p-10 flex items-center gap-8 bg-white">
                    <div class="w-16 h-16 bg-mother-espresso/5 text-mother-espresso rounded-2xl flex items-center justify-center text-2xl group-hover:bg-mother-espresso group-hover:text-white transition-premium">
                        <i class="fas fa-envelope-open"></i>
                    </div>
                    <div>
                        <span class="text-[10px] font-bold text-mother-espresso/30 uppercase tracking-[0.3em] block mb-2">Email Direct</span>
                        <p class="text-2xl font-display font-bold text-mother-espresso">motherlandtours9@gmail.com</p>
                    </div>
                </div>

                <!-- Call Center -->
                <div class="premium-card group hover:shadow-2xl hover:shadow-mother-espresso/5 border-none p-10 flex items-center gap-8 bg-white">
                    <div class="w-16 h-16 bg-mother-espresso/5 text-mother-espresso rounded-2xl flex items-center justify-center text-2xl group-hover:bg-mother-espresso group-hover:text-white transition-premium">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div>
                        <span class="text-[10px] font-bold text-mother-espresso/30 uppercase tracking-[0.3em] block mb-2">Standard</span>
                        <p class="text-2xl font-display font-bold text-mother-espresso">+229 0148803613</p>
                    </div>
                </div>

                <!-- WhatsApp Card -->
                <div class="bg-mother-espresso p-8 lg:p-10 rounded-2xl relative overflow-hidden group shadow-xl shadow-mother-espresso/10">
                    <div class="relative z-10">
                        <div class="w-12 h-12 bg-white/10 text-mother-gold rounded-xl flex items-center justify-center text-2xl mb-6">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h3 class="text-2xl text-white font-bold mb-4 leading-tight">Besoin d'une réponse instantanée ?</h3>
                        <p class="text-white/60 text-base mb-8 leading-relaxed">Notre équipe est disponible sur WhatsApp pour vous accompagner en temps réel.</p>
                        <a href="https://wa.me/22948803613" target="_blank" class="btn btn-cta w-full !py-4 rounded-xl">Démarrer une discussion</a>
                    </div>
                </div>
            </div>

            <div class="section-reveal">
                <div class="premium-card p-8 lg:p-12 border-none shadow-xl shadow-mother-espresso/5 bg-white">
                    <h3 class="text-2xl font-display font-bold text-mother-espresso mb-3 leading-tight">Envoyez-nous un message</h3>
                    <p class="text-mother-espresso/60 mb-8 text-base leading-relaxed">Nous revenons vers vous avec une proposition sous 24 heures.</p>

                    <form action="/contact" method="POST" class="space-y-8" id="contactForm">
                        @csrf
                        <div class="grid lg:grid-cols-2 gap-8">
                            <div class="form-group">
                                <label class="text-[10px] font-bold uppercase text-slate-400 tracking-widest mb-3 block">Nom complet</label>
                                <input type="text" name="name" class="form-control" placeholder="Ex: Jean Agossou" required>
                            </div>
                            <div class="form-group">
                                <label class="text-[10px] font-bold uppercase text-slate-400 tracking-widest mb-3 block">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="votre@email.com" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="text-[10px] font-bold uppercase text-slate-400 tracking-widest mb-3 block">Sujet de votre demande</label>
                            <select name="subject" class="form-control" required>
                                <option value="resa">Question sur un itinéraire</option>
                                <option value="devis">Demande de devis sur-mesure</option>
                                <option value="part">Partenariat & Presse</option>
                                <option value="autre">Autre demande</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="text-[10px] font-bold uppercase text-slate-400 tracking-widest mb-3 block">Message</label>
                            <textarea name="message" rows="6" class="form-control !pt-4" placeholder="Comment pouvons-nous vous aider ?" required></textarea>
                        </div>

                        <button type="submit" id="submitBtn" class="btn btn-cta w-full py-5 text-sm rounded-2xl">Transmettre ma demande</button>
                    </form>

                    <script>
                        document.getElementById('contactForm').addEventListener('submit', function() {
                            const btn = document.getElementById('submitBtn');
                            btn.innerHTML = '<i class="fas fa-circle-notch fa-spin mr-2"></i> Traitement en cours...';
                            btn.classList.add('opacity-75', 'cursor-not-allowed');
                        });
                    </script>
                </div>
            </div>

                <!-- Small FAQ & Info Cards -->
                <div class="grid grid-cols-2 gap-8 mt-12 mb-32 section-reveal">
                    <div class="premium-card p-8 bg-mother-sand/20 border-none shadow-none group hover:bg-white transition-premium">
                        <h4 class="text-sm font-bold text-mother-espresso uppercase tracking-[0.3em] mb-6 flex items-center gap-4 text-[10px]">
                            <i class="fas fa-clock text-mother-gold"></i> Horaires
                        </h4>
                        <p class="text-mother-espresso/60 text-sm mb-2 font-medium">Lun - Ven : 09h - 18h</p>
                        <p class="text-mother-espresso/60 text-sm font-medium">Samedi : 10h - 16h</p>
                    </div>
                    <div class="premium-card p-8 bg-mother-sand/20 border-none shadow-none group hover:bg-white transition-premium">
                        <h4 class="text-sm font-bold text-mother-espresso uppercase tracking-[0.3em] mb-6 flex items-center gap-4 text-[10px]">
                            <i class="fas fa-location-dot text-mother-gold"></i> Bureau
                        </h4>
                        <p class="text-mother-espresso/60 text-sm mb-2 font-medium">Quartier Haie Vive</p>
                        <p class="text-mother-espresso/60 text-sm font-medium">Cotonou, Bénin</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
