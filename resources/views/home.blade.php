<!-- DIAGNOSTIC: Premium UI Update Applied -->
@extends('layouts.app')

@section('content')
<!-- Premium Hero Section -->
<section style="padding: 100px 0; background: linear-gradient(135deg, #fefeff 0%, #f0f9ff 100%);">
    <div class="container" style="display: grid; grid-template-columns: 1.1fr 1fr; gap: 64px; align-items: center;">
        <div class="animate-fade">
            <span class="badge-yellow" style="margin-bottom: 20px; display: inline-block;">Expérience Authentique</span>
            <h1 style="font-size: 4rem; line-height: 1.1; margin-bottom: 24px; color: var(--dark);">Découvrez le <span style="color: var(--primary);">Bénin</span> Autrement</h1>
            <p style="font-size: 1.2rem; color: #475569; margin-bottom: 40px; line-height: 1.8;">Voyages organisés de 7 et 10 jours depuis Paris, Abidjan, Maroc et Canada. Plongez au cœur d'une terre de traditions et d'histoire.</p>
            <div style="display: flex; gap: 20px;">
                <a href="/reserver" class="btn btn-cta">RÉSERVER MAINTENANT <i class="fas fa-arrow-right"></i></a>
                <a href="/packs" class="btn btn-outline">NOS TARIFS</a>
            </div>
        </div>
        <div class="animate-fade" style="position: relative;">
            <div style="position: absolute; top: -20px; right: -20px; width: 100px; height: 100px; background: var(--accent); border-radius: 50%; z-index: -1; opacity: 0.3;"></div>
            <img src="{{ asset('images/hero.jpg') }}" class="rounded-img" style="width: 100%; height: 500px; object-fit: cover; object-position: top;" alt="Dahomey Amazon Statue">
        </div>
    </div>
</section>

<!-- Nos Offres Section with Enhanced Smokey Background -->
<section class="section-padding" style="position: relative; background: url('/images/packs-hero.jpg') center/cover no-repeat; color: white;">
    <!-- Deep Smokey Overlay (0.75 for better visibility) -->
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(rgba(15, 23, 42, 0.75), rgba(15, 23, 42, 0.85)); z-index: 1;"></div>
    
    <div class="container" style="position: relative; z-index: 2;">
        <div class="section-header">
            <span style="color: var(--primary); font-weight: 800; text-transform: uppercase; letter-spacing: 2px; font-size: 0.8rem;">Nos Offres</span>
            <h2 style="margin-top: 10px; color: white;">Choisissez Votre Aventure</h2>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 32px;">
            <!-- Pack 7 Jours -->
            <div class="premium-card">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
                    <h3 style="font-size: 1.8rem;">Pack 7 Jours</h3>
                    <i class="fas fa-map-marked-alt" style="font-size: 2rem; color: var(--primary); opacity: 0.2;"></i>
                </div>
                <p style="color: #64748b; margin-bottom: 24px;">Un concentré d'histoire et de culture pour une immersion rapide et intense.</p>
                <div style="margin-bottom: 32px;">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px; font-size: 0.95rem;">
                        <i class="fas fa-plane-arrival" style="color: var(--primary);"></i> Billet AR & Visa inclus
                    </div>
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px; font-size: 0.95rem;">
                        <i class="fas fa-hotel" style="color: var(--primary);"></i> Hôtels de charme sélectionnés
                    </div>
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px; font-size: 0.95rem;">
                        <i class="fas fa-car" style="color: var(--primary);"></i> Transport privé & Chauffeur
                    </div>
                    <div style="display: flex; align-items: center; gap: 12px; font-size: 0.95rem;">
                        <i class="fas fa-camera-retro" style="color: var(--primary);"></i> 5 jours de visites guidées
                    </div>
                </div>
                <a href="/packs" class="btn btn-primary" style="width: 100%;">DÉCOUVRIR LE TARIF</a>
            </div>

            <!-- Pack 10 Jours -->
            <div class="premium-card" style="border: 2px solid var(--primary); position: relative;">
                <div style="position: absolute; top: -15px; right: 30px;" class="badge-yellow">Le Plus Populaire</div>
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
                    <h3 style="font-size: 1.8rem;">Pack 10 Jours</h3>
                    <i class="fas fa-safari" style="font-size: 2rem; color: var(--primary); opacity: 0.2;"></i>
                </div>
                <p style="color: #64748b; margin-bottom: 24px;">L'expérience ultime incluant le Nord et ses parcs nationaux légendaires.</p>
                <div style="margin-bottom: 32px;">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px; font-size: 0.95rem;">
                        <i class="fas fa-plane-arrival" style="color: var(--primary);"></i> Billet AR & Visa inclus
                    </div>
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px; font-size: 0.95rem;">
                        <i class="fas fa-hotel" style="color: var(--primary);"></i> Hébergements tout confort
                    </div>
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 12px; font-size: 0.95rem;">
                        <i class="fas fa-car" style="color: var(--primary);"></i> 4x4 & Guide expert
                    </div>
                    <div style="display: flex; align-items: center; gap: 12px; font-size: 0.95rem;">
                        <i class="fas fa-paw" style="color: var(--primary);"></i> Safari au Parc Pendjari inclus
                    </div>
                </div>
                <a href="/packs" class="btn btn-cta" style="width: 100%;">DÉCOUVRIR LE TARIF</a>
            </div>
        </div>
    </div>
