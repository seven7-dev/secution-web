<?php

namespace App\View\Helpers;

class Helper
{
    public function setCssClasses($cssClasses)
    {
        if(empty($cssClasses)) return "";

        return ' ' . $cssClasses;
    }
}