{{-- Tarjeta de servicio (Brief Web Otium 2026): fondo plano, badge durazno + ícono rojo, etiqueta "Nuevo" opcional. --}}
@props(['service', 'label' => null, 'delay' => 0])

<a href="{{ route($service['route']) }}"
    {{ $attributes->merge(['class' => 'group flex flex-col p-7 bg-white border border-line hover:border-mid transition-colors']) }}
    data-aos="fade-up" data-aos-delay="{{ $delay }}">
    <div class="flex items-center justify-between">
        <div class="w-14 h-14 grid place-items-center rounded-lg bg-brand-light text-primary">
            <x-service-icon :name="$service['icon']" />
        </div>
        @if (! empty($service['new']))
            <span class="px-2 py-1 rounded bg-primary text-white text-[11px] font-bold tracking-widest uppercase">{{ __('Nuevo') }}</span>
        @endif
    </div>
    <h3 class="mt-4.5 mb-2 text-[19px] font-bold leading-[1.3] text-black">{{ __($service['name']) }}</h3>
    <p class="flex-1 text-[14.5px] text-muted">{{ __($service['desc']) }}</p>
    <span class="inline-flex items-center gap-1.5 mt-4.5 text-sm font-semibold text-primary">
        {{ $label ?? __('Ver servicio') }}
        <svg class="w-4 h-4 transition-transform group-hover:translate-x-0.75" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
    </span>
</a>
