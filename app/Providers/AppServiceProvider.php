<?php

namespace App\Providers;

use App\Repositories\Interfaces\SectionOneRepositoryInterface;
use App\Repositories\Interfaces\SectionTwoRepositoryInterface;
use App\Repositories\SectionOneRepository;
use App\Repositories\SectionTwoRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(SectionOneRepositoryInterface::class, SectionOneRepository::class);
        $this->app->bind(SectionTwoRepositoryInterface::class, SectionTwoRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
