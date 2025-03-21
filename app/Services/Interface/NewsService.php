<?php

namespace App\Services\Interface;

interface NewsService
{
    public function getTheLatestNews();
    public function getNewsBySlug(string $slug);
}
