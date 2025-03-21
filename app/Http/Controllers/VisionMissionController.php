<?php

namespace App\Http\Controllers;

use App\Services\Interface\FooterService;
use App\Services\Interface\CategoryService;
use App\Services\Interface\VisionMissionService;

class VisionMissionController extends Controller
{
    public function __construct(
        private FooterService $footerRepository,
        private CategoryService $categoryRepository,
        private VisionMissionService $visionMissionRepository
    ) {}

    public function visionMission()
    {
        $footer = $this->footerRepository->getFooter();
        $categories = $this->categoryRepository->getAllCategories();
        $visionMission = $this->visionMissionRepository->getVisionMission();

        return view('pages.vision-mission', compact('categories', 'visionMission', 'footer'));
    }
}
