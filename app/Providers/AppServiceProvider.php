<?php

namespace App\Providers;

use App\Services\Interface\NewsService;
use Illuminate\Support\ServiceProvider;
use App\Services\Interface\FooterService;
use App\Services\Interface\RectorService;
use App\Services\Interface\AboutMeService;
use App\Services\Interface\HistoryService;
use App\Services\Interface\CategoryService;
use App\Services\Repository\NewsRepository;
use App\Services\Repository\FooterRepository;
use App\Services\Repository\RectorRepository;
use App\Services\Interface\CooperationService;
use App\Services\Repository\AboutMeRepository;
use App\Services\Repository\HistoryRepository;
use App\Services\Interface\AnnouncementService;
use App\Services\Interface\VisionMissionService;
use App\Services\Repository\CategoryRepository;
use App\Services\Repository\CooperationRepository;
use App\Services\Repository\AnnouncementRepository;
use App\Services\Repository\VisionMissionRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(NewsService::class, NewsRepository::class);
        $this->app->bind(FooterService::class, FooterRepository::class);
        $this->app->bind(RectorService::class, RectorRepository::class);
        $this->app->bind(AboutMeService::class, AboutMeRepository::class);
        $this->app->bind(HistoryService::class, HistoryRepository::class);
        $this->app->bind(CategoryService::class, CategoryRepository::class);
        $this->app->bind(CooperationService::class, CooperationRepository::class);
        $this->app->bind(AnnouncementService::class, AnnouncementRepository::class);
        $this->app->bind(VisionMissionService::class, VisionMissionRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
