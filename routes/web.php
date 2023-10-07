<?php

use App\Http\Controllers\Documentation\Alert;
use App\Http\Controllers\Documentation\Card;
use App\Http\Controllers\Documentation\GetStarted;
use App\Http\Controllers\Documentation\Modal;
use App\Http\Controllers\Documentation\Tab;
use App\Http\Controllers\Documentation\Tooltip;
use Illuminate\Support\Facades\Route;

Route::view('/', 'documentation.welcome')->name('welcome');

Route::prefix('/docs')
    ->name('documentation.')
    ->group(function () {
        Route::get('/get-started', GetStarted::class)->name('get-started');

        Route::prefix('/ui')
            ->name('ui.')
            ->group(function () {
                Route::get('/alerts', Alert::class)->name('alert');
                Route::get('/card', Card::class)->name('card');
                Route::get('/tabs', Tab::class)->name('tab');
                Route::get('/tooltip', Tooltip::class)->name('tooltip');
                Route::get('/modal', Modal::class)->name('modal');
            });
    });
