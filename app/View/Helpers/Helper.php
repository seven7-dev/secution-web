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

    public static function groupVideosByFileExtension($string, $delimiter = ',')
    {
        if (empty($string)) return null;

        $videos = [];

        foreach (explode($delimiter, $string) as $video) {
            $fileExtension = pathinfo($video, PATHINFO_EXTENSION);
            $videos[$fileExtension] = $video;
        }

        return $videos;
    }
}
