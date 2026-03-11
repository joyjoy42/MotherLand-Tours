@extends('layouts.app')

@section('content')
<!-- Premium Smokey Header -->
<section class="relative min-h-[60vh] flex items-center justify-center overflow-hidden bg-mother-earth">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/assets/porte_du_non_retour_night_new.png') }}" class="w-full h-full object-cover opacity-10" alt="Packs Hero">
        <div class="absolute inset-0 bg-mother-earth/70"></div>
    </div>
    
    <div class="container relative z-10 px-6 animate-fade-in py-32">
        <span class="text-mother-terracotta font-bold tracking-[0.5em] uppercase text-xs mb-8 block">Tarifs & Packs</span>
        <h1 class="text-6xl lg:text-9xl text-white font-display font-semibold mb-12 leading-[0.9]">
            La Liberté de <br/><span class="text-mother-terracotta italic underline decoration-white/10 underline-offset-16">Découvrir</span>.
        </h1>
        <p class="text-xl text-slate-300 max-w-2xl mx-auto leading-loose text-balance">
            Des parcours ciselés pour une immersion sans compromis. Du littoral lacustre aux savanes du Nord, le Bénin se dévoile à vous.
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="section-padding bg-slate-50 relative">
    <div class="container">
        <!-- Premium tabs -->
        <div class="flex justify-center mb-32 section-reveal">
            <div class="glass p-3 rounded-2xl flex flex-wrap justify-center gap-3 border-mother-terracotta/5 shadow-mother-terracotta/5">
                <button class="nav-item !px-10 !py-4 !rounded-xl !text-xs !font-bold !tracking-widest active" onclick="showPricing('paris')">VOYAGE DEPUIS PARIS</button>
                <button class="nav-item !px-10 !py-4 !rounded-xl !text-xs !font-bold !tracking-widest" onclick="showPricing('abidjan')">DEPUIS ABIDJAN</button>
                <button class="nav-item !px-10 !py-4 !rounded-xl !text-xs !font-bold !tracking-widest" onclick="showPricing('maroc')">DEPUIS MAROC</button>
                <button class="nav-item !px-10 !py-4 !rounded-xl !text-xs !font-bold !tracking-widest" onclick="showPricing('canada')">DEPUIS CANADA</button>
            </div>
        </div>

        <!-- Pricing Sections -->
        <div id="pricing-paris" class="pricing-section active">
            @include('partials.pack-table', ['days' => 7, 'prices' => ['1900€', '1750€', '1650€'], 'flights' => true])
            <div style="margin-top: 48px;"></div>
            @include('partials.pack-table', ['days' => 10, 'prices' => ['2200€', '1999€', '1950€'], 'flights' => true])
        </div>

        <div id="pricing-abidjan" class="pricing-section" style="display: none;">
            @include('partials.pack-table', ['days' => 7, 'prices' => ['1700€', '1500€', '1400€'], 'flights' => true])
            <div style="margin-top: 48px;"></div>
            @include('partials.pack-table', ['days' => 10, 'prices' => ['1900€', '1700€', '1600€'], 'flights' => true])
        </div>

        <div id="pricing-maroc" class="pricing-section" style="display: none;">
            @include('partials.pack-table', ['days' => 7, 'prices' => ['2000€', '1700€', '1550€'], 'flights' => true])
            <div style="margin-top: 48px;"></div>
            @include('partials.pack-table', ['days' => 10, 'prices' => ['2300€', '1999€', '1950€'], 'flights' => true])
        </div>

        <div id="pricing-canada" class="pricing-section" style="display: none;">
            @include('partials.pack-table', ['days' => 7, 'prices' => ['2700€', '2200€', '2000€'], 'flights' => true])
            <div style="margin-top: 48px;"></div>
            @include('partials.pack-table', ['days' => 10, 'prices' => ['3000€', '2500€', '2300€'], 'flights' => true])
        </div>

        <!-- Final Aesthetic CTA -->
        <div class="mt-32 text-center section-reveal">
            <div class="inline-block p-12 rounded-[3rem] bg-white shadow-[--shadow-float] max-w-2xl border border-slate-100">
                <div class="w-16 h-16 bg-mother-terracotta/10 text-mother-terracotta rounded-full flex items-center justify-center mx-auto mb-8 text-2xl">
                    <i class="fas fa-magic"></i>
                </div>
                <h3 class="text-2xl mb-6">Besoin d'un parcours sur mesure ?</h3>
                <p class="text-slate-500 mb-10 text-sm leading-relaxed">
                    Si aucun de ces packs ne correspond parfaitement à votre vision, nos experts créent votre itinéraire de A à Z selon vos envies.
                </p>
                <a href="/devis" class="btn btn-cta w-full py-5 rounded-2xl">Lancer mon Devis Personnalisé</a>
            </div>
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
