<x-mail::panel>
    <p>Demande de contact de : {{ $firstname }} {{ $name }}<p>
    <p>Coordonnées : {{ $email }} {{ $phone }}</p>
</x-mail::panel>
<x-mail::message>
    {{ $message }}
</x-mail::message>
