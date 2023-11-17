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
}
