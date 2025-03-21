<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Interface\FooterService;
use App\Services\Interface\CategoryService;
use App\Services\Interface\FacilityService;
use App\Services\Interface\GreetingService;

class FacilityController extends Controller
{
    public function __construct(
        private FooterService $footerRepository,
        private CategoryService $categoryRepository,
        private GreetingService $greetingRepository,
        private FacilityService $facilityRepository
    ) {}

    public function facility()
    {
        $footer = $this->footerRepository->getFooter();
        $categories = $this->categoryRepository->getAllCategories();
        $greeting = $this->greetingRepository->getGreeting();
        $facilities = $this->facilityRepository->getAllFacilities();

        return view('pages.facility', compact('facilities', 'footer', 'facilities', 'categories'));
    }
}
