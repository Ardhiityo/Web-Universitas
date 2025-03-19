<?php

namespace App\Services\Repository;

use App\Models\Cooperation;
use App\Services\Interface\CooperationService;

class CooperationRepository implements CooperationService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getAllCooperations()
    {
        return Cooperation::all();
    }
}
