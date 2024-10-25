<?php

if (!function_exists('getQueryLanguages')) {
    function getQueryLanguages($query) {
        return $query->translations->pluck('locale')->toArray();
    }
}

if (!function_exists('isAllTranslated')) {
    function isAllTranslated($query, $requiredLanguages = ['az', 'en', 'ru']) {
        $queryLanguages = getQueryLanguages($query);
        foreach ($requiredLanguages as $lang) {
            if (!in_array($lang, $queryLanguages)) {
                return false;
            }
        }
        return true;
    }
}
