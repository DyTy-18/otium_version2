<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Stevebauman\Location\Facades\Location;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    private const SUPPORTED = ['es', 'en', 'pt'];

    private const PORTUGUESE_COUNTRIES = [
        'BR', 'PT', 'AO', 'MZ', 'CV', 'GW', 'ST', 'TL', 'MO',
    ];

    private const SPANISH_COUNTRIES = [
        'BO', 'ES', 'MX', 'AR', 'CO', 'PE', 'CL', 'VE', 'EC',
        'GT', 'CU', 'HN', 'PY', 'SV', 'NI', 'CR', 'PA', 'UY',
        'PR', 'DO', 'GQ',
    ];

    public function handle(Request $request, Closure $next): Response
    {
        if (! session()->has('locale')) {
            session(['locale' => $this->detectLocale($request)]);
        }

        $locale = session('locale');

        if (! in_array($locale, self::SUPPORTED)) {
            $locale = 'es';
        }

        App::setLocale($locale);

        return $next($request);
    }

    private function detectLocale(Request $request): string
    {
        try {
            $position = Location::get($request->ip());

            if ($position && $position->countryCode) {
                $country = strtoupper($position->countryCode);

                if (in_array($country, self::PORTUGUESE_COUNTRIES)) {
                    return 'pt';
                }

                if (in_array($country, self::SPANISH_COUNTRIES)) {
                    return 'es';
                }

                return 'en';
            }
        } catch (\Throwable) {
            // Geolocation failed — fall back to default
        }

        return config('app.locale', 'es');
    }
}
