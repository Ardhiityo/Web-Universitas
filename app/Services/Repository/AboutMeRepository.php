<?php

namespace App\Services\Repository;

use App\Models\AboutMe;
use App\Services\Interface\AboutMeService;

class AboutMeRepository implements AboutMeService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getAboutMe()
    {
        return AboutMe::first();
    }
}
