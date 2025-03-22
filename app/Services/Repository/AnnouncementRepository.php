<?php

namespace App\Services\Repository;

use App\Models\Announcement;
use App\Services\Interface\AnnouncementService;

class AnnouncementRepository implements AnnouncementService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getAllAnnouncements()
    {
        return Announcement::all();
    }

    public function getTheLatestAnnouncements()
    {
        return Announcement::latest()->take(3)->get();
    }

    public function getAnnouncementBySlug(string $slug)
    {
        try {
            return Announcement::where('slug', $slug)->firstOrFail();
        } catch (\Throwable $th) {
            return null;
        }
    }
}
