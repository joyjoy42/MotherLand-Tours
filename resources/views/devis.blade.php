@extends('layouts.app')

@section('content')
<!-- Smokey Header for Devis -->
<section style="position: relative; background: url('/images/packs-hero.jpg') center/cover no-repeat; padding: 120px 0; color: white; text-align: center;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(15, 23, 42, 0.85); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <span class="badge-yellow" style="margin-bottom: 20px; display: inline-block;">SUR MESURE</span>
        <h1 style="font-size: 3.5rem; color: white; font-weight: 800; margin-bottom: 24px;">Votre <span>Voyage</span> Unique</h1>
        <p style="color: #cbd5e1; font-size: 1.1rem; max-width: 600px; margin: 0 auto;">Créez une aventure qui vous ressemble, adaptée à votre budget et vos envies.</p>
    </div>
</section>

<section class="section-padding" style="background: white;">
    <div class="container">
        <div style="max-width: 900px; margin: 0 auto;">
            <!-- Premium Info Box -->
            <div style="background: #faf5ff; border: 1px solid #f3e8ff; border-radius: var(--radius-lg); padding: 40px; margin-bottom: 64px; display: flex; gap: 32px; align-items: center;">
                <div style="width: 64px; height: 64px; background: white; border-radius: 20px; display: flex; align-items: center; justify-content: center; color: #9333ea; font-size: 1.8rem; flex-shrink: 0; box-shadow: var(--shadow-sm);">
                    <i class="fas fa-wand-magic-sparkles"></i>
                </div>
                <div>
                    <h4 style="color: #6b21a8; margin-bottom: 12px; font-size: 1.2rem;">Ce formulaire est pour vous si :</h4>
                    <ul style="list-style: none; font-size: 0.95rem; color: #7e22ce; display: grid; grid-template-columns: 1fr 1fr; gap: 12px;">
                        <li style="display: flex; align-items: center; gap: 10px;"><i class="fas fa-star" style="font-size: 0.7rem;"></i> Pays de départ non listé</li>
                        <li style="display: flex; align-items: center; gap: 10px;"><i class="fas fa-star" style="font-size: 0.7rem;"></i> Durée de séjour spécifique</li>
                        <li style="display: flex; align-items: center; gap: 10px;"><i class="fas fa-star" style="font-size: 0.7rem;"></i> Événement spécial à fêter</li>
                        <li style="display: flex; align-items: center; gap: 10px;"><i class="fas fa-star" style="font-size: 0.7rem;"></i> Itinéraire thématique</li>
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
                <form action="/devis" method="POST">
                    @csrf
                    
                    <h3 style="margin-bottom: 32px; font-family: 'Outfit'; color: var(--primary-dark); font-size: 1.4rem;">1. Coordonnées Personnelles</h3>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 32px;">
                        <div class="form-group">
                            <label for="name">Nom *</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" required>
                        </div>
                        <div class="form-group">
                            <label for="firstname">Prénom *</label>
                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" required>
                        </div>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 32px;">
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="votre@email.com" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Téléphone *</label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="+33 X XX XX XX XX" required>
                        </div>
                    </div>

                    <h3 style="margin-top: 48px; margin-bottom: 32px; font-family: 'Outfit'; color: var(--primary-dark); font-size: 1.4rem;">2. Votre Projet de Voyage</h3>

                    <div class="form-group">
                        <label for="departure">Depuis quel pays/ville souhaitez-vous partir ? *</label>
                        <input type="text" id="departure" name="departure" class="form-control" placeholder="Ex: Bruxelles, Genève, Montreal..." required>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 32px;">
                        <div class="form-group">
                            <label for="start">Date de début idéale</label>
                            <input type="date" id="start" name="start" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="end">Date de fin idéale</label>
                            <input type="date" id="end" name="end" class="form-control">
                        </div>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 32px;">
                        <div class="form-group">
                            <label for="people">Nombre de personnes *</label>
                            <input type="number" id="people" name="people" class="form-control" min="1" value="1" required>
                        </div>
                        <div class="form-group">
                            <label for="budget">Budget estimé par personne</label>
                            <input type="text" id="budget" name="budget" class="form-control" placeholder="Ex: 2000€">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="needs">Dites-nous ce qui vous ferait rêver *</label>
                        <textarea id="needs" name="needs" rows="6" class="form-control" placeholder="Activités souhaitées, hôtels préférés, rythme du voyage..." required></textarea>
                    </div>

                    <div style="text-align: center; margin-top: 56px;">
                        <button type="submit" class="btn btn-cta" style="width: 100%; padding: 22px; font-size: 1.1rem;">DEMANDER MON DEVIS GRATUIT</button>
                        <div style="margin-top: 24px; display: flex; justify-content: center; gap: 32px; color: #64748b; font-size: 0.85rem;">
                            <span><i class="fas fa-clock" style="color: var(--primary);"></i> Réponse sous 48h</span>
                            <span><i class="fas fa-shield-alt" style="color: var(--primary);"></i> Données protégées</span>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Fast Contact -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 32px; margin-top: 64px;">
                <div class="premium-card" style="text-align: center; border: 1px solid #ecfdf5; background: #ecfdf5;">
                    <i class="fab fa-whatsapp" style="font-size: 2rem; color: #10b981; margin-bottom: 20px;"></i>
                    <h4 style="margin-bottom: 12px;">Échange rapide</h4>
                    <p style="font-size: 0.9rem; color: #065f46; margin-bottom: 24px;">Pour une réponse instantanée à vos questions.</p>
                    <a href="https://wa.me/22948803613" target="_blank" class="btn" style="background: #10b981; color: white; width: 100%;">Lancer WhatsApp</a>
                </div>
                <div class="premium-card" style="text-align: center; border: 1px solid #eff6ff; background: #eff6ff;">
                    <i class="fas fa-envelope-open-text" style="font-size: 2rem; color: #3b82f6; margin-bottom: 20px;"></i>
                    <h4 style="margin-bottom: 12px;">Dossier complet</h4>
                    <p style="font-size: 0.9rem; color: #1e3a8a; margin-bottom: 24px;">Envoyez-nous vos documents ou parcours types.</p>
                    <a href="mailto:motherlandtours9@gmail.com" class="btn" style="background: #3b82f6; color: white; width: 100%;">Écrire un Email</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
