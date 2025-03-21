<?php

namespace App\Http\Controllers;

use App\Services\Interface\FooterService;
use App\Services\Interface\CategoryService;
use App\Services\Interface\GreetingService;

class GreetingController extends Controller
{
    public function __construct(
        private FooterService $footerRepository,
        private CategoryService $categoryRepository,
        private GreetingService $greetingRepository
    ) {}

    public function greeting()
    {
        $footer = $this->footerRepository->getFooter();
        $categories = $this->categoryRepository->getAllCategories();
        $greeting = $this->greetingRepository->getGreeting();

        return view('pages.greeting', compact(
            'greeting',
            'footer',
            'categories'
        ));
    }
}
