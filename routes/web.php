<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactSubmitted;
use App\Mail\ReservationSubmitted;
use App\Mail\DevisSubmitted;

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

Route::get('/legal', function () {
    return view('legal');
});

Route::get('/privacy', function () {
    return view('privacy');
});

// Form Handlers
Route::post('/contact', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    // Format data for the mailable
    $mailData = [
        'first_name' => '',
        'last_name' => $data['name'],
        'email' => $data['email'],
        'subject' => $data['subject'],
        'message' => $data['message'],
        'phone' => null, // Phone is not in the contact form
    ];

    Mail::to('motherlandtours9@gmail.com')->send(new ContactSubmitted($mailData));

    return back()->with('success', 'Votre message a été envoyé avec succès ! Notre équipe vous contactera très prochainement.');
});

Route::post('/reserver', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'firstname' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:50',
        'departure' => 'required|string|max:255',
        'date' => 'required|date',
        'duration' => 'required|string|max:50',
        'people' => 'required|integer|min:1',
        'message' => 'nullable|string',
    ]);

    $mailData = [
        'first_name' => $data['firstname'],
        'last_name' => $data['name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'package' => $data['duration'] === '7' ? 'Pack 7 Jours Standard' : ($data['duration'] === '10' ? 'Pack 10 Jours Signature' : 'Itinéraire sur mesure'),
        'date' => $data['date'],
        'participants' => $data['people'],
        'requests' => $data['message'] ?? 'Aucune demande spécifique.',
    ];

    Mail::to('motherlandtours9@gmail.com')->send(new ReservationSubmitted($mailData));

    return back()->with('success', 'Votre demande de réservation a été reçue ! Nous vous recontacterons sous 24h pour confirmer les détails.');
});

Route::post('/devis', function (Request $request) {
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'firstname' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:50',
        'departure' => 'required|string|max:255',
        'start' => 'nullable|date',
        'end' => 'nullable|date',
        'people' => 'required|integer|min:1',
        'budget' => 'nullable|string|max:255',
        'needs' => 'required|string',
    ]);

    $mailData = [
        'first_name' => $data['firstname'],
        'last_name' => $data['name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'duration' => ($data['start'] && $data['end']) ? $data['start'] . ' au ' . $data['end'] : 'Non définie',
        'style' => 'Sur-mesure',
        'period' => $data['start'] ?? 'Non définie',
        'travelers' => $data['people'],
        'details' => "Départ de: " . $data['departure'] . "\nBudget: " . ($data['budget'] ?? 'Non spécifié') . "\n\nAttentes:\n" . $data['needs'],
    ];

    Mail::to('motherlandtours9@gmail.com')->send(new DevisSubmitted($mailData));

    return back()->with('success', 'Votre demande de devis personnalisé a été transmise ! Un de nos conseillers reviendra vers vous avec une proposition sous 48h.');
});
