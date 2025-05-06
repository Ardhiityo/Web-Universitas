<?php

namespace App\View\Components;

use App\Services\Interface\FooterService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\Component;

class Footer extends Component
{
    public $footer;

    /**
     * Create a new component instance.
     */
    public function __construct(FooterService $footerService)
    {
        $this->footer = Cache::remember('footer', '3600', function () use ($footerService) {
            return $footerService->getFooter();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer');
    }
}
