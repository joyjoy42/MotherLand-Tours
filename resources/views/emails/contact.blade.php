<x-mail::message>
# Nouvelle Demande de Contact

Vous avez reçu un nouveau message depuis le site Motherland Tours.

**Nom Complet :** {{ $data['first_name'] }} {{ $data['last_name'] }}
**Email :** {{ $data['email'] }}
**Téléphone :** {{ $data['phone'] ?? 'Non renseigné' }}
**Sujet :** {{ $data['subject'] }}

**Message :**
{{ $data['message'] }}

<x-mail::button :url="config('app.url')">
Retour au site
</x-mail::button>

Cordialement,<br>
L'équipe {{ config('app.name') }}
</x-mail::message>
