<?php

namespace App\Services\Interface;

interface NewsService
{
    public function getAllNews();
    public function getTheLatestNews();
    public function getNewsBySlug(string $slug);
}
