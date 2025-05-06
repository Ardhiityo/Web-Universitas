<?php

namespace App\Http\Controllers;

use App\Services\Interface\CategoryService;
use App\Services\Interface\HumanResourceService;

class HumanResourceController extends Controller
{
    public function __construct(
        private CategoryService $categoryRepository,
        private HumanResourceService $humanResourceRepository
    ) {}

    public function humanResource()
    {

        $categories = $this->categoryRepository->getAllCategories();
        $admins = $this->humanResourceRepository->getAdmins();
        $lectures = $this->humanResourceRepository->getLectures();

        return view('pages.human-resource', compact(
            'categories',
            'lectures',
            'admins'
        ));
    }
}
