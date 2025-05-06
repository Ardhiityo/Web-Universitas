<?php

namespace App\Http\Controllers;

use App\Services\Interface\CategoryService;
use App\Services\Interface\FacilityService;
use App\Services\Interface\GreetingService;

class FacilityController extends Controller
{
    public function __construct(
        private CategoryService $categoryRepository,
        private GreetingService $greetingRepository,
        private FacilityService $facilityRepository
    ) {}

    public function facility()
    {
        $categories = $this->categoryRepository->getAllCategories();
        $greeting = $this->greetingRepository->getGreeting();
        $facilities = $this->facilityRepository->getAllFacilities();

        return view('pages.facility', compact('facilities', 'facilities', 'categories'));
    }
}
