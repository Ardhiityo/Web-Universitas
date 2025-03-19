<?php

namespace App\Services\Repository;

use App\Models\News;
use App\Services\Interface\NewsService;

class NewsRepository implements NewsService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getAllNews()
    {
        return News::all();
    }
}
