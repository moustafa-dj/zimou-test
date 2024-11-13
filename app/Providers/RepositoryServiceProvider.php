<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */

    protected $repos = [
        \App\Contracts\PackageContract::class =>  \App\Repositories\PackageRepository::class 
    ];
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        foreach($this->repos as $abstract => $concrete)
        {
            $this->app->singleton($abstract , $concrete);
        }
    }
}
