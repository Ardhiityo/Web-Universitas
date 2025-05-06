<?php

namespace App\Http\Controllers;

use App\Services\Interface\AnnouncementService;
use App\Services\Interface\CategoryService;

class AnnouncementController extends Controller
{
    public function __construct(
        private CategoryService $categoryRepository,
        private AnnouncementService $announcementRepository
    ) {}

    public function announcement()
    {
        $categories = $this->categoryRepository->getAllCategories();
        $announcements = $this->announcementRepository->getAllAnnouncements();

        return view('pages.announcement', compact(
            'categories',
            'announcements'
        ));
    }

    public function announcementDetail(string $slug)
    {
        if (!$announcement = $this->announcementRepository->getAnnouncementBySlug($slug))
            return redirect()->route('home');

        $categories = $this->categoryRepository->getAllCategories();

        return view('pages.announcement-detail', compact(
            'categories',
            'announcement'
        ));
    }
}
