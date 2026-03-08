@extends('layouts.app')

@section('content')
<!-- Smokey Header for Packs -->
<section style="position: relative; background: url('/images/packs-hero.jpg') center/cover no-repeat; padding: 120px 0; color: white; text-align: center;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(15, 23, 42, 0.85); z-index: 1;"></div>
    <div class="container" style="position: relative; z-index: 2;">
        <span class="badge-yellow" style="margin-bottom: 20px; display: inline-block;">NOS OFFRES</span>
        <h1 style="font-size: 4rem; color: white; margin-bottom: 24px;">Nos <span style="color: var(--primary);">Packs</span> de Voyage</h1>
        <p style="color: #cbd5e1; font-size: 1.2rem; max-width: 700px; margin: 0 auto;">Découvrez nos formules tout-en-un et choisissez celle qui correspond le mieux à votre projet de découverte.</p>
    </div>
</section>

<!-- Content Section on White -->
<section class="section-padding" style="background: white;">
    <div class="container">
        <!-- Departure Tabs -->
        <div style="display: flex; justify-content: center; gap: 12px; margin-bottom: 64px; flex-wrap: wrap; background: var(--gray-light); padding: 12px; border-radius: 100px; width: fit-content; margin-inline: auto; box-shadow: var(--shadow-sm);">
            <button class="nav-item active" style="padding: 14px 28px; cursor: pointer; border: none;" onclick="showPricing('paris')">PARIS</button>
            <button class="nav-item" style="padding: 14px 28px; cursor: pointer; border: none;" onclick="showPricing('abidjan')">ABIDJAN</button>
            <button class="nav-item" style="padding: 14px 28px; cursor: pointer; border: none;" onclick="showPricing('maroc')">MAROC</button>
            <button class="nav-item" style="padding: 14px 28px; cursor: pointer; border: none;" onclick="showPricing('canada')">CANADA</button>
        </div>

        <!-- Pricing Sections -->
        <div id="pricing-paris" class="pricing-section active">
            @include('partials.pack-table', ['days' => 7, 'prices' => ['1200€', '1050€', '950€'], 'flights' => true])
            <div style="margin-top: 48px;"></div>
            @include('partials.pack-table', ['days' => 10, 'prices' => ['1800€', '1600€', '1450€'], 'flights' => true])
        </div>

        <div id="pricing-abidjan" class="pricing-section" style="display: none;">
            @include('partials.pack-table', ['days' => 7, 'prices' => ['800€', '700€', '650€'], 'flights' => true])
            <div style="margin-top: 48px;"></div>
            @include('partials.pack-table', ['days' => 10, 'prices' => ['1200€', '1050€', '950€'], 'flights' => true])
        </div>

        <div id="pricing-maroc" class="pricing-section" style="display: none;">
            @include('partials.pack-table', ['days' => 7, 'prices' => ['1100€', '950€', '850€'], 'flights' => true])
            <div style="margin-top: 48px;"></div>
            @include('partials.pack-table', ['days' => 10, 'prices' => ['1650€', '1450€', '1300€'], 'flights' => true])
        </div>

        <div id="pricing-canada" class="pricing-section" style="display: none;">
            @include('partials.pack-table', ['days' => 7, 'prices' => ['1500€', '1300€', '1150€'], 'flights' => true])
            <div style="margin-top: 48px;"></div>
            @include('partials.pack-table', ['days' => 10, 'prices' => ['2200€', '1950€', '1750€'], 'flights' => true])
        </div>

        <!-- Final CTA -->
        <div style="text-align: center; margin-top: 80px;">
            <p style="color: #64748b; margin-bottom: 32px;">Vous avez une demande spécifique ? Un budget particulier ?</p>
            <a href="/devis" class="btn btn-cta" style="padding: 24px 64px; font-size: 1.1rem;">DEMANDER UN DEVIS PERSONNALISÉ</a>
        </div>
    </div>
</section>

<script>
    function showPricing(country) {
        document.querySelectorAll('.pricing-section').forEach(s => s.style.display = 'none');
        document.querySelectorAll('.nav-item').forEach(b => {
            if(b.tagName === 'BUTTON') b.classList.remove('active');
        });
        
        document.getElementById('pricing-' + country).style.display = 'block';
        event.currentTarget.classList.add('active');
    }
</script>
@endsection
