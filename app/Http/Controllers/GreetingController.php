<?php

namespace App\Http\Controllers;

use App\Services\Interface\CategoryService;
use App\Services\Interface\GreetingService;

class GreetingController extends Controller
{
    public function __construct(
        private CategoryService $categoryRepository,
        private GreetingService $greetingRepository
    ) {}

    public function greeting()
    {
        $categories = $this->categoryRepository->getAllCategories();
        $greeting = $this->greetingRepository->getGreeting();

        return view('pages.greeting', compact(
            'greeting',
            'categories'
        ));
    }
}
