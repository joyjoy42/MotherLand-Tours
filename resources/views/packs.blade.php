@extends('layouts.app')

@section('title', 'Nos Packs Voyage Bénin | MotherLand Tours')
@section('meta_description', 'Découvrez nos offres de circuits touristiques et pack voyage bénin. Choisissez entre nos explorations de 7 jours dans le Sud ou nos safaris de 10 jours dans le Nord.')
@section('meta_keywords', 'pack voyage benin, circuit benin, voyage au benin, tarif voyage bénin, tourisme benin, safari pendjari, tata somba, ganvié, ouidah')

@section('content')

{{-- Page Header --}}
<div class="bg-mother-cream border-b border-mother-sand py-10 text-center">
    <div class="container">
        <span class="text-mother-gold text-xs font-bold uppercase tracking-widest block mb-2">Tarifs &amp; Packs</span>
        <h1 class="text-3xl md:text-4xl font-display font-bold text-mother-espresso mb-2">La Liberté de Découvrir.</h1>
        <p class="text-mother-earth text-sm max-w-xl mx-auto">Des parcours ciselés pour une immersion sans compromis. Du littoral lacustre aux savanes du Nord, le Bénin se dévoile à vous.</p>
    </div>
</div>

<section class="bg-mother-beige py-12">
    <div class="container">

        {{-- Origin Tabs --}}
        <div class="flex justify-center mb-10 section-reveal">
            <div class="bg-white border border-mother-sand rounded-2xl p-2 flex flex-wrap justify-center gap-2">
                <button class="nav-item active text-xs font-bold tracking-wider uppercase px-6 py-2.5 rounded-xl" onclick="showPricing('paris', this)">Voyage depuis Paris</button>
                <button class="nav-item text-xs font-bold tracking-wider uppercase px-6 py-2.5 rounded-xl" onclick="showPricing('abidjan', this)">Depuis Abidjan</button>
                <button class="nav-item text-xs font-bold tracking-wider uppercase px-6 py-2.5 rounded-xl" onclick="showPricing('maroc', this)">Depuis Maroc</button>
                <button class="nav-item text-xs font-bold tracking-wider uppercase px-6 py-2.5 rounded-xl" onclick="showPricing('canada', this)">Depuis Canada</button>
            </div>
        </div>

        {{-- Pricing Grids --}}
        <div id="pricing-paris"  class="pricing-section">
            @include('partials.pack-table', ['days' => 7,  'prices' => ['1900€', '1750€', '1650€'], 'flights' => true])
            <div class="mt-8"></div>
            @include('partials.pack-table', ['days' => 10, 'prices' => ['2200€', '1999€', '1950€'], 'flights' => true])
        </div>
        <div id="pricing-abidjan" class="pricing-section" style="display:none">
            @include('partials.pack-table', ['days' => 7,  'prices' => ['1700€', '1500€', '1400€'], 'flights' => true])
            <div class="mt-8"></div>
            @include('partials.pack-table', ['days' => 10, 'prices' => ['1900€', '1700€', '1600€'], 'flights' => true])
        </div>
        <div id="pricing-maroc"   class="pricing-section" style="display:none">
            @include('partials.pack-table', ['days' => 7,  'prices' => ['2000€', '1700€', '1550€'], 'flights' => true])
            <div class="mt-8"></div>
            @include('partials.pack-table', ['days' => 10, 'prices' => ['2300€', '1999€', '1950€'], 'flights' => true])
        </div>
        <div id="pricing-canada"  class="pricing-section" style="display:none">
            @include('partials.pack-table', ['days' => 7,  'prices' => ['2700€', '2200€', '2000€'], 'flights' => true])
            <div class="mt-8"></div>
            @include('partials.pack-table', ['days' => 10, 'prices' => ['3000€', '2500€', '2300€'], 'flights' => true])
        </div>

        {{-- Custom CTA --}}
        <div class="mt-10 section-reveal">
            <div class="bg-white border border-mother-sand rounded-2xl p-8 md:p-10 max-w-2xl mx-auto text-center">
                <div class="w-14 h-14 bg-mother-gold/10 text-mother-gold rounded-full flex items-center justify-center mx-auto mb-5 text-xl">
                    <i class="fas fa-wand-magic-sparkles"></i>
                </div>
                <h3 class="font-display font-bold text-mother-espresso text-xl mb-3">Besoin d'un parcours sur mesure ?</h3>
                <p class="text-mother-earth text-sm mb-7 leading-relaxed">Si aucun de ces packs ne correspond parfaitement à votre vision, nos experts créent votre itinéraire de A à Z selon vos envies.</p>
                <a href="/devis" class="btn btn-cta !px-10">Lancer mon Devis Personnalisé</a>
            </div>
        </div>
    </div>
</section>

<style>
    .nav-item.active { background: var(--color-mother-espresso); color: white; }
</style>

<script>
    function showPricing(country, btn) {
        document.querySelectorAll('.pricing-section').forEach(s => s.style.display = 'none');
        document.querySelectorAll('.nav-item').forEach(b => { if (b.tagName === 'BUTTON') b.classList.remove('active'); });
        document.getElementById('pricing-' + country).style.display = 'block';
        btn.classList.add('active');
    }
</script>
@endsection
