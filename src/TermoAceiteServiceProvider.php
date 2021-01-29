<?php
namespace ApplySystem\TermosAceite;

use Illuminate\Support\ServiceProvider;

class TermoAceiteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'termoAceite');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    }
    public function register()
    {

    }
}
