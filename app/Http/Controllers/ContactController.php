<?php

namespace App\Http\Controllers;

use App\Mail\ContactReceived;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name'         => ['required', 'string', 'max:100'],
            'empresa'      => ['required', 'string', 'max:150'],
            'cargo'        => ['required', 'string', 'max:100'],
            'ciudad'       => ['required', 'string', 'max:100'],
            'whatsapp'     => ['required', 'string', 'max:30'],
            'email'        => ['required', 'email', 'max:255'],
            'empleados'    => ['required', 'string', 'max:20'],
            'preocupacion' => ['required', 'string', 'max:100'],
        ]);

        $contact = Contact::create($validated);

        Mail::to(config('mail.admin_email'))->send(new ContactReceived($contact));

        return redirect()
            ->route('contact')
            ->with('success', 'Su mensaje ha sido enviado exitosamente. Nos comunicaremos con usted a la brevedad posible.');
    }
}
