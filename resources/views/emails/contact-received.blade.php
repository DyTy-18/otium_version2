<x-mail::message>
# Nuevo mensaje de contacto

Has recibido un nuevo mensaje desde el formulario de **OTIUM Consultores**.

| | |
|---|---|
| **Nombre** | {{ $contact->name }} |
| **Correo** | {{ $contact->email }} |
| **Teléfono** | {{ $contact->phone ?? '—' }} |
| **Asunto** | {{ $contact->subject }} |
| **Recibido** | {{ $contact->created_at->format('d/m/Y H:i') }} |

---

**Mensaje:**

{{ $contact->message }}

---

<x-mail::button :url="config('app.url') . '/admin/contacts'" color="red">
Ver en el panel admin
</x-mail::button>

@if($contact->phone)
@php
    $waPhone = preg_replace('/\D/', '', $contact->phone);
    $waText  = urlencode("Hola {$contact->name}, soy del equipo de OTIUM Consultores. Me comunico con usted en respuesta a su mensaje sobre: {$contact->subject}");
@endphp

<x-mail::button :url="'https://wa.me/' . $waPhone . '?text=' . $waText">
Responder por WhatsApp
</x-mail::button>
@endif

Gracias,<br>
Sistema OTIUM Consultores
</x-mail::message>
