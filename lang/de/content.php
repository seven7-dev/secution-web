<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Content Lines
    |--------------------------------------------------------------------------
    */

    'pages' => [
        'home' => [
            'elements' => [
                'video_cta' => [
                    'headline' => 'Schöner HTML5 Videohintergrund',
                    'subheadline' => 'Videohintergrund',
                    'videos' => [
                        'mp4' => 'videos/video.mp4',
                        'ogv' => 'videos/video.ogv',
                        'webm' => 'videos/video.webm',
                    ],
                    'link' => [
                        'url' => 'home',
                        'label' => 'Jetzt kaufen',
                        'external' => false,
                    ],
                ],
            ],
        ],
        '404' => [
            'elements' => [
                'not_found' => [
                    'headline' => 'Ooopps :(',
                    'subheadline' => 'Die gesuchte Seite konnte nicht gefunden werden.',
                    'text' => 'Die gesuchte Seite wurde möglicherweise entfernt, ihr Name wurde geändert oder sie ist vorübergehend nicht verfügbar.',
                    'background' => [
                        'text' => [
                            'headline' => '404',
                            'subheadline' => 'Fehler',
                        ],
                    ],
                    'link' => [
                        'url' => 'home',
                        'label' => 'Zurück zur Startseite'
                    ],
                ],
            ],
        ],
    ],
];
