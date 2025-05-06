<?php

namespace App\Http\Controllers;

use App\Services\Interface\CategoryService;
use App\Services\Interface\NewsService;

class NewsController extends Controller
{
    public function __construct(
        private CategoryService $categoryRepository,
        private NewsService $newsRepository
    ) {}

    public function news()
    {
        $categories = $this->categoryRepository->getAllCategories();
        $allNews = $this->newsRepository->getAllNews();

        return view('pages.news', compact(

            'categories',
            'allNews'
        ));
    }

    public function newsDetail(string $slug)
    {
        if (!$news = $this->newsRepository->getNewsBySlug($slug))
            return redirect()->route('home');

        $categories = $this->categoryRepository->getAllCategories();

        return view('pages.news-detail', compact('news', 'categories'));
    }
}
