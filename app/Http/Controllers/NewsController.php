<?php

namespace App\Http\Controllers;

use App\Services\Interface\FooterService;
use App\Services\Interface\CategoryService;
use App\Services\Interface\NewsService;

class NewsController extends Controller
{
    public function __construct(
        private FooterService $footerRepository,
        private CategoryService $categoryRepository,
        private NewsService $newsRepository
    ) {}

    public function news()
    {
        $footer = $this->footerRepository->getFooter();
        $categories = $this->categoryRepository->getAllCategories();
        $allNews = $this->newsRepository->getAllNews();

        return view('pages.news', compact(
            'footer',
            'categories',
            'allNews'
        ));
    }

    public function newsDetail(string $slug)
    {
        if (!$news = $this->newsRepository->getNewsBySlug($slug))
            return redirect()->route('home');

        $footer = $this->footerRepository->getFooter();
        $categories = $this->categoryRepository->getAllCategories();

        return view('pages.news-detail', compact('news', 'footer', 'categories'));
    }
}
