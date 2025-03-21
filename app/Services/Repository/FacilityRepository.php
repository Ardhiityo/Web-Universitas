<?php

namespace App\Services\Repository;

use App\Models\Facility;
use App\Services\Interface\FacilityService;

class FacilityRepository implements FacilityService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getAllFacilities()
    {
        return Facility::all();
    }
}
