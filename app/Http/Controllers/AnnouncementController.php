<?php

namespace App\Http\Controllers;

use App\Services\Interface\AnnouncementService;
use App\Services\Interface\FooterService;
use App\Services\Interface\CategoryService;

class AnnouncementController extends Controller
{
    public function __construct(
        private FooterService $footerRepository,
        private CategoryService $categoryRepository,
        private AnnouncementService $announcementRepository
    ) {}

    public function announcement()
    {
        $footer = $this->footerRepository->getFooter();
        $categories = $this->categoryRepository->getAllCategories();
        $announcements = $this->announcementRepository->getAllAnnouncements();

        return view('pages.announcement', compact(
            'footer',
            'categories',
            'announcements'
        ));
    }
}
