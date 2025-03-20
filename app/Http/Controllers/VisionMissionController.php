<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Interface\NewsService;
use App\Services\Interface\FooterService;
use App\Services\Interface\RectorService;
use App\Services\Interface\AboutMeService;
use App\Services\Interface\HistoryService;
use App\Services\Interface\CategoryService;
use App\Services\Interface\CooperationService;
use App\Services\Interface\AnnouncementService;
use App\Services\Interface\VisionMissionService;

class VisionMissionController extends Controller
{
    public function __construct(
        private FooterService $footerRepository,
        private AnnouncementService $announcementRepository,
        private RectorService $rectorRepository,
        private NewsService $newsRepository,
        private AboutMeService $aboutMeRepository,
        private CooperationService $cooperationRepository,
        private CategoryService $categoryRepository,
        private HistoryService $historyRepository,
        private VisionMissionService $visionMissionRepository
    ) {}

    public function visionMission()
    {
        $allNews = $this->newsRepository->getAllNews();
        $footer = $this->footerRepository->getFooter();
        $aboutMe = $this->aboutMeRepository->getAboutMe();
        $rectors = $this->rectorRepository->getAllRectors();
        $announcements = $this->announcementRepository->getAllAnnouncements();
        $cooperations = $this->cooperationRepository->getAllCooperations();
        $categories = $this->categoryRepository->getAllCategories();
        $visionMission = $this->visionMissionRepository->getVisionMission();

        return view('pages.vision-mission', compact('categories', 'visionMission', 'footer'));
    }
}
