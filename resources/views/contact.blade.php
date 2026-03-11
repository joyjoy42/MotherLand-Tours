@extends('layouts.app')

@section('content')
<!-- Premium Header -->
<section class="relative min-h-[60vh] flex items-center justify-center overflow-hidden bg-mother-earth text-center">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/assets/porte_du_non_retour_night_new.png') }}" class="w-full h-full object-cover opacity-10" alt="Contact Hero">
        <div class="absolute inset-0 bg-mother-earth/70"></div>
    </div>
    
    <div class="container relative z-10 px-6 animate-fade-in py-32">
        <span class="text-mother-terracotta font-bold tracking-[0.5em] uppercase text-xs mb-8 block">Contact</span>
        <h1 class="text-6xl lg:text-9xl text-white font-display font-semibold mb-12 leading-[0.9]">
            Parlons de votre <br/><span class="text-mother-terracotta italic underline decoration-white/10 underline-offset-16">Prochaine</span> Escale.
        </h1>
        <p class="text-xl text-slate-300 max-w-2xl mx-auto leading-loose text-balance">
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
                <div class="premium-card group hover:shadow-2xl hover:shadow-mother-terracotta/5 border-none p-10 flex items-center gap-8 bg-white/50 backdrop-blur-sm">
                    <div class="w-20 h-20 bg-mother-terracotta/5 text-mother-terracotta rounded-2xl flex items-center justify-center text-3xl group-hover:bg-mother-terracotta group-hover:text-white transition-premium duration-500">
                        <i class="fas fa-envelope-open"></i>
                    </div>
                    <div>
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-[0.3em] block mb-2">Email Direct</span>
                        <p class="text-2xl font-display font-bold text-mother-earth">motherlandtours9@gmail.com</p>
                    </div>
                </div>

                <!-- Call Center -->
                <div class="premium-card group hover:shadow-2xl hover:shadow-mother-terracotta/5 border-none p-10 flex items-center gap-8 bg-white/50 backdrop-blur-sm">
                    <div class="w-20 h-20 bg-mother-terracotta/5 text-mother-terracotta rounded-2xl flex items-center justify-center text-3xl group-hover:bg-mother-terracotta group-hover:text-white transition-premium duration-500">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div>
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-[0.3em] block mb-2">Standard</span>
                        <p class="text-2xl font-display font-bold text-mother-earth">+229 0148803613</p>
                    </div>
                </div>

                <!-- WhatsApp Card - Highlighted -->
                <div class="bg-mother-earth p-12 lg:p-16 rounded-[4rem] relative overflow-hidden group shadow-2xl shadow-mother-terracotta/10">
                    
                    <div class="relative z-10">
                        <div class="w-16 h-16 bg-white/10 text-white rounded-2xl flex items-center justify-center text-3xl mb-10 border border-white/10">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h3 class="text-3xl text-white mb-6 leading-tight">Besoin d'une réponse instantanée ?</h3>
                        <p class="text-slate-300 text-lg mb-12 leading-loose">Notre équipe est disponible sur WhatsApp pour vous accompagner en temps réel sur tous vos projets.</p>
                        <a href="https://wa.me/22948803613" target="_blank" class="btn btn-cta w-full py-6 rounded-2xl shadow-2xl shadow-mother-terracotta/20">Démarrer une discussion</a>
                    </div>
                </div>
            </div>

            <!-- Form Section -->
            <div class="section-reveal">
                <div class="premium-card p-12 lg:p-20 border-none shadow-2xl shadow-mother-terracotta/5 bg-white">
                    @if(session('success'))
                        <div class="bg-emerald-50 text-emerald-700 p-10 rounded-3xl mb-16 flex items-center gap-8 animate-slide-up">
                            <i class="fas fa-check-circle text-3xl"></i>
                            <p class="font-bold text-lg">{{ session('success') }}</p>
                        </div>
                    @endif

                    <h3 class="text-4xl font-display text-mother-earth mb-6 leading-tight">Envoyez-nous un message</h3>
                    <p class="text-slate-500 mb-16 text-lg leading-loose">Nous revenons vers vous avec une proposition sous 24 heures maximum.</p>

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
                    <div class="premium-card p-8 bg-mother-cream/30 border-none shadow-none group hover:bg-white transition-premium">
                        <h4 class="text-sm font-bold text-mother-earth uppercase tracking-widest mb-6 flex items-center gap-4">
                            <i class="fas fa-clock text-mother-terracotta"></i> Horaires
                        </h4>
                        <p class="text-slate-500 text-sm mb-2">Lun - Ven : 09h - 18h</p>
                        <p class="text-slate-500 text-sm">Samedi : 10h - 16h</p>
                    </div>
                    <div class="premium-card p-8 bg-mother-cream/30 border-none shadow-none group hover:bg-white transition-premium">
                        <h4 class="text-sm font-bold text-mother-earth uppercase tracking-widest mb-6 flex items-center gap-4">
                            <i class="fas fa-location-dot text-mother-terracotta"></i> Bureau
                        </h4>
                        <p class="text-slate-500 text-sm mb-2">Cotonou, Bénin</p>
                        <p class="text-slate-500 text-sm">Quartier Haie Vive</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
