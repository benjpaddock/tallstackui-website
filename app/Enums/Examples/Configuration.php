<?php

namespace App\Enums\Examples;

class Configuration
{
    public const COMMAND = <<<'HTML'
    php artisan vendor:publish --tag=tallstackui.config
    HTML;

    public const CONTENT = <<<'HTML'
    // ...

    /*
    |--------------------------------------------------------------------------
    | Components Settings
    |--------------------------------------------------------------------------
    |
    | General components settings.
    */
    'personalizations' => [
        'dialog' => [
            'z-index' => 'z-50',
            'blur' => false,
            'uncloseable' => false,
        ],
        'modal' => [
            'z-index' => 'z-50',
            'blur' => false,
            'uncloseable' => false,
            /* Alloweds: sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl */
            'size' => '2xl',
        ],
        'toast' => [
            'z-index' => 'z-50',
            /* Alloweds: top-right, top-left, bottom-right, bottom-left */
            'position' => 'top-right',
        ],
    ],

    // ...
    HTML;
}
