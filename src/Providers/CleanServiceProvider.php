<?php

namespace Fakhrulrazi\Clean\Providers;

use Illuminate\Support\ServiceProvider;
use Fakhrulrazi\Clean\Console\Commands\cleanup ;

class CleanServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
      $this->commands([
        cleanup::class
      ]);
    }
}
