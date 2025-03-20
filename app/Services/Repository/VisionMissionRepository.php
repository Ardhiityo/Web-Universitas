<?php

namespace App\Services\Repository;

use App\Models\VisionMission;
use App\Services\Interface\VisionMissionService;

class VisionMissionRepository implements VisionMissionService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getVisionMission()
    {
        return VisionMission::first();
    }
}
