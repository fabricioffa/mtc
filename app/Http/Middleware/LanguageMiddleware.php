<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LanguageMiddleware
{
    public $availableLocales = ['pt', 'en', 'es'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    private function formatLocales(array $locales): array
    {
        $formattedLocales= [];

        foreach ($locales as $locale) {
            $formattedLocales[] = substr_replace($locale, '', 2);
        }

        return $formattedLocales;
    }

    private function getAvaiableLocale (array $locales): string
    {
        foreach ($locales as $locale) {
            if (in_array($locale, $this->availableLocales, true)) return $locale;
        }

        return config('app.fallback_locale');
    }

    public function handle(Request $request, Closure $next)
    {
        $userLocales = $this->formatLocales($request->getLanguages());

        if ($userLocales[0] === App::currentLocale()) return $next($request);

        App::setLocale($this->getAvaiableLocale($userLocales));

        return  $next($request);
    }
}
