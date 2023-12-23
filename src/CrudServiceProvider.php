<?php

namespace Sasoibal\Crud;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class CrudServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'crud');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }


    /**
     * Bootstrap the package services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
    }

}
