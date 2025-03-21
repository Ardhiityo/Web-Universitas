<?php

namespace App\Services\Repository;

use App\Models\Admin;
use App\Models\Lecture;
use App\Services\Interface\HumanResourceService;

class HumanResourceRepository implements HumanResourceService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getAdmins()
    {
        return Admin::all();
    }

    public function getLectures()
    {
        return Lecture::all();
    }
}
