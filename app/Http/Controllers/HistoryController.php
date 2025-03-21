<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Interface\FooterService;
use App\Services\Interface\CategoryService;
use App\Services\Interface\HistoryService;

class HistoryController extends Controller
{
    public function __construct(
        private FooterService $footerRepository,
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
