@extends('layouts.app')

@section('title', 'Contactez-Nous | Réservez votre Voyage au Bénin')
@section('meta_description', 'Contactez l\'agence Motherland Tours pour organiser votre prochain voyage au Bénin. Demandez un devis sur mesure ou posez-nous vos questions.')
@section('meta_keywords', 'contact motherland tours, réserver voyage bénin, agence de voyage bénin contact, devis tourisme benin')

@section('content')

{{-- Page Header --}}
<div class="bg-mother-cream border-b border-mother-sand py-10 text-center">
    <div class="container">
        <h1 class="text-3xl md:text-4xl font-display font-bold text-mother-espresso mb-2">Contactez-Nous</h1>
        <p class="text-mother-earth text-sm">Notre équipe est à votre écoute pour répondre à toutes vos questions</p>
    </div>
</div>

<section class="bg-mother-beige py-12">
    <div class="container">
        <div class="grid lg:grid-cols-2 gap-10 items-start">

            {{-- Left Column: Contact Info --}}
            <div class="section-reveal">

                {{-- Info Cards --}}
                <div class="premium-card !p-0 overflow-hidden mb-6">
                    <div class="divide-y divide-mother-sand">
                        <div class="p-5 flex items-center gap-4">
                            <div class="w-11 h-11 bg-mother-cream border border-mother-sand rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-envelope text-mother-gold"></i>
                            </div>
                            <div>
                                <div class="font-bold text-mother-espresso text-sm">Email</div>
                                <div class="text-mother-earth text-sm">contact@motherlandtours.com</div>
                                <div class="text-mother-earth/50 text-xs">Réponse sous 24h</div>
                            </div>
                        </div>
                        <div class="p-5 flex items-center gap-4">
                            <div class="w-11 h-11 bg-mother-cream border border-mother-sand rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-phone text-mother-gold"></i>
                            </div>
                            <div>
                                <div class="font-bold text-mother-espresso text-sm">Téléphone</div>
                                <div class="text-mother-earth text-sm">+229 0148803613</div>
                                <div class="text-mother-earth/50 text-xs">Lun-Sam : 9h-18h (GMT+1)</div>
                            </div>
                        </div>
                        <div class="p-5 flex items-center gap-4">
                            <div class="w-11 h-11 bg-[#e8f7ef] border border-[#25d366]/20 rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fab fa-whatsapp text-[#25d366]"></i>
                            </div>
                            <div>
                                <div class="font-bold text-mother-espresso text-sm">WhatsApp</div>
                                <div class="text-mother-earth text-sm">+229 0148803613</div>
                                <div class="text-mother-earth/50 text-xs">Réponse rapide 7j/7</div>
                            </div>
                        </div>
                        <div class="p-5 flex items-center gap-4">
                            <div class="w-11 h-11 bg-mother-cream border border-mother-sand rounded-xl flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-location-dot text-mother-gold"></i>
                            </div>
                            <div>
                                <div class="font-bold text-mother-espresso text-sm">Adresse</div>
                                <div class="text-mother-earth text-sm">Cotonou, Bénin</div>
                                <div class="text-mother-earth/50 text-xs">Quartier Haie Vive</div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- WhatsApp CTA --}}
                <div class="bg-mother-espresso rounded-2xl p-6 mb-6">
                    <div class="flex flex-col items-center text-center">
                        <div class="w-12 h-12 bg-[#25d366] text-white rounded-full flex items-center justify-center text-2xl mb-4">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                        <h3 class="font-display font-bold text-white text-lg mb-2">Besoin d'une réponse rapide ?</h3>
                        <p class="text-white/60 text-sm mb-5">Contactez-nous directement sur WhatsApp pour une réponse immédiate</p>
                        <a href="https://wa.me/22948803613" target="_blank"
                           class="btn border-2 border-white/30 text-white hover:bg-white hover:text-mother-espresso !px-8 font-bold text-sm">
                            Ouvrir WhatsApp
                        </a>
                    </div>
                </div>

                {{-- Hours --}}
                <div class="premium-card">
                    <h4 class="font-bold text-mother-espresso mb-5 text-sm uppercase tracking-wider">Heures d'ouverture</h4>
                    <div class="space-y-3 text-sm">
                        <div class="flex justify-between items-center py-2 border-b border-mother-sand">
                            <span class="font-semibold text-mother-espresso">Lundi – Vendredi</span>
                            <span class="text-mother-earth">9h00 – 18h00</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-mother-sand">
                            <span class="font-semibold text-mother-espresso">Samedi</span>
                            <span class="text-mother-earth">10h00 – 16h00</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="font-semibold text-mother-espresso">Dimanche</span>
                            <span class="text-mother-earth/50">Fermé</span>
                        </div>
                        <p class="text-mother-earth/40 text-xs mt-2">* Heures locales du Bénin (GMT+1)</p>
                    </div>
                </div>
            </div>

            {{-- Right Column: Form + FAQ --}}
            <div class="section-reveal">
                <div class="premium-card !p-8 mb-6">
                    <h3 class="font-display font-bold text-mother-espresso text-xl mb-6">Envoyez-nous un message</h3>
                    <form action="/contact" method="POST" class="space-y-5" id="contactForm">
                        @csrf
                        <div class="form-group !mb-0">
                            <label class="text-xs font-bold text-mother-earth uppercase tracking-widest mb-2 block">Nom complet <span class="text-red-500">*</span></label>
                            <input type="text" name="name" class="form-control" placeholder="Votre nom complet" required>
                        </div>
                        <div class="form-group !mb-0">
                            <label class="text-xs font-bold text-mother-earth uppercase tracking-widest mb-2 block">Email <span class="text-red-500">*</span></label>
                            <input type="email" name="email" class="form-control" placeholder="votre@email.com" required>
                        </div>
                        <div class="form-group !mb-0">
                            <label class="text-xs font-bold text-mother-earth uppercase tracking-widest mb-2 block">Sujet <span class="text-red-500">*</span></label>
                            <select name="subject" class="form-control" required>
                                <option value="">Sélectionnez...</option>
                                <option value="resa">Question sur un itinéraire</option>
                                <option value="devis">Demande de devis sur-mesure</option>
                                <option value="part">Partenariat & Presse</option>
                                <option value="autre">Autre demande</option>
                            </select>
                        </div>
                        <div class="form-group !mb-0">
                            <label class="text-xs font-bold text-mother-earth uppercase tracking-widest mb-2 block">Message <span class="text-red-500">*</span></label>
                            <textarea name="message" rows="5" class="form-control" placeholder="Votre message..." required></textarea>
                        </div>
                        <button type="submit" id="submitBtn" class="btn btn-cta w-full !py-4 text-sm font-bold tracking-wider uppercase">
                            Envoyer le message
                        </button>
                    </form>
                    <script>
                        document.getElementById('contactForm').addEventListener('submit', function() {
                            const btn = document.getElementById('submitBtn');
                            btn.innerHTML = '<i class="fas fa-circle-notch fa-spin mr-2"></i> Envoi en cours...';
                            btn.classList.add('opacity-75', 'cursor-not-allowed');
                        });
                    </script>
                </div>

                {{-- FAQ --}}
                <div class="premium-card !p-6">
                    <h4 class="font-bold text-mother-espresso mb-4 text-sm">Questions fréquentes</h4>
                    <div class="space-y-2">
                        <a href="/packs"      class="block text-mother-gold hover:text-mother-espresso text-sm transition-colors">Quels sont les tarifs des packs ?</a>
                        <a href="/itineraire" class="block text-mother-gold hover:text-mother-espresso text-sm transition-colors">Que comprend l'itinéraire ?</a>
                        <a href="/reserver"  class="block text-mother-gold hover:text-mother-espresso text-sm transition-colors">Comment faire une réservation ?</a>
                        <a href="/a-propos"  class="block text-mother-gold hover:text-mother-espresso text-sm transition-colors">Quelles sont vos garanties sécurité ?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
