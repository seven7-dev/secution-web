<?php

namespace App\View\Helpers;

use Illuminate\Support\Facades\Lang;

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

    /**
     * The locale must be optional because, for sitemap generation,
     * it needs to be dynamically provided.
     */
    public static function getRouteHref($route, $locale = null)
    {
        if (empty($locale)) $locale = app()->getLocale();

        if ($locale === config('app.fallback_locale')) {
            return route($route);
        } else {
            return route($route, $locale);
        }
    }

    public static function getPageTitleByRouteName($routeName, $withAppName = false)
    {
        if (Lang::has('content.pages.' . $routeName . '.title')) {
            if ($withAppName) {
                return __('content.pages.' . $routeName . '.title') . ' – ' . env('APP_NAME');
            } else {
                return __('content.pages.' . $routeName . '.title');
            }
        } else {
            return env('APP_NAME');
        }
    }
}
