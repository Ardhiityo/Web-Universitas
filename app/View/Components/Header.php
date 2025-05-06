<?php

namespace App\View\Components;

use Closure;
use App\Services\Interface\CategoryService;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
{
    public $categories;

    /**
     * Create a new component instance.
     */
    public function __construct(CategoryService $categoryService)
    {
        $this->categories = $categoryService->getAllCategories();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header');
    }
}
