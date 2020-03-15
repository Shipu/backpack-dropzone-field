<?php

namespace Shipu\Backpack\Dropzone;

use Illuminate\Support\ServiceProvider;

class BackpackDropzoneServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        app('view')->addLocation(__DIR__ . '/resources/');

        // publish public assets
        $this->publishes([ __DIR__ . '/assets' => public_path('vendor/shipu/backpack-dropzone') ], 'public');
    }
}
