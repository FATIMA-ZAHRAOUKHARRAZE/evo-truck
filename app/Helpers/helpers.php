<?php

if (!function_exists('translate')) {
    function translate($text, $locale = null)
    {
        if (!$locale) {
            $locale = app()->getLocale();
        }

        try {
            return app('translation')->translate($text, $locale);
        } catch (\Exception $e) {
            \Log::error("Translation helper error: " . $e->getMessage());
            return $text;
        }
    }
}