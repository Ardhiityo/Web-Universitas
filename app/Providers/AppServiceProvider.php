<?php

namespace App\Providers;

use App\Models\News;
use App\Models\Admin;
use App\Models\Footer;
use App\Models\Rector;
use App\Models\AboutMe;
use App\Models\History;
use App\Models\Lecture;
use App\Models\Student;
use App\Models\Facility;
use App\Models\Greeting;
use App\Models\Cooperation;
use App\Models\VisionMission;
use Illuminate\Support\Carbon;
use App\Observers\NewsObserver;
use App\Observers\AdminObserver;
use App\Observers\FooterObserver;
use App\Observers\RectorObserver;
use App\Observers\AboutMeObserver;
use App\Observers\HistoryObserver;
use App\Observers\LectureObserver;
use App\Observers\StudentObserver;
use App\Observers\FacilityObserver;
use App\Observers\GreetingObserver;
use App\Observers\CooperationObserver;
use Illuminate\Support\ServiceProvider;
use App\Observers\VisionMissionObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void {}

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Carbon::setLocale('id');

        News::observe(NewsObserver::class);
        Admin::observe(AdminObserver::class);
        Rector::observe(RectorObserver::class);
        Footer::observe(FooterObserver::class);
        Lecture::observe(LectureObserver::class);
        Student::observe(StudentObserver::class);
        History::observe(HistoryObserver::class);
        AboutMe::observe(AboutMeObserver::class);
        Lecture::observe(LectureObserver::class);
        Facility::observe(FacilityObserver::class);
        Greeting::observe(GreetingObserver::class);
        Cooperation::observe(CooperationObserver::class);
        VisionMission::observe(VisionMissionObserver::class);
    }
}
