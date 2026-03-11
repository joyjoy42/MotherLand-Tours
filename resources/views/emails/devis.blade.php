<x-mail::message>
# Nouvelle Demande de Devis sur Mesure

Un explorateur souhaite configurer un voyage personnalisé.

**Informations Client :**
- **Nom Complet :** {{ $data['first_name'] }} {{ $data['last_name'] }}
- **Email :** {{ $data['email'] }}
- **Téléphone :** {{ $data['phone'] }}

**Préférences du Voyage :**
- **Durée envisagée :** {{ $data['duration'] }}
- **Style de voyage prioritaire :** {{ $data['style'] }}
- **Période de départ :** {{ $data['period'] }}
- **Nombre de voyageurs :** {{ $data['travelers'] }}

**Détails et Attentes :**
{{ $data['details'] }}

Veuillez préparer une proposition personnalisée et revenir vers le client sous 48h.

<x-mail::button :url="config('app.url')">
Retour au site
</x-mail::button>

Cordialement,<br>
L'équipe {{ config('app.name') }}
</x-mail::message>
