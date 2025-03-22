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

    public function getTheLatestNews()
    {
        return News::latest()->take(3)->get();
    }

    public function getNewsBySlug(string $slug)
    {
        try {
            return News::where('slug', $slug)->firstOrFail();
        } catch (\Throwable $th) {
            return null;
        }
    }
}
