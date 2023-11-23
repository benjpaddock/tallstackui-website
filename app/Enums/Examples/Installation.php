<?php

namespace App\Enums\Examples;

class Installation
{
    public const INSTALLATION = <<<'HTML'
    composer require tallstackui/tallstackui
    HTML;

    public const CLOAK = <<<'HTML'
    <html>
        <head>
            <style> [x-cloak] { display: none; } </style> {{-- [tl! highlight] --}}

            <!-- ... -->
        </head>
    </html>
    HTML;

    public const SCRIPT = <<<'HTML'
    <html>
        <head>
            <!-- ... -->

            <tallstackui:script /> {{-- [tl! highlight] --}}
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        </head>
    </html>
    HTML;

    public const MANUAL = <<<'HTML'
    <html>
        <head>
            <!-- Blade Directives -->
            @tallStackUiScripts {{-- [tl! highlight:1] --}}
            @tallStackUiStyles

            <!-- ... or Livewire Style -->
            <tallstackui:script /> {{-- [tl! highlight:1] --}}
            <tallstackui:style />
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        </head>
    </html>
    HTML;

    public const TAILWINDCSS = <<<'HTML'
    // ...

    presets: [
        require('./vendor/tallstackui/tallstackui/tailwind.config.js')
    ],

    content: [
        // ...

        './vendor/tallstackui/tallstackui/src/**/*.php',
    ],
    HTML;

    public const BUILD = <<<'HTML'
    npm run build && php artisan optimize:clear
    HTML;
}
