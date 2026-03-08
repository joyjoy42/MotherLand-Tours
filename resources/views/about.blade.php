@extends('layouts.app')

@section('content')
<!-- Smokey Header for About -->
<section style="position: relative; background: url('/images/packs-hero.jpg') center/cover no-repeat; padding: 120px 0; color: white; text-align: center;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(15, 23, 42, 0.85); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <span class="badge-yellow" style="margin-bottom: 20px; display: inline-block;">L'ÉQUIPE</span>
        <h1 style="font-size: 3.5rem; color: white; font-weight: 800; margin-bottom: 24px;">À Propos <span>de Nous</span></h1>
        <p style="color: #cbd5e1; font-size: 1.1rem; max-width: 600px; margin: 0 auto;">Une équipe de passionnés dédiée à la valorisation du patrimoine béninois.</p>
    </div>
</section>

<section class="section-padding" style="background: white;">
    <div class="container">
        <!-- Mission Section -->
        <div style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 80px; align-items: center; margin-bottom: 120px;">
            <div class="animate-fade">
                <h2 style="font-size: 2.8rem; margin-bottom: 32px; line-height: 1.2;">Notre <span>Mission</span> Fondatrice</h2>
                <p style="font-size: 1.15rem; color: #475569; margin-bottom: 24px; line-height: 1.8;">Motherland Tours est née d'un désir profond : reconnecter le monde, et particulièrement la diaspora, à l'incroyable richesse culturelle et historique du Bénin.</p>
                <p style="font-size: 1.15rem; color: #475569; line-height: 1.8;">Nous ne nous contentons pas d'organiser des voyages ; nous créons des ponts de compréhension, de respect et d'émerveillement à travers des expériences authentiques et immersives.</p>
            </div>
            <div style="position: relative;" class="animate-fade">
                <div style="position: absolute; bottom: -30px; left: -30px; width: 150px; height: 150px; background: var(--primary); border-radius: 40px; z-index: -1; opacity: 0.1;"></div>
                <img src="{{ asset('images/culture.jpg') }}" class="rounded-img" style="width: 100%; height: 500px; object-fit: cover;" alt="Culture Béninoise">
            </div>
        </div>

        <!-- Values -->
        <div class="section-header">
            <h2>Les Valeurs Qui Nous Marient</h2>
        </div>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 32px; margin-bottom: 120px;">
            <div class="premium-card" style="text-align: center;">
                <div style="width: 80px; height: 80px; background: #fff1f2; border-radius: 30px; display: flex; align-items: center; justify-content: center; margin: 0 auto 32px; color: #e11d48;">
                    <i class="fas fa-heart" style="font-size: 2rem;"></i>
                </div>
                <h4 style="font-size: 1.3rem; margin-bottom: 16px;">Authenticité</h4>
                <p style="font-size: 0.95rem; color: #64748b; line-height: 1.6;">Nous évitons les circuits de masse pour vous offrir un Bénin vrai, pur et sans fard.</p>
            </div>
            <div class="premium-card" style="text-align: center;">
                <div style="width: 80px; height: 80px; background: #eff6ff; border-radius: 30px; display: flex; align-items: center; justify-content: center; margin: 0 auto 32px; color: #2563eb;">
                    <i class="fas fa-shield-halved" style="font-size: 2rem;"></i>
                </div>
                <h4 style="font-size: 1.3rem; margin-bottom: 16px;">Sécurité</h4>
                <p style="font-size: 0.95rem; color: #64748b; line-height: 1.6;">Votre tranquillité d'esprit est assurée par une présence et un support constant durant tout le séjour.</p>
            </div>
            <div class="premium-card" style="text-align: center;">
                <div style="width: 80px; height: 80px; background: #ecfdf5; border-radius: 30px; display: flex; align-items: center; justify-content: center; margin: 0 auto 32px; color: #059669;">
                    <i class="fas fa-handshake" style="font-size: 2rem;"></i>
                </div>
                <h4 style="font-size: 1.3rem; margin-bottom: 16px;">Partage</h4>
                <p style="font-size: 0.95rem; color: #64748b; line-height: 1.6;">Nous encourageons les échanges sincères entre les voyageurs et les habitants locaux.</p>
            </div>
            <div class="premium-card" style="text-align: center;">
                <div style="width: 80px; height: 80px; background: #fffbeb; border-radius: 30px; display: flex; align-items: center; justify-content: center; margin: 0 auto 32px; color: #f59e0b;">
                    <i class="fas fa-crown" style="font-size: 2rem;"></i>
                </div>
                <h4 style="font-size: 1.3rem; margin-bottom: 16px;">Excellence</h4>
                <p style="font-size: 0.95rem; color: #64748b; line-height: 1.6;">Une sélection rigoureuse des meilleurs hébergements et prestataires locaux.</p>
            </div>
        </div>

        <!-- Vision -->
        <div style="background: var(--dark); border-radius: 40px; padding: 100px 64px; text-align: center; color: white; margin-bottom: 120px; position: relative; overflow: hidden;">
            <div style="position: absolute; right: -50px; top: -50px; width: 250px; height: 250px; background: var(--primary); border-radius: 50%; opacity: 0.1;"></div>
            <h2 style="color: white; font-size: 2.8rem; margin-bottom: 40px;">Notre Vision 2030</h2>
            <p style="max-width: 850px; margin: 0 auto 32px; font-size: 1.25rem; color: #cbd5e1; line-height: 1.8;">Nous aspirons à devenir la plateforme de référence pour le tourisme responsable et culturel en Afrique de l'Ouest. Notre but est de prouver que le voyage peut être un moteur de développement local tout en offrant une aventure humaine sans précédent.</p>
            <p style="max-width: 850px; margin: 0 auto; font-size: 1.25rem; color: #cbd5e1; line-height: 1.8; font-weight: 600;">Le Bénin ne se visite pas, il se vit.</p>
        </div>

        <!-- Team -->
        <div class="section-header">
            <h2>Une Équipe dévouée</h2>
        </div>
        
        <div class="premium-card" style="text-align: center; padding: 64px; max-width: 900px; margin-inline: auto;">
            <p style="font-size: 1.15rem; color: #475569; line-height: 2;">Chaque membre de Motherland Tours est un ambassadeur de la culture béninoise. Nos guides sont tous certifiés et natifs du pays, garantissant une connaissance ésotérique des lieux et des coutumes. <br><br> De la logistique au support terrain, nous sommes là pour transformer votre projet de voyage en un chef-d'œuvre de souvenirs.</p>
        </div>
    </div>
</section>
@endsection
