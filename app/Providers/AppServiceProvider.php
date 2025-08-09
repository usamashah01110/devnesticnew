<?php

namespace App\Providers;

use App\Repositories\Interfaces\SectionOneRepositoryInterface;
use App\Repositories\Interfaces\SectionTwoRepositoryInterface;
use App\Repositories\Interfaces\SectionThreeRepositoryInterface;
use App\Repositories\Interfaces\SectionFourRepositoryInterface;
use App\Repositories\Interfaces\SectionFiveRepositoryInterface;
use App\Repositories\SectionOneRepository;
use App\Repositories\SectionTwoRepository;
use App\Repositories\SectionThreeRepository;
use App\Repositories\SectionFourRepository;
use App\Repositories\SectionFiveRepository;
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
        $this->app->bind(SectionThreeRepositoryInterface::class, SectionThreeRepository::class);
        $this->app->bind(SectionFourRepositoryInterface::class, SectionFourRepository::class);
        $this->app->bind(SectionFiveRepositoryInterface::class, SectionFiveRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