</section>

<!-- Pourquoi Nous -->
<section class="section-padding" style="background: var(--gray-light);">
    <div class="container">
        <div class="section-header">
            <h2>Pourquoi Voyager Avec Nous ?</h2>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: white; border-radius: 24px; box-shadow: var(--shadow-md); display: flex; align-items: center; justify-content: center; margin: 0 auto 24px; color: var(--primary);">
                    <i class="fas fa-users-viewfinder" style="font-size: 2rem;"></i>
                </div>
                <h4 style="font-size: 1.25rem; margin-bottom: 16px;">Petits Groupes Premium</h4>
                <p style="color: #64748b; font-size: 0.95rem;">Pour une immersion intime et des échanges privilégiés, nos groupes sont limités à 5 personnes.</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: white; border-radius: 24px; box-shadow: var(--shadow-md); display: flex; align-items: center; justify-content: center; margin: 0 auto 24px; color: var(--primary);">
                    <i class="fas fa-heart-circle-check" style="font-size: 2rem;"></i>
                </div>
                <h4 style="font-size: 1.25rem; margin-bottom: 16px;">Sécurité & Sérénité</h4>
                <p style="color: #64748b; font-size: 0.95rem;">Une assistance francophone 24h/24 et des guides experts natifs pour un voyage sans soucis.</p>
            </div>
            <div style="text-align: center;">
                <div style="width: 80px; height: 80px; background: white; border-radius: 24px; box-shadow: var(--shadow-md); display: flex; align-items: center; justify-content: center; margin: 0 auto 24px; color: var(--primary);">
                    <i class="fas fa-earth-africa" style="font-size: 2rem;"></i>
                </div>
                <h4 style="font-size: 1.25rem; margin-bottom: 16px;">Engagement Éco-responsable</h4>
                <p style="color: #64748b; font-size: 0.95rem;">Nous privilégions les circuits courts et soutenons directement l'économie des villages visités.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section-padding" style="background: white;">
    <div class="container">
        <div class="section-header">
            <h2>Ils Sont Partis Avec Nous</h2>
        </div>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 32px;">
            <div class="premium-card">
                <div style="display: flex; gap: 4px; color: var(--accent); margin-bottom: 20px;">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p style="font-style: italic; color: #475569; margin-bottom: 24px; font-size: 1.1rem; line-height: 1.8;">"Une expérience inoubliable ! L'organisation était parfaite et nous avons découvert des lieux magnifiques que nous n'aurions jamais vus seuls."</p>
                <div style="display: flex; align-items: center; gap: 16px;">
                    <div style="width: 50px; height: 50px; background: var(--primary-light); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--primary-dark); font-weight: 800;">M</div>
                    <div>
                        <div style="font-weight: 800; font-size: 1rem;">Marie D.</div>
                        <div style="font-size: 0.8rem; color: #94a3b8;">Voyageuse - Paris</div>
                    </div>
                </div>
            </div>
            <div class="premium-card">
                <div style="display: flex; gap: 4px; color: var(--accent); margin-bottom: 20px;">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                <p style="font-style: italic; color: #475569; margin-bottom: 24px; font-size: 1.1rem; line-height: 1.8;">"Je recommande vivement Motherland Tours. Le rapport qualité-prix est excellent et l'accueil des guides est tout simplement incroyable."</p>
                <div style="display: flex; align-items: center; gap: 16px;">
                    <div style="width: 50px; height: 50px; background: var(--primary-light); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: var(--primary-dark); font-weight: 800;">J</div>
                    <div>
                        <div style="font-weight: 800; font-size: 1rem;">Jean K.</div>
                        <div style="font-size: 0.8rem; color: #94a3b8;">Voyageur - Abidjan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section style="padding: 100px 0;">
    <div class="container">
        <div style="background: var(--dark); border-radius: 40px; padding: 80px 40px; text-align: center; position: relative; overflow: hidden;">
            <div style="position: absolute; bottom: -50px; left: -50px; width: 200px; height: 200px; background: var(--primary); border-radius: 50%; opacity: 0.1;"></div>
            <div style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; background: var(--accent); border-radius: 50%; opacity: 0.1;"></div>
            
            <h2 style="color: white; font-size: 3rem; margin-bottom: 24px; position: relative; z-index: 1;">Prêt à Vivre le Bénin ?</h2>
            <p style="color: #94a3b8; font-size: 1.25rem; margin-bottom: 48px; max-width: 600px; margin-inline: auto;">Contactez-nous dès maintenant pour commencer à planifier votre prochain voyage inoubliable.</p>
            <div style="display: flex; gap: 20px; justify-content: center; position: relative; z-index: 1;">
                <a href="/reserver" class="btn btn-cta">COMMENCER MA RÉSERVATION</a>
                <a href="/devis" class="btn btn-outline" style="background: transparent; border-color: rgba(255,255,255,0.3); color: white;">DEMANDER UN DEVIS</a>
            </div>
        </div>
    </div>
</section>
@endsection
