@extends('layouts.app')

@section('content')

{{-- Page Header --}}
<div class="bg-mother-cream border-b border-mother-sand py-10 text-center">
    <div class="container">
        <h1 class="text-3xl md:text-4xl font-display font-bold text-mother-espresso mb-2">Devis Personnalisé</h1>
        <p class="text-mother-earth text-sm">Créez votre voyage sur mesure selon vos envies et votre budget</p>
    </div>
</div>

<section class="bg-mother-beige py-12">
    <div class="container max-w-3xl">

        {{-- Info Banner --}}
        <div class="bg-white border border-mother-gold/30 rounded-2xl p-6 mb-8 section-reveal">
            <div class="flex items-start gap-4">
                <div class="w-10 h-10 bg-mother-gold/10 rounded-lg flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-gem text-mother-gold"></i>
                </div>
                <div>
                    <h4 class="font-bold text-mother-espresso mb-3 text-sm">Ce formulaire est pour vous si :</h4>
                    <ul class="space-y-1.5 text-mother-earth text-sm">
                        <li class="flex items-center gap-2"><i class="fas fa-check text-mother-gold text-xs"></i> Vous partez d'un pays non listé dans nos packs standard</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-mother-gold text-xs"></i> Vous souhaitez une durée différente (5 jours, 14 jours, etc.)</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-mother-gold text-xs"></i> Vous avez des besoins spécifiques (anniversaire, lune de miel, groupe...)</li>
                        <li class="flex items-center gap-2"><i class="fas fa-check text-mother-gold text-xs"></i> Vous voulez personnaliser l'itinéraire</li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Form Card --}}
        <div class="premium-card !p-8 md:!p-12 section-reveal">
            <form action="/devis" method="POST" id="devisForm">
                @csrf

                {{-- Section 1 --}}
                <h3 class="font-display font-bold text-mother-espresso text-lg mb-6 pb-3 border-b border-mother-sand">
                    Vos informations
                </h3>

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

                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div class="form-group !mb-0">
                        <label class="text-xs font-bold text-mother-earth uppercase tracking-widest mb-2 block">Email <span class="text-red-500">*</span></label>
                        <input type="email" name="email" class="form-control" placeholder="votre@email.com" required>
                    </div>
                    <div class="form-group !mb-0">
                        <label class="text-xs font-bold text-mother-earth uppercase tracking-widest mb-2 block">Téléphone <span class="text-red-500">*</span></label>
                        <input type="tel" name="phone" class="form-control" placeholder="+33 X XX XX XX XX" required>
                    </div>
                </div>

                {{-- Section 2 --}}
                <h3 class="font-display font-bold text-mother-espresso text-lg mb-6 pb-3 border-b border-mother-sand">
                    Détails du voyage
                </h3>

                <div class="form-group">
                    <label class="text-xs font-bold text-mother-earth uppercase tracking-widest mb-2 block">Pays de départ <span class="text-red-500">*</span></label>
                    <input type="text" name="departure" class="form-control" placeholder="Ex: Belgique, Suisse, Sénégal..." required>
                </div>

                <div class="form-group">
                    <label class="text-xs font-bold text-mother-earth uppercase tracking-widest mb-2 block">Dates flexibles ? <span class="text-red-500">*</span></label>
                    <input type="text" name="flexible_dates" class="form-control" placeholder="Ex: Été 2025, Décembre, Flexible">
                </div>

                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    <div class="form-group !mb-0">
                        <label class="text-xs font-bold text-mother-earth uppercase tracking-widest mb-2 block">Date de début souhaitée</label>
                        <input type="date" name="start" class="form-control">
                    </div>
                    <div class="form-group !mb-0">
                        <label class="text-xs font-bold text-mother-earth uppercase tracking-widest mb-2 block">Date de fin souhaitée</label>
                        <input type="date" name="end" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label class="text-xs font-bold text-mother-earth uppercase tracking-widest mb-2 block">Nombre de personnes <span class="text-red-500">*</span></label>
                    <input type="number" name="people" class="form-control" min="1" value="1" required>
                </div>

                {{-- Section 3 --}}
                <h3 class="font-display font-bold text-mother-espresso text-lg mb-6 pb-3 border-b border-mother-sand">
                    Budget et besoins
                </h3>

                <div class="form-group">
                    <label class="text-xs font-bold text-mother-earth uppercase tracking-widest mb-2 block">Budget approximatif par personne</label>
                    <input type="text" name="budget" class="form-control" placeholder="Ex: 2000€">
                </div>

                <div class="form-group">
                    <label class="text-xs font-bold text-mother-earth uppercase tracking-widest mb-2 block">Besoins spécifiques <span class="text-red-500">*</span></label>
                    <textarea name="needs" rows="5" class="form-control" placeholder="Décrivez votre projet de voyage : occasion spéciale, centres d'intérêt, activités souhaitées, régime alimentaire..." required></textarea>
                </div>

                <button type="submit" id="devisBtn" class="btn btn-cta w-full !py-4 mt-2 text-sm font-bold tracking-wider uppercase">
                    Demander un devis personnalisé
                </button>
                <p class="text-center text-mother-earth/50 text-xs mt-3">Délai de réponse : 48 heures maximum</p>
            </form>

            <script>
                document.getElementById('devisForm').addEventListener('submit', function() {
                    const btn = document.getElementById('devisBtn');
                    btn.innerHTML = '<i class="fas fa-circle-notch fa-spin mr-2"></i> Traitement en cours...';
                    btn.classList.add('opacity-75', 'cursor-not-allowed');
                });
            </script>
        </div>

        {{-- Express Channels --}}
        <div class="grid md:grid-cols-2 gap-6 mt-8 section-reveal">
            <a href="https://wa.me/22948803613" target="_blank"
               class="bg-[#e8f7ef] border border-[#25d366]/30 rounded-2xl p-6 flex flex-col items-center text-center hover:bg-[#d1f0df] transition-all group">
                <div class="w-12 h-12 bg-[#25d366] text-white rounded-xl flex items-center justify-center text-xl mb-4">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <h4 class="font-bold text-mother-espresso mb-1">Discussion rapide</h4>
                <span class="text-[#25d366] text-xs font-bold uppercase tracking-widest">WhatsApp</span>
            </a>
            <a href="mailto:motherlandtours9@gmail.com"
               class="bg-mother-cream border border-mother-sand rounded-2xl p-6 flex flex-col items-center text-center hover:bg-white transition-all group">
                <div class="w-12 h-12 bg-mother-espresso text-white rounded-xl flex items-center justify-center text-xl mb-4">
                    <i class="fas fa-envelope"></i>
                </div>
                <h4 class="font-bold text-mother-espresso mb-1">Email direct</h4>
                <span class="text-mother-gold text-xs font-bold uppercase tracking-widest">Email</span>
            </a>
        </div>
    </div>
</section>

@endsection
