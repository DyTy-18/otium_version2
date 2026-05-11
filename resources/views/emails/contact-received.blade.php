<x-mail::message>
# Nuevo diagnóstico gratuito

Has recibido una solicitud desde el formulario de **OTIUM Consultores**.

| | |
|---|---|
| **Nombre** | {{ $contact->name }} |
| **Empresa** | {{ $contact->empresa }} |
| **Cargo** | {{ $contact->cargo }} |
| **Ciudad** | {{ $contact->ciudad }} |
| **WhatsApp** | {{ $contact->whatsapp }} |
| **Correo** | {{ $contact->email }} |
| **Nº Empleados** | {{ $contact->empleados }} |
| **Preocupación** | {{ $contact->preocupacion }} |
| **Recibido** | {{ $contact->created_at->format('d/m/Y H:i') }} |

---

<x-mail::button :url="config('app.url') . '/admin/contacts'" color="red">
Ver en el panel admin
</x-mail::button>

@if($contact->whatsapp)
@php
    $waPhone = preg_replace('/\D/', '', $contact->whatsapp);
    $waText  = urlencode("Hola {$contact->name}, soy del equipo de OTIUM Consultores. Me comunico con usted en respuesta a su solicitud de diagnóstico.");
@endphp

<x-mail::button :url="'https://wa.me/' . $waPhone . '?text=' . $waText">
Responder por WhatsApp
</x-mail::button>
@endif

Gracias,<br>
Sistema OTIUM Consultores
</x-mail::message>
