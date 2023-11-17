<?php

namespace App\View\Helpers;

class Helper
{
    public static function setCssClasses($cssClasses)
    {
        if (empty($cssClasses)) return "";

        return ' ' . $cssClasses;
    }

    public static function sanitizePhoneNumber($phoneNumber)
    {
        if (empty($phoneNumber)) return "";

        return str_replace(' ', '', $phoneNumber);
    }

    public static function getRouteHref($route, $locale)
    {
        if ($locale === config('app.fallback_locale')) {
            return route($route);
        } else {
            return route($route, $locale);
        }
    }
}
