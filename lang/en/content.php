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
        '404' => [
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
                    'links' => [
                        'left' => [
                            'label' => 'Back to home',
                        ],
                        'right' => [
                            'label' => 'Back to prev page',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
