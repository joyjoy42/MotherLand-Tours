<x-mail::message>
# Nouvelle Demande de Réservation

Une nouvelle demande d'expédition a été soumise sur le site.

**Participant principal :** {{ $data['first_name'] }} {{ $data['last_name'] }}
**Email :** {{ $data['email'] }}
**Téléphone :** {{ $data['phone'] }}

**Détails de l'expédition :**
- **Type d'expédition :** {{ $data['package'] }}
- **Date de départ souhaitée :** {{ $data['date'] }}
- **Nombre de participants :** {{ $data['participants'] }}

**Demandes spécifiques :**
{{ $data['requests'] ?? 'Aucune demande spécifique.' }}

Veuillez recontacter ce client rapidement pour confirmer les détails et finaliser la réservation.

<x-mail::button :url="config('app.url')">
Retour au site
</x-mail::button>

Cordialement,<br>
L'équipe {{ config('app.name') }}
</x-mail::message>
