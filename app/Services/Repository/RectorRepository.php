<?php

namespace App\Services\Repository;

use App\Models\Rector;
use App\Services\Interface\RectorService;

class RectorRepository implements RectorService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getAllRectors()
    {
        return Rector::all();
    }
}
