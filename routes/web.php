<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/packs', function () {
    return view('packs');
});

Route::get('/itineraire', function () {
    return view('itineraire');
});

Route::get('/reserver', function () {
    return view('reserver');
});

Route::get('/a-propos', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/devis', function () {
    return view('devis');
});

// Form Handlers
Route::post('/contact', function () {
    return back()->with('success', 'Votre message a été envoyé avec succès ! Notre équipe vous contactera très prochainement.');
});

Route::post('/reserver', function () {
    return back()->with('success', 'Votre demande de réservation a été reçue ! Nous vous recontacterons sous 24h pour confirmer les détails.');
});

Route::post('/devis', function () {
    return back()->with('success', 'Votre demande de devis personnalisé a été transmise ! Un de nos conseillers reviendra vers vous avec une proposition sous 48h.');
});
