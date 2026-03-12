@extends('layouts.app')

@section('content')

{{-- Page Header --}}
<div class="bg-mother-cream border-b border-mother-sand py-10 text-center">
    <div class="container">
        <h1 class="text-3xl md:text-4xl font-display font-bold text-mother-espresso mb-2">Réservation</h1>
        <p class="text-mother-earth text-sm">Remplissez le formulaire pour faire votre demande de réservation</p>
    </div>
</div>

<section class="bg-mother-beige py-12">
    <div class="container max-w-3xl">

        {{-- Info Banner --}}
        <div class="bg-white border border-mother-gold/30 rounded-2xl p-6 mb-8 section-reveal">
            <div class="flex items-start gap-4">
                <div class="w-10 h-10 bg-mother-gold/10 rounded-lg flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-shield-heart text-mother-gold"></i>
                </div>
                <div>
                    <h4 class="font-bold text-mother-espresso mb-3 text-sm">Important :</h4>
                    <ul class="space-y-1.5 text-mother-earth text-sm">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-mother-gold text-xs"></i> Cette demande ne constitue pas une réservation définitive</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-mother-gold text-xs"></i> Notre équipe vous contactera pour confirmer la disponibilité</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-mother-gold text-xs"></i> Aucun paiement n'est requis à cette étape</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-mother-gold text-xs"></i> Vous recevrez un email de confirmation sous 24h</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Form Card --}}
        <div class="premium-card !p-8 md:!p-12 section-reveal">
            <form action="/reserver" method="POST" id="reserveForm">
                @csrf

                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div class="form-group !mb-0">
                        <label class="text-xs font-bold text-mother-earth uppercase tracking-widest mb-2 block">Nom <span class="text-red-500">*</span></label>
                        <input type="text" name="name" class="form-control" placeholder="Votre nom" required>
                    </div>
                    <div class="form-group !mb-0">
                        <label class="text-xs font-bold text-mother-earth uppercase tracking-widest mb-2 block">Prénom <span class="text-red-500">*</span></label>
                        <input type="text" name="firstname" class="form-control" placeholder="Votre prénom" required>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div class="form-group !mb-0">
                        <label class="text-xs font-bold text-mother-earth uppercase tracking-widest mb-2 block">Email <span class="text-red-500">*</span></label>
                        <input type="email" name="email" class="form-control" placeholder="votre@email.com" required>
                    </div>
                    <div class="form-group !mb-0">
                        <label class="text-xs font-bold text-mother-earth uppercase tracking-widest mb-2 block">Téléphone <span class="text-red-500">*</span></label>
                        <input type="tel" name="phone" class="form-control" placeholder="+33 X XX XX XX XX" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="text-xs font-bold text-mother-earth uppercase tracking-widest mb-2 block">Pays de départ <span class="text-red-500">*</span></label>
                    <input type="text" name="departure" class="form-control" placeholder="Ex: Paris, Abidjan, Montréal..." required>
                </div>

                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div class="form-group !mb-0">
                        <label class="text-xs font-bold text-mother-earth uppercase tracking-widest mb-2 block">Date souhaitée <span class="text-red-500">*</span></label>
                        <input type="date" name="date" class="form-control" required>
                    </div>
                    <div class="form-group !mb-0">
                        <label class="text-xs font-bold text-mother-earth uppercase tracking-widest mb-2 block">Durée <span class="text-red-500">*</span></label>
                        <select name="duration" class="form-control" required>
                            <option value="">Sélectionnez...</option>
                            <option value="7">Pack 7 Jours Standard</option>
                            <option value="10">Pack 10 Jours Signature (Safari)</option>
                            <option value="custom">Itinéraire sur mesure</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="text-xs font-bold text-mother-earth uppercase tracking-widest mb-2 block">Nombre de personnes <span class="text-red-500">*</span></label>
                    <input type="number" name="people" class="form-control" value="1" min="1" required>
                </div>

                <div class="form-group">
                    <label class="text-xs font-bold text-mother-earth uppercase tracking-widest mb-2 block">Message supplémentaire (optionnel)</label>
                    <textarea name="message" rows="4" class="form-control" placeholder="Informations complémentaires, besoins spécifiques..."></textarea>
                </div>

                <button type="submit" id="reserveBtn" class="btn btn-cta w-full !py-4 mt-2 text-sm font-bold tracking-wider uppercase">
                    Envoyer ma demande
                </button>
            </form>

            <script>
                document.getElementById('reserveForm').addEventListener('submit', function() {
                    const btn = document.getElementById('reserveBtn');
                    btn.innerHTML = '<i class="fas fa-circle-notch fa-spin mr-2"></i> Traitement en cours...';
                    btn.classList.add('opacity-75', 'cursor-not-allowed');
                });
            </script>
        </div>

        {{-- WhatsApp CTA --}}
        <div class="mt-8 bg-[#e8f7ef] border border-[#25d366]/30 rounded-2xl p-6 text-center section-reveal">
            <h3 class="font-display font-bold text-lg text-mother-espresso mb-2">Préférez réserver par WhatsApp ?</h3>
            <p class="text-mother-earth text-sm mb-5">Contactez-nous directement pour une réponse immédiate</p>
            <a href="https://wa.me/22948803613" target="_blank"
               class="btn bg-[#25d366] text-white hover:bg-[#20bc5a] !px-8 !py-3 !text-sm font-bold">
                <i class="fab fa-whatsapp text-lg"></i> Contacter via WhatsApp
            </a>
        </div>
    </div>
</section>

@endsection
