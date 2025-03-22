<?php

namespace App\Services\Interface;

use App\Models\Announcement;

interface AnnouncementService
{
    public function getAllAnnouncements();
    public function getTheLatestAnnouncements();
    public function getAnnouncementBySlug(string $slug);
}
