<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\PacienteRepositoryInterface;
use App\Repositories\PacienteRepository;
use App\Services\PacienteService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PacienteRepositoryInterface::class, PacienteRepository::class);
        $this->app->singleton(PacienteService::class, function ($app) {
            return new PacienteService($app->make(PacienteRepositoryInterface::class));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
