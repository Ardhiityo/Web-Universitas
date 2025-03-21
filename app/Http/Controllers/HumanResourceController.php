<?php

namespace App\Http\Controllers;

use App\Services\Interface\FooterService;
use App\Services\Interface\HistoryService;
use App\Services\Interface\CategoryService;
use App\Services\Interface\HumanResourceService;

class HumanResourceController extends Controller
{
    public function __construct(
        private FooterService $footerRepository,
        private CategoryService $categoryRepository,
        private HumanResourceService $humanResourceRepository
    ) {}

    public function humanResource()
    {
        $footer = $this->footerRepository->getFooter();
        $categories = $this->categoryRepository->getAllCategories();
        $admins = $this->humanResourceRepository->getAdmins();
        $lectures = $this->humanResourceRepository->getLectures();

        return view('pages.human-resource', compact(
            'categories',
            'footer',
            'lectures',
            'admins'
        ));
    }
}
