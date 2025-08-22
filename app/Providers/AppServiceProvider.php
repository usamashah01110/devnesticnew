<?php

namespace App\Providers;

use App\Models\DeveloperEducation;
use App\Repositories\Interfaces\SectionOneRepositoryInterface;
use App\Repositories\Interfaces\SectionTwoRepositoryInterface;
use App\Repositories\Interfaces\SectionThreeRepositoryInterface;
use App\Repositories\Interfaces\SectionFourRepositoryInterface;
use App\Repositories\Interfaces\SectionFiveRepositoryInterface;
use App\Repositories\Interfaces\SectionSixRepositoryInterface;
use App\Repositories\Interfaces\SectionSevenRepositoryInterface;
use App\Repositories\Interfaces\SectionEightRepositoryInterface;
use App\Repositories\Interfaces\SectionNineRepositoryInterface;
use App\Repositories\Interfaces\DeveloperEducationInterface;
use App\Repositories\SectionOneRepository;
use App\Repositories\SectionTwoRepository;
use App\Repositories\SectionThreeRepository;
use App\Repositories\SectionFourRepository;
use App\Repositories\SectionFiveRepository;
use App\Repositories\SectionSixRepository;
use App\Repositories\SectionSevenRepository;
use App\Repositories\SectionEightRepository;
use App\Repositories\SectionNineRepository;
use App\Repositories\DeveloperEducationRepository;
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
        $this->app->bind(SectionSixRepositoryInterface::class, SectionSixRepository::class);
        $this->app->bind(SectionSevenRepositoryInterface::class, SectionSevenRepository::class);
        $this->app->bind(SectionEightRepositoryInterface::class, SectionEightRepository::class);
        $this->app->bind(SectionNineRepositoryInterface::class, SectionNineRepository::class);
        $this->app->bind(DeveloperEducationInterface::class, DeveloperEducationRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
