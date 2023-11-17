<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Content Lines
    |--------------------------------------------------------------------------
    */

    'pages' => [
        'home' => [
            'title' => 'Home',
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
        'about-us' => [
            'title' => 'Über uns',
            'breadcrumb' => [
                'description' => 'Wir kennen das Geheimnis Ihres Erfolgs'
            ],
        ],
        'services' => [
            'title' => 'Services',
            'breadcrumb' => [
                'description' => 'Wir kennen das Geheimnis Ihres Erfolgs'
            ],
        ],
        'testimonials' => [
            'title' => 'Referenzen',
            'breadcrumb' => [
                'description' => 'Wir kennen das Geheimnis Ihres Erfolgs'
            ],
        ],
        'contact' => [
            'title' => 'Kontakt',
            'breadcrumb' => [
                'description' => 'Wir kennen das Geheimnis Ihres Erfolgs'
            ],
        ],
        'imprint' => [
            'title' => 'Impressum',
            'breadcrumb' => [
                'description' => 'Wir kennen das Geheimnis Ihres Erfolgs'
            ],
        ],
        'data-privacy' => [
            'title' => 'Datenschutzerklärung',
            'breadcrumb' => [
                'description' => 'Wir kennen das Geheimnis Ihres Erfolgs'
            ],
        ],
        '404' => [
            'title' => '404',
            'breadcrumb' => [
                'description' => 'Wir kennen das Geheimnis Ihres Erfolgs'
            ],
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
