@extends('layouts.app')

@section('content')
<!-- Smokey Header for Reserver -->
<section style="position: relative; background: url('/images/packs-hero.jpg') center/cover no-repeat; padding: 120px 0; color: white; text-align: center;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(15, 23, 42, 0.85); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <span class="badge-yellow" style="margin-bottom: 20px; display: inline-block;">RÉSERVATION</span>
        <h1 style="font-size: 3.5rem; color: white; font-weight: 800; margin-bottom: 24px;">Préparez Votre <span>Séjour</span></h1>
        <p style="color: #cbd5e1; font-size: 1.1rem; max-width: 600px; margin: 0 auto;">Remplissez ce formulaire et notre équipe s'occupe de tout pour vous.</p>
    </div>
</section>

<section class="section-padding" style="background: white;">
    <div class="container">
        <div style="max-width: 900px; margin: 0 auto;">
            <!-- Important Info -->
            <div style="background: var(--primary-light); border-radius: var(--radius-lg); padding: 40px; margin-bottom: 64px; border: 1px solid rgba(6, 182, 212, 0.1); display: flex; gap: 32px; align-items: center;">
                <div style="width: 64px; height: 64px; background: white; border-radius: 20px; display: flex; align-items: center; justify-content: center; color: var(--primary); font-size: 1.8rem; flex-shrink: 0; box-shadow: var(--shadow-sm);">
                    <i class="fas fa-info-circle"></i>
                </div>
                <div>
                    <h4 style="color: var(--primary-dark); margin-bottom: 12px; font-size: 1.2rem;">À savoir avant de réserver :</h4>
                    <ul style="list-style: none; font-size: 0.95rem; color: #475569; display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                        <li style="display: flex; align-items: center; gap: 10px;"><i class="fas fa-check" style="color: var(--primary); font-size: 0.8rem;"></i> Pas de paiement immédiat</li>
                        <li style="display: flex; align-items: center; gap: 10px;"><i class="fas fa-check" style="color: var(--primary); font-size: 0.8rem;"></i> Confirmation sous 24h</li>
                        <li style="display: flex; align-items: center; gap: 10px;"><i class="fas fa-check" style="color: var(--primary); font-size: 0.8rem;"></i> Devis gratuit & sans engagement</li>
                        <li style="display: flex; align-items: center; gap: 10px;"><i class="fas fa-check" style="color: var(--primary); font-size: 0.8rem;"></i> Accompagnement personnalisé</li>
                    </ul>
                </div>
            </div>

            <div class="premium-card">
                @if(session('success'))
                    <div style="background: #ecfdf5; color: #065f46; padding: 20px; border-radius: var(--radius-md); margin-bottom: 32px; border: 1px solid #10b981; display: flex; align-items: center; gap: 15px;">
                        <i class="fas fa-check-circle" style="font-size: 1.5rem;"></i>
                        <p style="margin: 0; font-weight: 600;">{{ session('success') }}</p>
                    </div>
                @endif
                <form action="/reserver" method="POST">
                    @csrf
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 32px;">
                        <div class="form-group">
                            <label for="name">Nom de famille *</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Ex: Dupont" required>
                        </div>
                        <div class="form-group">
                            <label for="firstname">Prénom *</label>
                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Ex: Jean" required>
                        </div>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 32px;">
                        <div class="form-group">
                            <label for="email">Adresse Email *</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="votre@email.com" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Numéro de Téléphone *</label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="+33 X XX XX XX XX" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="departure">Pays ou Ville de départ *</label>
                        <input type="text" id="departure" name="departure" class="form-control" placeholder="Ex: Paris, Lyon, Abidjan..." required>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 32px;">
                        <div class="form-group">
                            <label for="date">Date de départ souhaitée *</label>
                            <input type="date" id="date" name="date" class="form-control" required style="padding-top: 14px; padding-bottom: 14px;">
                        </div>
                        <div class="form-group">
                            <label for="duration">Durée du séjour *</label>
                            <select id="duration" name="duration" class="form-control" required>
                                <option value="7">Pack 7 Jours Standard</option>
                                <option value="10">Pack 10 Jours Signature (Safari)</option>
                                <option value="custom">Sur mesure (À préciser ci-dessous)</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="people">Nombre de Voyageurs *</label>
                        <input type="number" id="people" name="people" class="form-control" value="1" min="1" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Note ou demande particulière (optionnel)</label>
                        <textarea id="message" name="message" rows="5" class="form-control" placeholder="Avez-vous des besoins spécifiques ? Allergies, mobilité, célébration particulière..."></textarea>
                    </div>

                    <div style="text-align: center; margin-top: 48px;">
                        <button type="submit" class="btn btn-cta" style="width: 100%; border-radius: var(--radius-md); padding: 20px; font-size: 1.1rem;">ENVOYER MA DEMANDE DE RÉSERVATION</button>
                    </div>
                </form>
            </div>

            <!-- WhatsApp CTA -->
            <div style="background: white; border-radius: var(--radius-lg); padding: 48px; margin-top: 64px; text-align: center; box-shadow: var(--shadow-md); border: 2px solid #ecfdf5;">
                <div style="width: 80px; height: 80px; background: #ecfdf5; color: #10b981; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2.22rem; margin: 0 auto 32px;">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <h3 style="margin-bottom: 16px; font-family: 'Outfit';">Préférez réserver par WhatsApp ?</h3>
                <p style="font-size: 1.1rem; color: #64748b; margin-bottom: 32px; max-width: 500px; margin-inline: auto;">Contactez-nous directement pour une réponse en temps réel et un échange de vive voix.</p>
                <a href="https://wa.me/22948803613" target="_blank" class="btn" style="background: #10b981; color: white; padding: 18px 48px;">DISCUTER SUR WHATSAPP</a>
            </div>
        </div>
    </div>
</section>
@endsection
