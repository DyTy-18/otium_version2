{{--
    Íconos de servicios — set oficial del Paquete Diseñador Web Otium 2026 (02_Iconos_SVG).
    24×24, solo trazo de 1.5 px, terminaciones redondeadas. El color se toma de currentColor.
--}}
@props(['name'])

@php
    $paths = [
        'outsourcing-contable' => '<path d="M12 7c-1.5-1.3-3.5-2-6-2v12c2.5 0 4.5.7 6 2 1.5-1.3 3.5-2 6-2V5c-2.5 0-4.5.7-6 2Z"/><path d="M12 7v12"/>',
        'gestion-tributaria'   => '<path d="M6 3h9l3 3v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Z"/><path d="M15 3v3h3"/><circle cx="10" cy="13" r="1.4"/><circle cx="14" cy="17" r="1.4"/><path d="M9.5 17.5 14.5 12.5"/>',
        'outsourcing-laboral'  => '<circle cx="9" cy="8" r="3"/><path d="M3.5 19c0-3 2.5-5 5.5-5s5.5 2 5.5 5"/><circle cx="17" cy="9" r="2.3"/><path d="M14.8 12.2c2.4.3 4.2 2.1 4.2 4.8"/>',
        'auditoria'            => '<path d="M6 3h8l4 4v13a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Z"/><path d="M8 10h5M8 13h3"/><circle cx="15.2" cy="15.2" r="3"/><path d="M17.4 17.4 20 20"/>',
        'consultoria'          => '<path d="M3 17 9 11l4 4 8-8"/><path d="M16 7h5v5"/>',
        'constitucion'         => '<path d="M3 21h18"/><path d="M4 21V10l8-6 8 6v11"/><path d="M9 21v-6h6v6"/><path d="M4 10h16"/>',
        'sharepoint'           => '<path d="M3.5 7.3c0-.9.7-1.6 1.6-1.6h4l1.7 1.9h8c.9 0 1.6.7 1.6 1.6v7.8c0 .9-.7 1.6-1.6 1.6H5.1c-.9 0-1.6-.7-1.6-1.6Z"/><path d="M12 16V10"/><path d="M9.3 12.3 12 9.6l2.7 2.7"/>',
        'revaluo'              => '<path d="M12 3 20 7.5v9L12 21 4 16.5v-9Z"/><path d="M12 12v9"/><path d="M4 7.5 12 12l8-4.5"/>',
        'quickbooks'           => '<rect x="4" y="5" width="16" height="11" rx="1"/><path d="M2.5 19h19"/><path d="M8 12.5l2.5-2.5 2 2 3.5-3.5"/>',
        'ubicacion'            => '<path d="M12 21s7-6.5 7-11.5a7 7 0 0 0-14 0C5 14.5 12 21 12 21Z"/><circle cx="12" cy="9.5" r="2.3"/>',
    ];
@endphp
<svg {{ $attributes->merge(['class' => 'w-6 h-6']) }} viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">{!! $paths[$name] ?? '' !!}</svg>
