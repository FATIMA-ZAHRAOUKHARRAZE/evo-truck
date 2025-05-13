<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use GoogleTranslate;

class TranslationService
{
    public function translate($text, $locale, $ttl = 86400)
    {
        if (empty($text)) {
            return '';
        }

        $cacheKey = "translation_{$locale}_" . md5($text);

        try {
            return Cache::remember($cacheKey, $ttl, function () use ($text, $locale) {
                // Utilisation de la nouvelle méthode de Google Translate
                $translator = new GoogleTranslate();
                $translator->setSource('auto');
                $translator->setTarget($locale);
                return $translator->translate($text);
            });
        } catch (\Exception $e) {
            Log::error("Erreur de traduction: " . $e->getMessage());
            return $text;
        }
    }
}