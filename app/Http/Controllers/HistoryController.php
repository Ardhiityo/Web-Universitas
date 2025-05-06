<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Interface\CategoryService;
use App\Services\Interface\HistoryService;

class HistoryController extends Controller
{
    public function __construct(
        private CategoryService $categoryRepository,
        private HistoryService $historyRepository
    ) {}

    public function history()
    {
        $categories = $this->categoryRepository->getAllCategories();
        $history = $this->historyRepository->getHistory();

        return view('pages.history', compact('categories', 'history'));
    }
}
