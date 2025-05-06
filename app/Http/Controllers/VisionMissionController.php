<?php

namespace App\Http\Controllers;

use App\Services\Interface\CategoryService;
use App\Services\Interface\VisionMissionService;

class VisionMissionController extends Controller
{
    public function __construct(
        private CategoryService $categoryRepository,
        private VisionMissionService $visionMissionRepository
    ) {}

    public function visionMission()
    {
        $categories = $this->categoryRepository->getAllCategories();
        $visionMission = $this->visionMissionRepository->getVisionMission();

        return view('pages.vision-mission', compact('categories', 'visionMission'));
    }
}
