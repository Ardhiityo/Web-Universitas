<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Interface\NewsService;
use App\Services\Interface\FooterService;
use App\Services\Interface\RectorService;
use App\Services\Interface\AboutMeService;
use App\Services\Interface\CategoryService;
use App\Services\Interface\CooperationService;
use App\Services\Interface\AnnouncementService;
use App\Services\Interface\HistoryService;

class HistoryController extends Controller
{
    public function __construct(
        private FooterService $footerRepository,
        private AnnouncementService $announcementRepository,
        private RectorService $rectorRepository,
        private NewsService $newsRepository,
        private AboutMeService $aboutMeRepository,
        private CooperationService $cooperationRepository,
        private CategoryService $categoryRepository,
        private HistoryService $historyRepository
    ) {}

    public function history()
    {
        $footer = $this->footerRepository->getFooter();
        $categories = $this->categoryRepository->getAllCategories();
        $history = $this->historyRepository->getHistory();

        return view('pages.history', compact('categories', 'history', 'footer'));
    }
}
