@extends('layouts.app')

@section('content')
<!-- Premium Header -->
<section class="relative min-h-[60vh] flex items-center justify-center overflow-hidden bg-mother-earth text-center">
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/assets/porte_du_non_retour_night_new.png') }}" class="w-full h-full object-cover opacity-10" alt="About Hero">
        <div class="absolute inset-0 bg-mother-earth/70"></div>
    </div>
    
    <div class="container relative z-10 px-6 animate-fade-in py-32">
        <span class="text-mother-terracotta font-bold tracking-[0.5em] uppercase text-xs mb-8 block">Notre Essence</span>
        <h1 class="text-6xl lg:text-9xl text-white font-display font-semibold mb-12 leading-[0.9]">
            L'Âme de <br/><span class="text-mother-terracotta italic underline decoration-white/10 underline-offset-16">Motherland</span> Tours.
        </h1>
        <p class="text-xl text-slate-300 max-w-2xl mx-auto leading-loose text-balance">
            Plus qu'une agence, une passerelle émotionnelle vers les racines oubliées et les trésors cachés du Bénin.
        </p>
    </div>
</section>

<section class="section-padding bg-white relative">
    <div class="container">
        <!-- Mission Section -->
        <div class="grid lg:grid-cols-2 gap-32 items-center mb-56 section-reveal py-16">
            <div>
                <span class="text-mother-terracotta font-bold text-xs uppercase tracking-[0.2em] mb-8 block">Notre Genèse</span>
                <h2 class="text-5xl lg:text-6xl font-display text-mother-earth mb-12 leading-tight">Une mission de <span class="italic text-mother-terracotta">Reconnexion</span> culturelle.</h2>
                <div class="space-y-8 text-slate-500 text-xl leading-loose text-balance">
                    <p>Motherland Tours est née d'un désir profond : briser les murs de l'oubli et inviter le monde à découvrir le Bénin dans sa vérité la plus pure. Nous croyons que le voyage est le plus puissant vecteur de compréhension mutuelle.</p>
                    <p>Nous créons des expériences qui vont au-delà du simple tourisme. C'est une immersion dans l'histoire des puissants royaumes fon et yoruba, un dialogue spirituel avec les traditions vaudou, et une célébration vibrante de la vie contemporaine béninoise, entre art moderne et marchés colorés.</p>
                </div>
            </div>
            <div class="relative group">
                <div class="absolute -inset-8 bg-mother-terracotta/5 rounded-[4rem] -rotate-6 group-hover:rotate-0 transition-premium duration-1000"></div>
                <img src="{{ asset('images/assets/abomey.png') }}" class="relative z-10 w-full h-[700px] object-cover rounded-[3.5rem] shadow-2xl shadow-mother-terracotta/10" alt="Vue rapprochée des détails architecturaux des palais royaux d'Abomey">
            </div>
        </div>

        <!-- Values -->
        <div class="text-center mb-32 section-reveal">
            <h2 class="text-5xl font-display text-mother-earth leading-tight">L'Éthique au cœur <br/>du <span class="text-mother-terracotta italic">Voyage.</span></h2>
        </div>

        <div class="grid lg:grid-cols-4 gap-10 mb-56 section-reveal">
            <div class="premium-card text-center group border-none shadow-mother-terracotta/5">
                <div class="w-20 h-20 bg-mother-terracotta/5 text-mother-terracotta rounded-2xl flex items-center justify-center mx-auto mb-10 text-3xl group-hover:bg-mother-terracotta group-hover:text-white transition-premium">
                    <i class="fas fa-heart"></i>
                </div>
                <h4 class="text-xl mb-6 text-mother-earth">Authenticité</h4>
                <p class="text-slate-500 text-sm leading-loose">Pas de mise en scène. Nous vous emmenons là où le Bénin respire vraiment.</p>
            </div>
            <div class="premium-card text-center group border-none shadow-mother-terracotta/5">
                <div class="w-20 h-20 bg-mother-terracotta/5 text-mother-terracotta rounded-2xl flex items-center justify-center mx-auto mb-10 text-3xl group-hover:bg-mother-terracotta group-hover:text-white transition-premium">
                    <i class="fas fa-shield-check"></i>
                </div>
                <h4 class="text-xl mb-6 text-mother-earth">Excellence</h4>
                <p class="text-slate-500 text-sm leading-loose">Un standard de confort et de sécurité exigeant pour chaque voyageur.</p>
            </div>
            <div class="premium-card text-center group border-none shadow-mother-terracotta/5">
                <div class="w-20 h-20 bg-mother-terracotta/5 text-mother-terracotta rounded-2xl flex items-center justify-center mx-auto mb-10 text-3xl group-hover:bg-mother-terracotta group-hover:text-white transition-premium">
                    <i class="fas fa-leaf"></i>
                </div>
                <h4 class="text-xl mb-6 text-mother-earth">Impact Local</h4>
                <p class="text-slate-500 text-sm leading-loose">Chaque voyage soutient directement l'économie et les artisans béninois.</p>
            </div>
            <div class="premium-card text-center group border-none shadow-mother-terracotta/5">
                <div class="w-20 h-20 bg-mother-terracotta/5 text-mother-terracotta rounded-2xl flex items-center justify-center mx-auto mb-10 text-3xl group-hover:bg-mother-terracotta group-hover:text-white transition-premium">
                    <i class="fas fa-gem"></i>
                </div>
                <h4 class="text-xl mb-6 text-mother-earth">Héritage</h4>
                <p class="text-slate-500 text-sm leading-loose">Préserver, valoriser et transmettre la richesse de l'histoire africaine pour les générations futures.</p>
            </div>
        </div>

        <!-- Cultural Heritage Deep Dive -->
        <div class="grid lg:grid-cols-2 gap-24 items-center mb-56 section-reveal">
             <div class="order-2 lg:order-1">
                <img src="{{ asset('images/assets/ganvie.png') }}" class="w-full h-[600px] object-cover rounded-[3.5rem] shadow-2xl" alt="Vue d'ensemble du village traditionnel de Ganvié sur l'eau">
            </div>
            <div class="order-1 lg:order-2">
                <span class="text-mother-teal font-bold text-xs uppercase tracking-[0.2em] mb-8 block">Le Savoir-Faire</span>
                <h2 class="text-5xl font-display text-mother-earth mb-12 leading-tight">Un Patrimoine <br/><span class="italic text-mother-teal">Vivant.</span></h2>
                <div class="space-y-8 text-slate-500 text-lg leading-loose">
                    <p>Du sud lagunaire aux montagnes du nord, le Bénin est une mosaïque de peuples et de traditions. Nous vous faisons découvrir l'artisanat ancestral : la forge d'Abomey, les tissages de Porto-Novo et les teintures naturelles du nord.</p>
                    <p>Notre approche inclut des rencontres privilégiées avec les gardiens des traditions, permettant de comprendre la philosophie profonde qui anime le quotidien des Béninois.</p>
                </div>
            </div>
        </div>

        <!-- Vision -->
        <div class="bg-mother-earth p-16 lg:p-32 rounded-[5rem] relative overflow-hidden section-reveal text-center mb-56 shadow-2xl shadow-mother-terracotta/10">
            
            <div class="relative z-10 max-w-4xl mx-auto">
                <span class="text-mother-terracotta font-bold tracking-[0.4em] text-xs uppercase mb-10 block">Horizon 2030</span>
                <h2 class="text-5xl lg:text-7xl text-white font-display mb-12 leading-tight">Le Bénin ne se visite pas, <br/><span class="italic text-mother-terracotta">il se vit.</span></h2>
                <div class="space-y-10 text-slate-300 text-2xl leading-loose text-balance px-4 lg:px-20">
                    <p>Nous aspirons à devenir la référence absolue du tourisme culturel conscient en Afrique de l'Ouest. Notre vision est celle d'un monde où le voyage transforme autant le voyageur que la terre qui l'accueille.</p>
                </div>
            </div>
        </div>

        <!-- Team -->
        <div class="text-center mb-24 section-reveal">
            <span class="text-mother-terracotta font-bold text-xs uppercase tracking-widest mb-6 block">Nos Experts</span>
            <h2 class="text-5xl font-display text-mother-earth">Une Équipe dévouée</h2>
        </div>
        
        <div class="premium-card max-w-5xl mx-auto mb-32 section-reveal border-none shadow-mother-terracotta/5 bg-white/50 backdrop-blur-sm">
            <p class="text-xl text-slate-600 leading-loose text-balance text-center">Chaque membre de Motherland Tours est un ambassadeur de la culture béninoise. Nos guides sont tous certifiés et natifs du pays, garantissant une connaissance ésotérique des lieux et des coutumes. <br><br> De la logistique au support terrain, nous sommes là pour transformer votre projet de voyage en un chef-d'œuvre de souvenirs.</p>
        </div>
    </div>
</section>
@endsection
