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
                    'headline' => 'Beautiful HTML5 Video background',
                    'subheadline' => 'Video Background',
                    'videos' => [
                        'mp4' => 'videos/video.mp4',
                        'ogv' => 'videos/video.ogv',
                        'webm' => 'videos/video.webm',
                    ],
                    'link' => [
                        'url' => 'home',
                        'label' => 'Purchase Now',
                        'external' => false,
                    ],
                ],
            ],
        ],
        'about-us' => [
            'title' => 'About us',
            'breadcrumb' => [
                'description' => 'We know the secret of your success'
            ],
        ],
        'services' => [
            'title' => 'Services',
            'breadcrumb' => [
                'description' => 'We know the secret of your success'
            ],
        ],
        'testimonials' => [
            'title' => 'Testimonials',
            'breadcrumb' => [
                'description' => 'We know the secret of your success'
            ],
        ],
        'contact' => [
            'title' => 'Contact',
            'breadcrumb' => [
                'description' => 'We know the secret of your success'
            ],
        ],
        'imprint' => [
            'title' => 'Imprint',
            'breadcrumb' => [
                'description' => 'We know the secret of your success'
            ],
        ],
        'data-privacy' => [
            'title' => 'Data privacy',
            'breadcrumb' => [
                'description' => 'We know the secret of your success'
            ],
        ],
        '404' => [
            'title' => '404',
            'breadcrumb' => [
                'description' => 'We know the secret of your success'
            ],
            'elements' => [
                'not_found' => [
                    'headline' => 'Ooopps :(',
                    'subheadline' => "The Page you were looking for, couldn't be found.",
                    'text' => 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.',
                    'background' => [
                        'text' => [
                            'headline' => '404',
                            'subheadline' => 'Error',
                        ],
                    ],
                    'link' => [
                        'url' => 'home',
                        'label' => 'Back to Home'
                    ],
                ],
            ],
        ],
    ],
];
