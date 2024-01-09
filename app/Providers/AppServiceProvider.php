<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Disable wrapping resources with 'data' key
        JsonResource::withoutWrapping();

        // Eager loading for all models
        Model::preventLazyLoading();

        // Disable mass assignment protection
//        Model::unguard();
    }
}
