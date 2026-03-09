@extends('layouts.app')

@section('content')
<!-- Smokey Header for Contact -->
<section style="position: relative; background: url('/images/packs-hero.jpg') center/cover no-repeat; padding: 120px 0; color: white; text-align: center;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(15, 23, 42, 0.85); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <span class="badge-yellow" style="margin-bottom: 20px; display: inline-block;">CONTACT</span>
        <h1 style="font-size: 3.5rem; color: white; font-weight: 800; margin-bottom: 24px;">Parlons de Votre <span style="color: var(--color-mother-terracotta);">Projet</span></h1>
        <p style="color: #cbd5e1; font-size: 1.1rem; max-width: 600px; margin: 0 auto;">Notre équipe est à votre entière disposition pour faire de votre voyage une réussite totale.</p>
    </div>
</section>

<section class="section-padding bg-grain" style="background: white;">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr 1.3fr; gap: 64px; align-items: start;">
            <!-- Contact Info Sidebar -->
            <div style="display: grid; gap: 32px;">
                <div class="premium-card" style="display: flex; gap: 24px; align-items: center; padding: 24px 32px;">
                    <div style="width: 56px; height: 56px; background: var(--color-primary-light); border-radius: 18px; display: flex; align-items: center; justify-content: center; color: var(--color-mother-navy); font-size: 1.5rem; flex-shrink: 0;">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h4 style="font-size: 1.05rem; margin-bottom: 4px;">Email Direct</h4>
                        <p style="font-size: 0.95rem; color: #475569;"><a href="mailto:motherlandtours9@gmail.com" style="color: inherit; text-decoration: none;">motherlandtours9@gmail.com</a></p>
                    </div>
                </div>

                <div class="premium-card" style="display: flex; gap: 24px; align-items: center; padding: 24px 32px;">
                    <div style="width: 56px; height: 56px; background: #ecfdf5; border-radius: 18px; display: flex; align-items: center; justify-content: center; color: #059669; font-size: 1.5rem; flex-shrink: 0;">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div>
                        <h4 style="font-size: 1.05rem; margin-bottom: 4px;">Standard Téléphonique</h4>
                        <p style="font-size: 0.95rem; color: #475569;"><a href="tel:+2290148803613" style="color: inherit; text-decoration: none;">+229 0148803613</a></p>
                    </div>
                </div>

                <div class="premium-card" style="display: flex; gap: 24px; align-items: center; padding: 24px 32px;">
                    <div style="width: 56px; height: 56px; background: #fffbeb; border-radius: 18px; display: flex; align-items: center; justify-content: center; color: #d97706; font-size: 1.5rem; flex-shrink: 0;">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div>
                        <h4 style="font-size: 1.05rem; margin-bottom: 4px;">WhatsApp Business</h4>
                        <p style="font-size: 0.95rem; color: #475569;"><a href="https://wa.me/22948803613" style="color: inherit; text-decoration: none;">+229 48803613</a></p>
                    </div>
                </div>

                <!-- Teal Highlight Box -->
                <div style="background: var(--color-mother-teal); border-radius: var(--radius-lg); padding: 48px 32px; text-align: center; color: white; box-shadow: 0 20px 40px -10px rgba(2, 106, 92, 0.3);">
                    <div style="width: 80px; height: 80px; background: rgba(255,255,255,0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 32px; font-size: 2.22rem;">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h3 style="color: white; margin-bottom: 16px; font-size: 1.8rem;">Réponse Immédiate</h3>
                    <p style="color: rgba(255,255,255,0.8); margin-bottom: 32px; font-size: 1rem; line-height: 1.6;">Pour toute urgence ou question rapide, notre service conciergerie est disponible en direct.</p>
                    <a href="https://wa.me/22948803613" target="_blank" class="btn" style="background: white; color: var(--color-mother-teal); width: 100%; border-radius: var(--radius-md);">OUVRIR LA CONVERSATION</a>
                </div>
            </div>

            <div>
                <div class="premium-card">
                    @if(session('success'))
                        <div style="background: #ecfdf5; color: #065f46; padding: 20px; border-radius: var(--radius-md); margin-bottom: 32px; border: 1px solid #10b981; display: flex; align-items: center; gap: 15px;">
                            <i class="fas fa-check-circle" style="font-size: 1.5rem;"></i>
                            <p style="margin: 0; font-weight: 600;">{{ session('success') }}</p>
                        </div>
                    @endif
                    <h3 style="margin-bottom: 40px; font-family: 'Outfit'; color: var(--dark); font-size: 1.8rem;">Laissez-nous un message</h3>
                    <form action="/contact" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Votre Nom complet *</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Jean Dupont" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Adresse Email *</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="votre@email.com" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Sujet de votre message *</label>
                            <select id="subject" name="subject" class="form-control" required>
                                <option value="resa">Question sur une réservation</option>
                                <option value="devis">Demande de devis sur-mesure</option>
                                <option value="part">Partenariat</option>
                                <option value="autre">Autre demande</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Votre Message *</label>
                            <textarea id="message" name="message" rows="7" class="form-control" placeholder="Comment pouvons-nous vous aider ?" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%; padding: 20px; font-size: 1.1rem;">ENVOYER LE MESSAGE</button>
                    </form>
                </div>

                <!-- Small FAQ & Info Cards -->
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px; margin-top: 32px;">
                    <div class="premium-card" style="padding: 24px;">
                        <h4 style="font-size: 0.95rem; margin-bottom: 12px; color: var(--dark);"><i class="fas fa-clock" style="color: var(--primary); margin-right: 10px;"></i> Horaires</h4>
                        <p style="font-size: 0.85rem; color: #64748b; margin-bottom: 4px;">Lun - Ven : 09h - 18h</p>
                        <p style="font-size: 0.85rem; color: #64748b;">Samedi : 10h - 16h</p>
                    </div>
                    <div class="premium-card" style="padding: 24px;">
                        <h4 style="font-size: 0.95rem; margin-bottom: 12px; color: var(--dark);"><i class="fas fa-location-dot" style="color: var(--primary); margin-right: 10px;"></i> Bureau</h4>
                        <p style="font-size: 0.85rem; color: #64748b; margin-bottom: 4px;">Cotonou, Bénin</p>
                        <p style="font-size: 0.85rem; color: #64748b;">Quartier Haie Vive</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
