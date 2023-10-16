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
        'input' => [
            /* Input, Textarea & Password */
            'square' => false,
            /* Input & Password Only */
            'round' => false,
        ],
        'tab' => [
            'square' => false,
        ],
        'dialog' => [
            'z-index' => 'z-50',
            'blur' => false,
            'uncloseable' => false,
            'square' => false,
        ],
        'toast' => [
            'z-index' => 'z-50',
            /* Alloweds: "top-right", "top-left", "bottom-right", "bottom-left" */
            'position' => 'top-right',
            'square' => false,
        ],
    ],

    // ...
    HTML;
}
