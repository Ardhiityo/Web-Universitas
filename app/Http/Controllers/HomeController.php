<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use App\Services\Interface\NewsService;
use App\Services\Interface\FooterService;
use App\Services\Interface\RectorService;
use App\Services\Interface\AboutMeService;
use App\Services\Interface\AnnouncementService;
use App\Services\Interface\CategoryService;
use App\Services\Interface\CooperationService;

class HomeController extends Controller
{
    public function __construct(
        private FooterService $footerRepository,
        private AnnouncementService $announcementRepository,
        private RectorService $rectorRepository,
        private NewsService $newsRepository,
        private AboutMeService $aboutMeRepository,
        private CooperationService $cooperationRepository,
        private CategoryService $categoryRepository
    ) {}

    public function home()
    {
        $allNews = $this->newsRepository->getAllNews();
        $footer = $this->footerRepository->getFooter();
        $aboutMe = $this->aboutMeRepository->getAboutMe();
        $rectors = $this->rectorRepository->getAllRectors();
        $announcements = $this->announcementRepository->getAllAnnouncements();
        $cooperations = $this->cooperationRepository->getAllCooperations();
        $categories = $this->categoryRepository->getAllCategories();

        return view(
            'index',
            compact(
                'footer',
                'announcements',
                'rectors',
                'allNews',
                'aboutMe',
                'cooperations',
                'categories'
            )
        );
    }
}
